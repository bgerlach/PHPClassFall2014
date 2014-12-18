<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Mailing List Results</title>
<link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
<div id="content">
<h1>Account Information</h1>
<label>Email Address:</label>
    <span><?php echo htmlspecialchars($email); ?></span><br />
<label>Heard From:</label>
    <span><?php echo htmlspecialchars($heard_from); ?></span><br />
<label>Contact Via:</label>
    <span><?php echo htmlspecialchars($contact_via); ?></span><br />
<span>Comments:</span><br />
        <span><?php 
        if (isset($_POST['comments']))
        {
            $comments = $_POST['comments'];
        }
        echo htmlspecialchars($comments); ?></span><br />
<span></span><br />
</div>
</body>
</html>
