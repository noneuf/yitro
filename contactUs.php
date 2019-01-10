<?php

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Heebo:700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
    <div class="flex">
        <div class="flex column mainWidth">
            <header class="headerStyle flex column justifyContent">
                <h1 class="headerContent titleStyle">YITRO</h1>
                <h2 class="headerContent subtitleStyle">
                אנחנו נביא את הארגון למקום אפקטיבי ויעיל יותר
                </h2>
            </header>
            <main>
                <div class='unit' id='contact_us'>
                    <h3>צור איתנו קשר </h3>
                    <form action="/action_page.php" class="flex column">
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
                    </form>
                </div>
            </main>
        </div>
        <div class="menuStyle">
            <div class="flex column menuStyle position">
                <h2 class="titleInMenuStyle">YITRO</h2>
                <ul class="menu flex column align">
                    <li><a href="index.php">עמוד ראשי</a></li>
                    <li><a href="">עלינו</a></li>
                    <li><a href="">השירותים שלנו</a></li>
                    <li><a href="contactUs.php">צור קשר</a></li>
                </ul>
                <div class="flex justifyContent" id="specificId">
                    <i class="fab fa-facebook-f socialIconsStyle"></i>
                    <i class="fab fa-twitter socialIconsStyle"></i>
                    <i class="fab fa-pinterest-p socialIconsStyle"></i>
                    <i class="fab fa-instagram socialIconsStyle"></i>
                </div>
            </div>        
        </div>
    </div>
    <footer>
        <small>&copy Nathan Goel and Shlomi Hudedi - 2019</small>
    </footer>
</body>
</html>

<?php

?>