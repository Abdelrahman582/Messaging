<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>

<h1>View Message</h1>
<p>
    <?php
    require('db.php');
     $id = $_GET['message_id'];
    $loop = mysqli_query($con, "SELECT * FROM messages WHERE id = $id")
    or die (mysqli_error($con));

    while ($row = mysqli_fetch_array($loop)) {
        $message_from_username = getUsername($row['message_from']);
        echo "<li> Message From : ".$message_from_username."</a></li>";
        echo "<li> Message Content :  ".$row['message_content']."</a></li>";
    }
    ?>
</p>
<br />
<a href="index.php">Home</a>
</div>
</body>
</html>
