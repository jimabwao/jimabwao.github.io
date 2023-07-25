<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $phone = $_POST['phonee'];
    
    $mailTo = "jimabwao@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "A client by the name ".$name.", phone number:".$phone" has contacted EVAcare Home Health.\n\n".$message;
    
    mail($txt, $headers, $mailTo, $subject);
    header("Location: success.php?mailsend");
}
?>
