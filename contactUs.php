<?php
include './include/header.php';
?>
            <main>
                <div class='unitAlt backgroundUnit5' id='contact_us'>
                    <h3>צור איתנו קשר </h3>
                    <form action="./registration.php" class="flex column alignAlt">
                        <div class="flex inputMargin">
                            <input type="text" name="fullName" id="name" placeholder="...הקלידו שם מלה"/>
                            <label>:שם מלה</label>
                        </div>
                        <div class="flex inputMargin">
                            <input type="text" name="phoneNumber" id="phoneNum" placeholder="...הקלידו את המספר"/>
                            <label>:מספר טלפון</label>
                        </div>
                        <div class="flex inputMargin">
                            <input type="text" name="companyName" id="compName" placeholder="...הקלידו את שם הארגון"/>
                            <label>:שם הארגון</label>
                        </div>
                        <div class="flex inputMargin">
                            <input type="email" name="mail" id="mail" placeholder="...הקלידו מייל"/>
                            <label>:כתובת מייל</label>
                        </div>
                        <div class="flex column inputMargin alignAlt">
                            <label>:...תרשמו בכמה מילים על מה שאתם מחפשים</label>
                            <textarea id="freeText" name="text" placeholder="...כתבו לנו"></textarea>
                        </div>
                        <button type="submit" name="submit">שלח</button>
                    </form>
                </div>
            </main>
        </div>
        <?php
        include './include/menu.php';
        ?>
    </div>
    <?php
    include './include/footer.php';
    ?>
</body>
</html>

<?php

?>