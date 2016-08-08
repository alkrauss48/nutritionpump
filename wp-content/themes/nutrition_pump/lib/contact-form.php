<?php
function send_contact_form_email() {
  $contactName    = $_POST['name'];
  $contactEmail   = $_POST['email'];
  $contactMessage = $_POST['message'];

  $to = "alkrauss48@gmail.com";
  $subject = "Submission from nutritionpump.com";
  $message = <<<MESSAGE
Name:     $contactName\n
Email:    $contactEmail\n
Message:\n\n
$contactMessage
MESSAGE;

  wp_mail($to, $subject, $message);
}
add_action( 'admin_post_nopriv_contact_form', 'send_contact_form_email' );
add_action( 'admin_post_contact_form', 'send_contact_form_email' );
