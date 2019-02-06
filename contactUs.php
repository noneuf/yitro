<?php
use PHPMailer\PHPMailer\PHPMailer;
require './vendor/phpmailer/src/PHPMailer.php';
require './vendor/phpmailer/src/Exception.php';
require './vendor/phpmailer/src/SMTP.php';


// $fullName = $_REQUEST['fullName'];
// $phoneNumber = $_REQUEST['phoneNumber'];
// $companyName = $_REQUEST['companyName'];
// $details = $_REQUEST['text'];
// $email = $_REQUEST['mail'];

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = trim(filter_input(INPUT_POST,"fullName",FILTER_SANITIZE_STRING));
    $companyName = trim(filter_input(INPUT_POST,"companyName",FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST,"mail",FILTER_SANITIZE_EMAIL));
    $details = trim(filter_input(INPUT_POST,"text",FILTER_SANITIZE_SPECIAL_CHARS));
    $phoneNumber = trim(filter_input(INPUT_POST,"phoneNumber",FILTER_SANITIZE_NUMBER_INT));

    if($fullName == "" || $email == "" || $details == "" || $phoneNumber == "") {
        echo "Please fill in the required fields: Name, Email, Phone number and Details";
        exit;
    }
    if ($_POST["adress"] != "") {
        echo "Bad input form.";
        exit;
    }
    // checks if the email adress is NOT valid
    if (!PHPMailer::validateAddress($email)) {
        echo "Invalid email adress";
        exit;
    };

    $emailBody = "";
    $emailBody .= "Name: " . $fullName . "\n";
    $emailBody .= "Company name: " . $companyName . "\n";
    $emailBody .= "Phone number: " . $phoneNumber . "\n";
    $emailBody .= "email: " . $email . "\n";
    $emailBody .= "Details: " . $details . "\n";

    // Send email with third party library
    //The Instance of PHPMailer class.
    $mail = new PHPMailer;

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 2;
    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6
    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;
    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';
    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;
    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "goelnathan@gmail.com";
    //Password to use for SMTP authentication
    $mail->Password = "orkmenqvjfvizavc";


    //It's important not to use the submitter's address as the from address as it's forgery,
    //which will cause your messages to fail SPF checks.
    //Use an address in your own domain as the from address, put the submitter's address in a reply-to
    $mail->setFrom('goelnathan@gmail.com', $fullName);
    $mail->addReplyTo($email, $fullName);
    $mail->addAddress('goelnathan@gmail.com', 'Nathan Goel');
    $mail->Subject = 'Message from : ' . $fullName;
    $mail->Body = $emailBody;
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
        exit;
    }

    //this redirects to the page thanks.php, we do that because if not an dthis page will
    //be reloaded the email will be resent.
header("location:./contactUs.php?status=thanks");
}

$pageTitle = "Contact us";
include './include/header.php';


?>
            <main>
                <div class="contactUsStyle flex flexDir spaceBetween mobileColumn">
                    <i class="fas fa-mail-bulk mailIconStyle"></i>
                    <div class="flex column formSection">
                        <h3>צור איתנו קשר </h3>
                        <?php if(isset($_GET["status"]) && $_GET["status"] == "thanks") {
                                    echo "<p>אנו מודאים לך על פנייתך, ניצור איתך קשר בהקדם.</p>" . "<br>" . "<a href='./index.php' class='firstButtonAlt' type='button' name='back'>חזרה לעמוד ראשי</a>";
                        } else {?>
                        <form action="./contactUs.php" class="" method="post">
                            <div class="flex column">
                                <label class="" for="name">שם מלה:</label>
                                <input class="inputStyle inputStyleMobile" type="text" name="fullName" id="name" placeholder="הקלידו שם מלה" required/>
                            </div>
                            <div class="flex column">
                                <label for="phone">מספר טלפון:</label>
                                <input class="inputStyle inputStyleMobile" type="text" name="phoneNumber" id="phoneNum" placeholder="הקלידו את המספר" required/>
                            </div>
                            <div class="flex column">
                                <label for="company_name">שם הארגון:</label>
                                <input class="inputStyle inputStyleMobile" type="text" name="companyName" id="compName" placeholder="הקלידו את שם הארגון "/>
                            </div>
                            <div class="flex column">
                                <label for="email">כתובת מייל:</label>
                                <input class="inputStyle inputStyleMobile" type="email" name="mail" id="mail" placeholder="הקלידו מייל" required/>
                            </div>
                            <!-- For figthing spams (spam are sent by robots who fill all the fields
                            by default so we add a hidden field that the user wont see and by mater of consequences
                            leave empty which is good, back on line 11 we ask if this field is empty
                            if not we stop the script to keep runing) -->
                            <div style="display:none">
                                <label for="adress">Adress</label>
                                <input type="text" name="adress" id="adress">
                                <p>PLease leave this field blank.</p>
                            </div>
                            <div class="flex column">
                                <label for="message">תרשמו בכמה מילים על מה שאתם מחפשים:</label>
                                <textarea class="textAreaStyle inputStyleMobile" id="freeText" name="text" placeholder="כתבו לנו"></textarea>
                            </div>
                            <button class="firstButton" type="submit" name="submit">שלח</button>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </main>
        </div>
        <?php
        include './include/menu.php';
        ?>
    </div>
    <?php
    // include './include/footer.php';
    ?>
</body>
</html>

<?php

?>
