<?php
require_once 'header.php';
use Sa\Lister\usrLister as ul;

require '../src/Controller/Lister/UserList.php';
require '../src/Model/DbHandler.php';

$usr = new ul\UserList();
$usr->setData();
?>

<h2>Users</h2>
<div>
    <?php $usr->showList(); ?>
</div>
<a href="/" style="margin-left: 70px; color: lightskyblue;">Go back</a>

