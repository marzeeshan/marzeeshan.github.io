<?php

if (isset($_POST['submit'])) {
  $name = $POST['name'];
  $mailFrom = $POST['email'];
  $message = $POST['message'];
  $phone = $POST['phone'];

  $subject = "Website Form Submission";
  $mailTo = "marzeeshan@gmail.com";
  $headers = "From: ".$mailFrom;
  $body = "Name: $name.\n"."Email: $mailFrom.\n"."Phone: $phone.\n"."Message: $message.\n";
  
  mail($mailTo, $subject, $body, $heders);
  header("Location: index.php?mailsend");
}