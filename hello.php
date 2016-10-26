<?php
if(isset($_POST['submit'])) {
  $msg = 'Name: ' .$_POST['name'] ."\n"
          'Email: ' .$_POST['email'] ."\n"
          'Comment: ' .$_POST['comment'];
  mail('rottenbergmaya@gmail.com', 'sample Conect Us Forn', $msg);
  header('location: contact-us-thank-you.php');
} else{
  header('locattion: contact-us.php');
  exit(0);
}

?>