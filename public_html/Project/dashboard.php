<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<h1>Home</h1>
<?php
if (is_logged_in(true)) {
    echo "Welcome home, " . get_username();
    //comment this out if you don't want to see the session variables
    //echo "<pre>" . var_export($_SESSION, true) . "</pre>";
}
?>

<ul>
    <li><a class="dash-link" href="<?php echo get_url('accountCreating.php');?>">Create Account</li>
    <li><a class="dash-link" href="<?php echo get_url('accountsOwn.php');?>">My Accounts</li>
    <li><a class="dash-link" href="<?php echo get_url('accountsDepositWithdraw.php');?>">Deposit/Withdraw</li>
    <li><a class="dash-link" href="<?php echo get_url('accountsTransaction.php');?>">Transaction History</li>
    <li><a class="dash-link" href="<?php echo get_url('profile.php');?>">Profile</li>
</ul>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>