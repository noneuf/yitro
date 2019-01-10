<?php
include './config/db.php';

$fullName = $_REQUEST['fullName'];
$phoneNumber = $_REQUEST['phoneNumber'];
$companyName = $_REQUEST['companyName'];
$text = $_REQUEST['text'];

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
echo "הפרטים שלך התקבלו במערכת, אנחנו ניצור איתך קשר בקרוב.";

