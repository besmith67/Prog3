<?php
/* ---------------------------------------------------------------------------
 * filename    : logout.php
 * author      : Branden Smith, besmith2@svsu.edu
 * description : This program logs the user out by destroying the session
 * ---------------------------------------------------------------------------
 */
session_start();
session_destroy();  //resets custid (session id)
header("Location: login.php"); //redirect back to login
?>
