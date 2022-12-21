<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Bank Project</td></tr>
<tr><td> <em>Student: </em> Pavisha Amin (pa284)</td></tr>
<tr><td> <em>Generated: </em> 12/21/2022 6:17:54 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-2-bank-project/grade/pa284" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Create Accounts table and setup </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot from the db of the system user (Users table)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/209004954-01394b1d-d0aa-4d43-b87f-0e16c5e0b194.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the users table from the database which shows the id, email,<br>password, when it was created, modified, and their username<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot from the db of the world account (Accounts table)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/209005099-4836e89c-6db8-417a-afbe-faeb8aed99ee.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This screenshot shows the Accounts table with the id, account number(s), user_id number<br>(currently using the same one), the balance, the account_type (checking/savings), when it was<br>created and modified. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain the purpose and usage of these two entries and how they relate</td></tr>
<tr><td> <em>Response:</em> <p>The purpose and the usage of both of these are so that from<br>being able to create the user, you can have them create an account<br>(checking or savings) which can have any value of 5 or higher. This<br>helps with transactions when in the transaction table, they&#39;re going to need to<br>deposit or withdraw more or less money in their account. At least each<br>user will have their own designated account (checking or savings) in which they<br>themselves can edit.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/pa284/IT202-009/pull/86">https://github.com/pa284/IT202-009/pull/86</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Dashboard </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the requested links/navigation</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/209008303-0c9d0f81-3e0f-4f08-bde0-02619ef9a259.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This screenshot entails the navbar but also the dashboard which has 5 links<br>(create account, my accounts, deposit/withdraw, transaction history, and profile) which also leads to<br>their own designated pages.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain which ones are working for this milestone</td></tr>
<tr><td> <em>Response:</em> <p>Create Account, My Accounts, Deposit/Withdraw, &amp; Profile work for this milestone. Transaction History<br>which is still in the works, needs a bit of touch up but<br>the link still works to go to another page.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/pa284/IT202-009/pull/86">https://github.com/pa284/IT202-009/pull/86</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Create a checking Account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the Create Account Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/209008927-15ccc49f-285d-44c2-98b0-08ae04241813.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This screenshot shows the account type having the option for checking or savings.<br>This also shows the text saying (minimum $5). Once created, it goes to<br>the accounts table.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing validation errors and success message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/209009330-c403947c-1575-465e-836b-db5654c48e87.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows screenshot that it is successfully in the table. I input the<br>savings and $15 and it was successful. I spoke to Professor Toegel about<br>the error showing up and he said to work on it for the<br>next one. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the transaction generated from the initial deposit (from the DB)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/209010284-8bbb81d6-7227-4a15-ab0e-3013dfcc3e68.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This screenshot shows the different transactions I was playing with when creating an<br>account. If you look all the way at the bottom, the very last<br>one in the screenshot shows the one that I created. It was a<br>deposit of $15. It shows the negative and then the positive.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain which account number generation you used and the account creation process including the transaction logic</td></tr>
<tr><td> <em>Response:</em> <p>The world account number has to be 11 0&#39;s and then a number<br>after that in order. So for my logic on how I did my<br>code was by making two different statements in my code. I did a<br>query which inserted different values into my Accounts table and then I did<br>another query which updated the Accounts table to set the account_number which was<br>being created into the transactions table. This in turn showed the either successful<br>creation of the account or the not created successfully.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/pa284/IT202-009/pull/86">https://github.com/pa284/IT202-009/pull/86</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://pa284-prod.herokuapp.com/Project/accountCreating.php">https://pa284-prod.herokuapp.com/Project/accountCreating.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to list their accounts </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the user's account list view (show 5 accounts)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/209012687-cd14b769-13f1-4546-81ca-133a631f527e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This screenshot shows the account numbers (that the link can be clicked on<br>to go to the transaction history page) and shows the first following accounts<br>(some where I had errors in the beginning and then where there are<br>a min of $5).<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the page is displayed and the data lookup occurs</td></tr>
<tr><td> <em>Response:</em> <p>From the database, the account_number, balance, creation and account_type is called and then<br>put on a row through an echo and print statement to display each<br>account number with their affiliated balance and account type (checking or savings).&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/pa284/IT202-009/pull/86">https://github.com/pa284/IT202-009/pull/86</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://pa284-prod.herokuapp.com/Project/accountsOwn.php">https://pa284-prod.herokuapp.com/Project/accountsOwn.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Account Transaction Details </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/f2c037/000000?text=Partial"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of an account's transaction history</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the lookup and display occurs</td></tr>
<tr><td> <em>Response:</em> <p>(missing)</p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/pa284/IT202-009/pull/86">https://github.com/pa284/IT202-009/pull/86</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://pa284-prod.herokuapp.com/Project/accountsTransaction.php">https://pa284-prod.herokuapp.com/Project/accountsTransaction.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Deposit/Withdraw </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/f2c037/000000?text=Partial"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a Screenshot of the Deposit Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/209015726-7c047af7-dd4c-4365-8d69-496a25a9f33a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing the deposit of $5.00 to the checking with the account number of<br>000000000002<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a Screenshot of the Withdraw Page (this potentially can be the same page with different views)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/209015262-45c01ecb-8d0a-47d5-a332-bc69b8781f2e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Inputting the amount of 20 to deduct from the 25 in the checking<br>account of 000000000001<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show validation error for negative numbers</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Show validation error for withdrawing more than the account contains</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Show a success message for deposit and withdraw (2 screenshots)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/209015949-aa279d9e-c467-4b3c-ae97-c87542d10930.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>deposit success page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/209015590-349e1b67-9828-4542-b168-502a2ff25c16.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>withdraw success page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Show a screenshot of the transaction pairs in the DB for the above tests</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/209018942-c48ba5d7-616c-4d7a-af08-2e915eef4d25.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this shows the amount of times I was playing with it but from<br>23-32, I was adding $5 to the 000000000001 account and the total became<br>25. Then for 33 &amp; 34, I withdrew 20 and it went back<br>to 5. the very last one was when I was using 000000000002 and<br>added $5. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain how transactions work</td></tr>
<tr><td> <em>Response:</em> <p>The transactions work in a way where I had to include the previous<br>information which I received to complete the coding for the deposit and the<br>withdrawal. I also included a switch statement which was supposed to output the<br>flash message if it does not meet the requirements for inputting a number.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/pa284/IT202-009/pull/89">https://github.com/pa284/IT202-009/pull/89</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://pa284-prod.herokuapp.com/Project/accountsDepositWithdraw.php">https://pa284-prod.herokuapp.com/Project/accountsDepositWithdraw.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) </td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/209020824-19420948-4acf-4fdc-a48c-b843c5373583.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the transaction history is still not completed. and it is taking me a<br>while to make it work with the links that are in the my<br>accounts tab.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a link to your herok prod project's login page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://pa284-prod.herokuapp.com/Project/login.php">https://pa284-prod.herokuapp.com/Project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-2-bank-project/grade/pa284" target="_blank">Grading</a></td></tr></table>