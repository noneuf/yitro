<?php
include './include/header.php';
?>
            <main>
                <div class="contactUsStyle flex flexDir spaceBetween mobileColumn">
                    <i class="fas fa-mail-bulk mailIconStyle"></i>
                    <div class="flex column formSection">
                        <h3>צור איתנו קשר </h3>
                        <form action="./registration.php" class="">
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
                                <input class="inputStyle inputStyleMobile" type="text" name="companyName" id="compName" placeholder="הקלידו את שם הארגון " required/>
                            </div>
                            <div class="flex column">
                                <label for="email">כתובת מייל:</label>
                                <input class="inputStyle inputStyleMobile" type="email" name="mail" id="mail" placeholder="הקלידו מייל" required/>
                            </div>
                            <div class="flex column">
                                <label for="message">תרשמו בכמה מילים על מה שאתם מחפשים:</label>
                                <textarea class="textAreaStyle inputStyleMobile" id="freeText" name="text" placeholder="כתבו לנו"></textarea>
                            </div>
                            <button class="firstButton" type="submit" name="submit">שלח</button>
                        </form>
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
