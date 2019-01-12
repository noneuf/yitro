<?php
include './config/db.php';
include './include/header.php';

$fullName = $_REQUEST['fullName'];
$phoneNumber = $_REQUEST['phoneNumber'];
$companyName = $_REQUEST['companyName'];
$text = $_REQUEST['text'];
$mail = $_REQUEST['mail'];

//$sql = "INSERT INTO `yitro`(`name`, `phone`, `companyName`, `text`) VALUES ($fullName, $phoneNumber, $companyName, $text)";

$data = [
    'fullName' => $fullName,
    'phoneNumber' => $phoneNumber,
    'companyName' => $companyName,
    'text' => $text
];

$sql = "INSERT INTO `users`(`name`, `phone`, `companyname`, `comments`) VALUES (:fullName, :phoneNumber, :companyName, :text)";
$stmt = $pdo->prepare($sql);
$stmt->execute($data);
if (isset($fullName) && isset($phoneNumber) && isset($companyName)) {
    if ($fullName != "" && $phoneNumber != "" && $companyName != "" && filter_var(filter_var($mail,FILTER_SANITIZE_EMAIL),FILTER_VALIDATE_EMAIL)) {
        echo ".הפרטים שלך התקבלו במערכת, אנחנו ניצור איתך קשר בקרוב";
        include './include/menu.php';
        $to="goelnathan@gmail.com";
        $subject= $fullName."שלח לך מייל ל! ";
        $text=$fullName."\r\n"."טלפון מספר:".$phoneNumber."\r\n"."אימייל:".$mail."\r\n";
        $headers="From: ".$mail."\r";
        mail($to,$subject,$text,$headers);
    } else {
        echo "לא נשלח";
    }
};

include './include/footer.php';
?>

