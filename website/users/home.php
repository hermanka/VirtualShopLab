<?php

require_once("../include/users.php");
require_once("../include/pictures.php");
require_once("../include/html_functions.php");
require_once("../include/functions.php");

session_start();

require_login();

$user = Users::current_user();

?>

<?php our_header("home"); ?>
<div class="column prepend-1 span-24 first last">
   <h2>Hello <?=h( $user['login'] )?>, you got <?=h($user['tradebux']) ?> Tradebuxs to spend!</h2>
<p>Cool stuff to do:</p>
<ul style="list-style-type:none;">
<li><a href="/pictures/purchased.php">Your Purchased Pics</a></li>
<li><a href="/users/similar.php">Who's got a similar name to you?</a></li>
</ul>
</div>

<?php our_footer(); ?>