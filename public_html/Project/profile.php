<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>
<?php
if (isset($_POST["save"])) {
    $email = se($_POST, "email", null, false);
    $username = se($_POST, "username", null, false);
    $fname = se($_POST, "fname", null, false);
    $lname = se($_POST, "lname", null, false);
    $public = se($_POST, "public", null, false);
    $hasError = false;
    //sanitize
    $email = sanitize_email($email);
    //validate
    if (!is_valid_email($email)) {
        flash("Invalid email address", "danger");
        $hasError = true;
    }
    if (!is_valid_username($username)) {
        flash("Username must only contain 3-16 characters a-z, 0-9, _, or -", "danger");
        $hasError = true;
    }
    if (!is_valid_fname($fname)) {
        flash("First name needs to be longer than 3 characters", "danger");
        $hasError = true;
    }
    if (!is_valid_lname($lname)) {
        flash("Last name needs to be longer than 1 character", "danger");
        $hasError = true;
    }

    if (!$hasError) {
        $params = [":email" => $email, ":username" => $username, ":fname" => $fname, ":lname" => $lname,":id" => get_user_id(), ":public" => $public];
        $db = getDB();
        $stmt = $db->prepare("UPDATE Users set email = :email, username = :username, fname = :fname, lname = :lname, public = :public where id = :id");
        try {
            $stmt->execute($params);
            flash("Profile saved", "success");
        } catch (Exception $e) {
            users_check_duplicate($e->errorInfo);
        }
        //select fresh data from table
        $stmt = $db->prepare("SELECT id, email, fname, lname, public, IFNULL(username,email) as `username` from Users where id = :id LIMIT 1");
        try {
            $stmt->execute([":id" => get_user_id()]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user) {
                //$_SESSION["user"] = $user;
                $_SESSION["user"]["email"] = $user["email"];
                $_SESSION["user"]["username"] = $user["username"];
                $_SESSION["user"]["fname"] = $user["fname"];
                $_SESSION["user"]["lname"] = $user["lname"];
                $_SESSION["user"]["public"] = $user["public"];
            } else {
                flash("User doesn't exist", "danger");
            }
        } catch (Exception $e) {
            flash("An unexpected error occurred, please try again", "danger");
            //echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
        }
    }


    //check/update password
    $current_password = se($_POST, "currentPassword", null, false);
    $new_password = se($_POST, "newPassword", null, false);
    $confirm_password = se($_POST, "confirmPassword", null, false);
    if (!empty($current_password) && !empty($new_password) && !empty($confirm_password)) {
        $hasError = false;
        if (!is_valid_password($new_password)) {
            flash("Password too short", "danger");
            $hasError = true;
        }
        if (!$hasError) {
            if ($new_password === $confirm_password) {
                //TODO validate current
                $stmt = $db->prepare("SELECT password from Users where id = :id");
                try {
                    $stmt->execute([":id" => get_user_id()]);
                    $result = $stmt->fetch(PDO::FETCH_ASSOC);
                    if (isset($result["password"])) {
                        if (password_verify($current_password, $result["password"])) {
                            $query = "UPDATE Users set password = :password where id = :id";
                            $stmt = $db->prepare($query);
                            $stmt->execute([
                                ":id" => get_user_id(),
                                ":password" => password_hash($new_password, PASSWORD_BCRYPT)
                            ]);

                            flash("Password reset", "success");
                        } else {
                            flash("Current password is invalid", "warning");
                        }
                    }
                } catch (Exception $e) {
                    echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
                }
            } else {
                flash("New passwords don't match", "warning");
            }
        }
    }
}
?>

<?php
$email = get_user_email();
$username = get_username();
$fname = get_fname();
$lname = get_lname();
$public = get_public();
?>
<div class="container-fluid">
    <h1>Profile</h1>
    <form method="POST" onsubmit="return validate(this);">
        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" value="<?php se($email); ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="username">Username</label>
            <input class="form-control" type="text" name="username" id="username" value="<?php se($username); ?>" />
        </div>

        <div class="mb-3">
        <label class="form-label" for="fname">First Name</label>
            <input class="form-control" type="text" name="fname" id="fname" value="<?php se($fname); ?>" />
        </div>

        <div class="mb-3">
        <label class="form-label" for="fname">Last Name</label>
            <input class="form-control" type="text" name="lname" id="lname" value="<?php se($lname); ?>" />
        </div>
        <br>
        <!-- DO NOT PRELOAD PASSWORD -->
        <div class="mb-3">Password Reset</div>
        <div class="mb-3">
            <label class="form-label" for="cp">Current Password</label>
            <input class="form-control" type="password" name="currentPassword" id="cp" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="np">New Password</label>
            <input class="form-control" type="password" name="newPassword" id="np" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="conp">Confirm Password</label>
            <input class="form-control" type="password" name="confirmPassword" id="conp" />
        </div>
        <br>
        <div class="mb-3">
        <label class="form-label" for="public">Account Status: </label>
        <?php 
            if($public == '1'){
                echo"Account is Public";
            }else{
                echo"Account is Private";
            }
        ?>
            <select name="public" id="public">
                <option value=1>Public</option>
                <option value=0>Private</option>
            </select>
        </div>
        <input type="submit" class="mt-3 btn btn-primary" value="Update Profile" name="save" />
    </form>
</div>

<script>
    function validate(form) {
        let pw = form.newPassword.value;
        let con = form.confirmPassword.value;
        let isValid = true;
        //TODO add other client side validation....

        //example of using flash via javascript
        //find the flash container, create a new element, appendChild
        if (pw !== con) {
            flash("Password and Confirm password must match", "warning");
            isValid = false;
        }
        return isValid;
    }
</script>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>