<html>

<!-- File: record-vote1.php.
     Record votes in file votes.txt
-->

<html>

<head>
<title>Voting Machine1 Example</title>
<link rel="stylesheet" type="text/css" href="../styles.css" />
</head>

<body>

<h2>Voting Machine1 Example</h2>

<?php

    if (isset($_POST["hidden"]))
    {
        $is_submitted = 1;
    }
    else
    {
        $is_submitted = 0;
    }

    if (isset($_POST["radVote"]))
    {
        $vote = $_POST["radVote"];
    }
    else
    {
        $vote = "";
    }

    if (isset($_POST["txtID"]))
    {
        $ssn = $_POST["txtID"];
    }
    else
    {
        $ssn = "999999999";
    }


      if ($is_submitted)
      {
          $fout = fopen("e:/ectserver/sjost/Database/votes.txt", "a");
          fwrite($fout, "$ssn voted for $vote.\r\n");
          fclose($fout);
      }
?>

<h2>Thank you for voting.</h2>

<p>You voted for <?php echo $vote ?>.</p>

</body>
</html>
