<?php
if(isset($_POST['enviar'])){
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
if (($name == "") || ($email == "") || ($message == "")) {

    echo '<script type="text/javascript">alert("All fields are required Fill in the form again");
    window.location.assign("http://esmarketingdigital.com#contacts");
    </script>';





} else {
    $from = "From: $name<$email>\r\nReturn-path: $email";
    $subject = 'Message sent by the contact form';
    mail('info@esmarketingdigital.es', $subject, $message, $from);

    echo '<script type="text/javascript">alert("Mail enviado correctamente");
    window.location.assign("http://esmarketingdigital.com#contacts");
    </script>';

}

}

?>


