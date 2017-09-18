<?php
$action=$_REQUEST['action'];

    $message=$_REQUEST['one'];

	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="news";
		mail("ramses23@gmail.com", $subject, $message, $from);
    
    $message=$_REQUEST['two'];

	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="facebook order";
		mail("ramses23@gmail.com", $subject, $message, $from);
    
    $message=$_REQUEST['three'];

	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="object";
		mail("ramses23@gmail.com", $subject, $message, $from);
    
    $message=$_REQUEST['four'];

	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="contact";
		mail("ramses23@gmail.com", $subject, $message, $from);

    header('Location: /index.html');
?>