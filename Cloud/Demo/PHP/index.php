<!-- File: voting-machine1.php.
    Record votes in file votes.txt
-->

<html>

<head>
<title>Voting Machine1 Example</title>
<link rel="stylesheet" type="text/css" href="../styles.css" />
</head>

<body>

<h2>Voting Machine1 Example</h2>

<form action="record-vote1.php" method="post">

<p>
Enter ID:<br />
<input type="text" name="txtID" size="15" value="" />
</p>

<p><input type="submit" value="Submit Vote" /></p>

<p>Vote for one candidate:</p>

<table cellpadding="5">
<tr>

<td><image src="donald.jpg" height="100" width="60" /></td>
<td><input type="radio" name="radVote" value="donald" /> </td>
<td>Donald Duck</td>
</tr>

<tr>
<td><image src="mickey.jpg" height="100" width="60" /></td>
<td><input type="radio" name="radVote" value="micky" /> </td>
<td>Mickey Mouse</td>
</tr>

<tr>
<td><image src="tweety.jpg" height="100" width="60" /></td>
<td><input type="radio" name="radVote" value="tweety" /> </td>
<td>Tweety Bird</td>
</tr>

</table>

<input type="hidden" name="hidden" value="hidden" />

</form>

</body>
</html>
