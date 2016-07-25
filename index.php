<?php
/**
 * Created by PhpStorm.
 * User: Kurt
 * Date: 7/21/2016
 * Time: 8:25 PM
 */


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SaferSpace</title>
    <link rel="icon" type="img/ico" href="img/favicon.ico">
    <link rel="stylesheet" href="main.css" type="text/css">
</head>
<body class="light-primary-color">
<div id="header" class="text-primary-color default-primary-color">
    <div class="dark-primary-color text-container">
        <h1>SaferSpace</h1>
    </div>
    <div class="default-primary-color text-container">
        <p>A safer space for everyone</p>
    </div>
</div>
<div id="header header-placeholder">
    <div class="text-container">
        <h1>SaferSpace</h1>
    </div>
    <div class="text-container">
        <p>A safer space for everyone</p>
    </div>
</div>
<div class="left_panel">
    <p>honestly idk whats gonna go here lmao but here it is</p>
</div>
<div class="content_container">
<?php
    $db_connection = pg_connect("host=ec2-54-235-95-188.compute-1.amazonaws.com
                                 dbname=db42l0eqboq9mr user=fdxsmyjjcjixke
                                 password=IVQKkvXvnfYXgKOCrp4fJW6tL3
                                 port=5432");
    $query = "SELECT * FROM messages";
    $result = pg_exec($db_connection, $query);
    while($message = pg_fetch_array($result)){
        echo "<div class=\"card\" title='" . $message['post_time'] . "'>" . $message['content'] . "</div>";
    }
    pg_freeresult($result);
    pg_close($db_connection);
?>
    <form action="post_message.php" class="card">
        <input autofocus type="text" name="message" class="divider-color">
        <input type="submit" value="Send">
    </form>
</div>
</body>
</html>