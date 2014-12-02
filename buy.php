<?php
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['address'];
$phone = $_POST['phone'];
$form =<<<EOF
    <form method="post" action="purchase.php?">
    Name: <input type="text" name="$name" /><br />
    Address: <input type="address" name="$address" /><br />
    <input type="submit" name="submit" value="Order" />
    Email: <input type="email" name="$email" /><br />
    <input type="radio" name="cash"/>Cash <input type="radio" name="credit" /><br/>
    Phone <input type="phone" name="$phone"
EOF;
echo json_encode($form);

$to = "217.cis@gmail.com";
$subject = "Thank for your message." . strftime("%T", time());
$message .= "Name: $name \n\r";
$message .= "Email: $e_mail \n\r";
$message .= "Phone: $p_hone \n\r";
$message .= "Question: $name \n\r";
$message .= wordwrap($question, 70);
$result = mail($to,$subject,$message,$headers);