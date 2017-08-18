<?php
include_once "config/db-config.php";
include_once "config/Database.php";
include_once "model/User.php";

$user = User::getByUsername('michaels');
?>
<p><b>Username: </b><?php echo $user->getUsername();?></p>
<p><b>Email: </b><?php echo $user->getEmail();?></p>
