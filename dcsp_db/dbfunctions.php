<?php
// Use these functions to insert properties into the database dcsp_project_db

function db_add_user($connection, $un, $st, $dn, $pw){
    $insert_into_users  = "INSERT INTO users (username, status, display_name, password) ". "VALUES('$un', '$st', '$dn', '$pw')";
    $result = $connection->query($insert_into_users);
    if (!$result) die($connection->error);}

function db_add_post($connection, $un, $pt, $dt, $url){
    $insert_into_posts = "INSERT INTO posts (username, post_title, date, url)"."VALUES('$un','$pt','$dt','$url')";
    $result = $connection->query($insert_into_posts);
    if (!$result) die($connection->error);}

function db_add_comment($connection, $cid, $pt, $un, $ti, $cn){
    $insert_into_comments = "INSERT INTO comments (post_title, username, time, contents)"."VALUES('$pt','$un','$ti', '$cn')";
    $result = $connection->query($insert_into_comments);
    if (!$result) die($connection->error);}
    
function db_add_message($connection, $un, $au, $ti, $msg){
    $insert_into_messages = "INSERT INTO messages (username, author, time, message)"."VALUES('$un','$au','$ti','$msg')";
    $result = $connection->query($insert_into_messages);
    if (!$result) die($connection->error);}

// Use these functions to search for properties from the database dcsp_project_db


?>