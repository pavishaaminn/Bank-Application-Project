<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Pavisha Amin (pa284)</td></tr>
<tr><td> <em>Generated: </em> 11/14/2022 10:14:01 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone1-deliverable/grade/pa284" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><ol><li>NOTE: You may want to try to capture as much checklist evidence in your screenshots as possible, you do not need individual screenshots and are recommended to combine things when possible. Also, some screenshots may be reused if applicable.</li></ol><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201788357-38389c0a-2c91-4092-815c-a071866996af.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the invalid email validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201789054-04512f6c-2659-4b6e-bb38-e2a0b59f3a7f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the invalid password validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201788858-dc6976d1-ded0-4608-8f2d-87792531b55a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows password not much validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201788805-9b164770-fb96-4b72-83cd-c7904a90e779.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the email not available<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201789623-f6839831-0e81-4d85-bfb1-973ad6c2a86a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the username taken already<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201789802-0b551e92-7fb4-4ad0-92e7-2ea92a48cea5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the valid information shown before submitting<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201790811-7e6a6ffc-2a1f-4ac1-a35f-c0b544439ecd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This screenshot includes my last year users and this year according to date<br>on this table.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/pa284/IT202-009/pull/46">https://github.com/pa284/IT202-009/pull/46</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The form is handled by being in the most generic order: email, username,<br>password, and confirm password.&nbsp;<div>Validation logic is the easiest. Frontend is the way the<br>design is laid out with also the structure of it, backend is the<br>logic and structure behind it.</div><div>The password is handled with the characters and special<br>characters that are required as well as the length of it.</div><div>The DB is<br>utilized by once creating an account, it going straight to the DB and<br>showing up there.</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201793560-fa065f1b-a6f6-419f-8a65-ef616967ee12.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the passwords are different and this popup shows when registering<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201793676-9d81d5e8-bcff-4654-bda7-e1cc37f4e707.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The invalid password pop up when it does show<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201795214-29cd28e5-9ac8-4499-8512-db14b4a6f5fa.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Successful login through my email and password<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/pa284/IT202-009/pull/43">https://github.com/pa284/IT202-009/pull/43</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>the form is handled by making sure the password once logged in is<br>the same as when the account was created<div>frontend showed the from of email/username<br>and then password underneath but then the backend is the logic to make<br>sure that the login works when one remembers their password and email</div><div>password is<br>handled by the database and the saved passwords in the system</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201795815-314244fb-8500-42c3-9ee4-ca583c1afb2c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>message showing I successfully logged out<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201796161-c72d9366-4bf2-48d7-a561-69c8d52f9fc7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this message shows that the user must be logged in, in order to<br>view the different pages accessible after login<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/pa284/IT202-009/pull/44">https://github.com/pa284/IT202-009/pull/44</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>session login is to confirm that you have access to the page with<br>the certain login access. without it, you can&#39;t have access to any pages<br>without being logged in.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201796161-c72d9366-4bf2-48d7-a561-69c8d52f9fc7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>same concept with not being able to view a page without being logged<br>in which is shown as required once you try to go to a<br>different page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201797463-6a4e9e73-1750-43e2-91d0-7386dcf91133.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this shows that the user doesn&#39;t have access to assign roles since they<br>are not admin<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201797710-ab1d59b9-0858-4b0e-9293-edba05703b37.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>from the database you can see the admin role being there<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201798311-faecca27-fdad-4c82-83a4-36499ba3e5ef.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this was made in 2021 and was just transferred over when I made<br>a whole new folder but this still is active where my old email<br><a href="mailto:&#x70;&#97;&#50;&#x38;&#52;&#x40;&#x6e;&#106;&#x69;&#x74;&#x2e;&#x65;&#100;&#x75;">&#x70;&#97;&#50;&#x38;&#52;&#x40;&#x6e;&#106;&#x69;&#x74;&#x2e;&#x65;&#100;&#x75;</a> works as admin and my new email <a href="mailto:&#112;&#x61;&#x76;&#105;&#x73;&#x68;&#x61;&#x2e;&#97;&#x6d;&#x69;&#110;&#50;&#x32;&#64;&#104;&#111;&#116;&#109;&#97;&#105;&#108;&#x2e;&#x63;&#111;&#109;">&#112;&#x61;&#x76;&#105;&#x73;&#x68;&#x61;&#x2e;&#97;&#x6d;&#x69;&#110;&#50;&#x32;&#64;&#104;&#111;&#116;&#109;&#97;&#105;&#108;&#x2e;&#x63;&#111;&#109;</a> works as a normal<br>user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/pa284/IT202-009/pull/59">https://github.com/pa284/IT202-009/pull/59</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>when the account is logged in, any pages with the access can see<br>it, but once logged out, you cannot see any page without logging back<br>in<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>for role protected pages, only the admin has access and if the admin<br>has access only they can edit and access things versus the normal user<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201808307-67dfe0f0-1d05-4e1a-a824-b309002cebe8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Changed the look and the common colors that I like (blue and white)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/pa284/IT202-009/pull/44">https://github.com/pa284/IT202-009/pull/44</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>the CSS I chose was to add more div sections and then format<br>the page easier with class statements in either a div, label, or input<br>section. This in turn changes the format of how the page looks overall.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201788805-9b164770-fb96-4b72-83cd-c7904a90e779.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this was user friendly for username being taken<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201796161-c72d9366-4bf2-48d7-a561-69c8d52f9fc7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this was the must be logged in, in order to view the requested<br>pages<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201793676-9d81d5e8-bcff-4654-bda7-e1cc37f4e707.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this shows the not valid password and that the correct one must be<br>entered.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/pa284/IT202-009/pull/44">https://github.com/pa284/IT202-009/pull/44</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>to handle technical issues, we have messages that appear through flash if it<br>doesn&#39;t work out.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201809034-ed17732f-8b9c-4241-b3da-f8458e61dd0b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this screenshot shows the user profile with email and username prefilled out<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/pa284/IT202-009/pull/46">https://github.com/pa284/IT202-009/pull/46</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>the data is retrieved every time the changes happened and is successful. it<br>is displayed in the data base as well.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/f2c037/000000?text=Partial"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201809847-6ade0358-3fa7-4ca1-9814-ca5a3ac432b8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show username validation message - changed pavisha to pavi successfully<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201810071-6c9a0277-442a-4eab-bc00-e44b03e6eb85.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show email validation message - changed my email from pa284 to kss69<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201810424-37033c65-da81-49fa-ad46-f115ed32ceee.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show password validation message - changed password successfully<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201809505-1e6662df-a447-4402-85da-1d03d3e8c7d3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show password mismatch message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201809598-dba09857-141d-4942-83b5-76ff25cb4efd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show email/username already in use message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>(missing)</p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201816392-93585447-eaa4-4bec-a850-9c216dab2be2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>At least one issue for Milestone1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201817001-f58e0970-3b67-42da-ad4f-010d5231c3af.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>At least one issue for Milestone2<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201817303-08ab84d5-09d0-4012-ad62-340beecdca23.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>At least one issue for Milestone3<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201817537-75780d67-6977-4751-a890-1349c8ec3808.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>At least one issue for Milestone4<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201816235-729b2a98-8f8c-4fdd-9c41-a1e61e77df77.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Project Board Perspective<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/users/pa284/projects/1">https://github.com/users/pa284/projects/1</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://pa284-prod.herokuapp.com/Project/login.php">https://pa284-prod.herokuapp.com/Project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone1-deliverable/grade/pa284" target="_blank">Grading</a></td></tr></table>