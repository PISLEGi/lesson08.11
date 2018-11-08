<?php

require_once '../models/user.php';

$users = getAllUsers();

require_once '../views/home.php';
