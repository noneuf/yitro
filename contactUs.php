<?php
include './include/header.php';
?>
            <main>
                <div class='unit' id='contact_us'>
                    <h3>צור איתנו קשר </h3>
                    <form action="./registration.php" class="flex column">
                        <div class="flex">
                            <input type="text" name="fullName" id="name" placeholder="...הקלידו שם מלה"/>
                            <label>שם מלה</label>
                        </div>
                        <div class="flex">
                            <input type="text" name="phoneNumber" id="phoneNum" placeholder="...הקלידו את המספר"/>
                            <label>מספר טלפון</label>
                        </div>
                        <div class="flex">
                            <input type="text" name="companyName" id="compName" placeholder="...הקלידו את שם הארגון"/>
                            <label>שם הארגון</label>
                        </div>
                        <div class="flex">
                            <textarea id="freeText" name="text" placeholder="...כתבו לנו"></textarea>
                            <label>...תרשמו בכמה מילים על מה שאתם מחפשים</label>
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