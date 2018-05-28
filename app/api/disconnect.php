<?php
header( 'Location: /');
if(isset($_SESSION['username'])) {
  session_unset();
  session_destroy();
}
?>
