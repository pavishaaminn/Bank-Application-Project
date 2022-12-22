<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Bank Project</td></tr>
<tr><td> <em>Student: </em> Pavisha Amin (pa284)</td></tr>
<tr><td> <em>Generated: </em> 12/21/2022 11:32:12 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-3-bank-project/grade/pa284" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone3 branch</li><li>Create a new markdown file called milestone3.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone3.md</li><li>Add/commit/push the changes to Milestone3</li><li>PR Milestone3 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 4</li><li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on GitHub and everywhere else. Images are only accepted from dev or prod, not localhost. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User will be able to transfer between their accounts </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/f2c037/000000?text=Partial"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of transfer page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/209052290-69f213bb-92bb-4e76-9155-bb98bf4b1099.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the internal transfer on this screenshot shows the part there.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing dropdown values</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/209052507-f9afb6e3-6a88-479f-84ce-cb537c302bcf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this screenshot shows the dropdown for the internal transfers<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing user can't transfer more funds than they have</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add screenshot showing user can't transfer to the same account</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot showing you can't transfer an negative balance</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot of the generated transaction history from the db</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/209052624-0800f13f-d5be-4b01-a430-af96cd537b55.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this screenshot shows the transaction from the db side where the bottom shows<br>when it is transferred and when it is not. look at 59 and<br>60, it&#39;s transferring from account ending in 0016 to 0014.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a screenshot of the Accounts table showing both affected accounts</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 8: </em> Briefly explain the code process/flow of a transfer including how the accounts are fetched for the dropdowns</td></tr>
<tr><td> <em>Response:</em> <p>The accounts are fetched from the dropdown by having the account_number associated with<br>many things such as :account_number, :balance, and :account_type. This determines how much money<br>is in that specific account and what type of account it is (checking<br>or saving). It is tracked on the transactions by being labeled as transaction_type,<br>so it will go to the transactions table.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 9: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/pa284/IT202-009/pull/93">https://github.com/pa284/IT202-009/pull/93</a> </td></tr>
<tr><td> <em>Sub-Task 10: </em> Add link to transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://pa284-prod.herokuapp.com/Project/accountsDepositWithdraw.php">https://pa284-prod.herokuapp.com/Project/accountsDepositWithdraw.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Transaction History Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/ff0000/000000?text=Incomplete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of transaction history page showing the new transfer transaction</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots demonstrating the filters and pagination</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how the filters/pagination work</td></tr>
<tr><td> <em>Response:</em> <p>(missing)</p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add pull request(s) url</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 5: </em> Add link to Transaction History page from heroku</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's profile First name and Last name </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the user's profile with the new fields</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/209055677-cc77a874-37bc-4294-af02-a4569dc5c42b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the fields should not be empty<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/209055863-4a0ec666-5910-44e4-91f8-78ca245d094d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this shows it is saved successfully<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/pa284/IT202-009/pull/96">https://github.com/pa284/IT202-009/pull/96</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add link to profile page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://pa284-prod.herokuapp.com/Project/profile.php">https://pa284-prod.herokuapp.com/Project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to transfer funds to another user </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/f2c037/000000?text=Partial"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the external transfer page with filled in data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/209054061-5389f72e-fa88-4a32-b2fd-95919991004a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows the external transfer heading and page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing user can't send more than they have</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/209054204-b03c8070-b351-4db4-b442-01bfa3af6bf8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of code: lines 29-38 show the code for retrieving the balance and<br>then specifically lines 34-38 show that if the amount is higher than what<br>is in the balance, it cannot compute.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/209054624-6e5e44c7-684f-402d-bd6e-926ac70f1ee6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of website: as you can see, the message is at the top<br>saying &quot;amount exceeds balance&quot;<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing they can't send a negative amount</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/209055075-3524f4e8-694a-4fb6-ace2-9f06f495fde4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This screenshot is from the website showing that it cannot be negative or<br>it will not be acceptable.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/209055203-ee4532ff-b758-4414-9664-5fea87dbd0e3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this screenshot is the code which shows that I did an if statement<br>where if the amount is less than 0 (a negative) than it will<br>show amount not acceptable<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add screenshot(s) showing message if a user doesn't exist and/or a destination account wasn't found</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot of the transactions table showing the recorded transfer</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot(s) showing the updated account balances</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the process of looking up the target user's account and the validation logic</td></tr>
<tr><td> <em>Response:</em> <p>(missing)</p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/pa284/IT202-009/pull/93">https://github.com/pa284/IT202-009/pull/93</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add link to external transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://pa284-prod.herokuapp.com/Project/accountsExternalTransfer.php">https://pa284-prod.herokuapp.com/Project/accountsExternalTransfer.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/209052019-df4c8da7-51bc-439e-9b0d-aed2058ebf69.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the completed parts<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/209052109-12a2b7b2-6ec3-46c6-8c3a-2ce452c89a52.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the uncompleted one<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-3-bank-project/grade/pa284" target="_blank">Grading</a></td></tr></table>