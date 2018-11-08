<?php

require_once '../db.php';

function getAllUsers() {
    global $mysqli;

    $query = "SELECT * FROM user";
    $result = $mysqli->query($query);

    $users = [];
    while ($user=$result->fetch_assoc()) {
        $users[] = $user;
    }

    return $users;
}
