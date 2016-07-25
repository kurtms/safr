<?php
/**
 * Created by PhpStorm.
 * User: Kurt
 * Date: 7/21/2016
 * Time: 11:33 PM
 */

$content = $_GET['message'];
if(!$content)
    die("<h1 style='text-align: center'>Error 403 Permission Denied</h1>");

$db_connection = pg_connect("host=ec2-54-235-95-188.compute-1.amazonaws.com
                                 dbname=db42l0eqboq9mr user=fdxsmyjjcjixke
                                 password=IVQKkvXvnfYXgKOCrp4fJW6tL3
                                 port=5432");
$query = "INSERT INTO messages(content, post_time) VALUES ('" . $content . "', current_timestamp)"; // sql injection bug
pg_exec($db_connection, $query);
pg_freeresult($result);
pg_close($db_connection);

header("Location:./");