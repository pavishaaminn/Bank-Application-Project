<table><tr><td> <em>Assignment: </em> HW HTML5 Canvas Game</td></tr>
<tr><td> <em>Student: </em> Pavisha Amin (pa284)</td></tr>
<tr><td> <em>Generated: </em> 11/12/2022 12:58:10 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/hw-html5-canvas-game/grade/pa284" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Create a branch for this assignment called&nbsp;<em>M6-HTML5-Canvas</em></li><li>Pick a base HTML5 game from&nbsp;<a href="https://bencentra.com/2017-07-11-basic-html5-canvas-games.html">https://bencentra.com/2017-07-11-basic-html5-canvas-games.html</a></li><li>Create a folder inside public_html called&nbsp;<em>M6</em></li><li>Create an html5.html file in your M6 folder (do not put it in Project even if you're doing arcade)</li><li>Copy one of the base games (from the above link)</li><li>Add/Commit the baseline of the game you'll mod for this assignment&nbsp;<em>(Do this before you start any mods/changes)</em></li><li>Make two significant changes<ol><li>Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once.</li><li>Direct copies of my class example changes will not be accepted (i.e., just having an AI player for pong, rotating canvas, or multi-ball unless you make a significant tweak to it)</li><li>Significant changes are things that change with game logic or modify how the game works. Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once). You may however change such values through game logic during runtime. (i.e., when points are scored, boundaries are hit, some action occurs, etc)</li></ol></li><li>Evidence/Screenshots<ol><li>As best as you can, gather evidence for your first significant change and fill in the deliverable items below.</li><li>As best as you can, gather evidence for your significant change and fill in the deliverable items below.</li><li>Remember to include your ucid/date as comments in any screenshots that have code</li><li>Ensure your screenshots load and are visible from the md file in step 9</li></ol></li><li>In the M6 folder create a new file called m6_submission.md</li><li>Save your below responses, generate the markdown, and paste the output to this file</li><li>Add/commit/push all related files as necessary</li><li>Merge your pull request once you're satisfied with the .md file and the canvas game mods</li><li>Create a new pull request from dev to prod and merge it</li><li>Locally checkout dev and pull the merged changes from step 12</li></ol><p>Each missed or failed to follow instruction is eligible for -0.25 from the final grade</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Game Info </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What game did you pick to edit/modify?</td></tr>
<tr><td> <em>Response:</em> <p>I chose the arcade shooter for my game to edit/modify.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the direct link to the html5.html file from Heroku Prod (i.e., https://mt85-prod.herokuapp.com/M6/html5.html)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://pa284-prod.herokuapp.com/M6/html5.html">https://pa284-prod.herokuapp.com/M6/html5.html</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the pull request link for this assignment from M6-HTML5-Canvas to dev</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/pa284/IT202-009/pull/40">https://github.com/pa284/IT202-009/pull/40</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Significant Change #1 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>I added the amount of lives on the game to 3. Each time<br>they get hit, it goes down one.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201374887-08353f68-9dc5-4311-b9d5-251fcd379973.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows the amount of lives left from starting at 3 lives after<br>being hit. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201378990-4cb4a3f7-d543-4456-87ab-521b53d36696.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows me adding lives as a var and having it equal 3.<br><br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201379740-0f8b363d-c283-44ff-82bd-d4fee8346a7d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>From lines 175-180, I made changes to if the amount of lives =<br>0 then it is game over and the game over page will show.<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Significant Change #2 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>I changed the speed of the enemy attackers to increase as you shoot<br>at them.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201377049-5abca713-d097-412d-bda4-6348ad86fc9d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>I got this screenshot just as it increased and then as soon as<br>it hit the bigger square, the lives went from 2 to 1.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85532635/201380105-50abc6c9-a676-4ce7-b4d8-c31305d6912b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This screenshot shows that I changed around the numbers that were originally there<br>so it would speed up quicker than gradually.<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Discuss </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Talk about what you learned during this assignment and the related HTML5 Canvas readings (at least a few sentences for full credit)</td></tr>
<tr><td> <em>Response:</em> <p>I learned many things in this homework assignment. I did not really like<br>it that much but making changes helped a lot with realizing how to<br>edit certain things and making it easier.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/hw-html5-canvas-game/grade/pa284" target="_blank">Grading</a></td></tr></table>