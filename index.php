<?php
include './config/db.php';
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
                <!-- shlomi's code here -->
                <div class='main_unit'>
                    <div class="flex column questionSectionStyle">
                        <div class="flex justifyContent align specificQuestionStyle">
                            <a class="decoration" href='#client1'><h2 class="questionStyle">האם אתה עסק המחפש לגדול?</h2></a>
                            <div class="navigationSquare flex justifyContent align">
                            <i class="fas fa-plane-departure iconFontSize"></i>
                            </div>
                        </div>
                        <div class="flex justifyContent align specificQuestionStyle">
                            <a class="decoration" href='#client2'><h2 class="questionStyle">מחפש מימון למוצרים חדשים?</h2></a>
                            <div class="navigationSquare flex justifyContent align">
                                <i class="fas fa-credit-card iconFontSize"></i>
                            </div>
                        </div>
                        <div class="flex justifyContent align specificQuestionStyle">
                            <a class="decoration" href='#client3'><h2 class="questionStyle">מעונינים להתפתח לאפיק חדש?</h2></a>
                            <div class="navigationSquare flex justifyContent align">
                                <i class="fas fa-archway iconFontSize"></i>
                            </div>
                        </div>
                    </div>

                    <div class='unit' id='offer'>
                        <h3>מה אנחנו מציעים ביתרו?</h3>
                        <p>
                            בשלב הראשון נלמד את הארגון, כיצד הוא מתנהל, מה הם גורמי הסביבה המשפעים ומה הם הגורמים הפנימים
                            המושפעים. <br>
                            ותחת אילו אילוצים הארגון צריך להתנהל. בסוף שלב זה אנו מציגים לארגון תמונת שיקוף של הארגון ושל המצב
                            הפיננסי. <br>
                            תמונת השיקוף מאפשרת לארגון לראות את ההשתקפות הארגונית שלו. לזהות את החוזקות, החולשות ונקודות לשיפור
                            וייעול. <br>
                            בשלב זה בדרך כלל נציג את המפה המומלצת עבור הארגון והמחלקות השונות הן מבחינה ארגונית והן מבחינה
                            פיננסית.<br>
                            לאחר מכן נפעל בליווי צמוד על מנת ליישם ולהטמיע את השינויים על פי מפת הדרכים שגיבשנו. <br>
                            כל זה על מנת להביא את הארגון ליעילות לאפקטיביות גדולה יותר משהיה. <br>
                        </p>
                    </div>

                    <div class='unit' id='client1'>
                        <h3>ליווי ויעוץ אירגונים מתפתחים:</h3>
                        <p>
                            ארגונים מתפתחים הם אירגונים שנמצאים בשלב שונה מארגונים שכבר מבוססים <br>
                            לכן הליווי והיעוץ מצריך משקפיים לא רק להווה האירגוני אלא משקפיים שרואות את חזון ועתיד הארגון.<br>
                            ליווי והיעוץ צריך להיות בעל יכולת לקחת בחשבון את כל הגורמים הללו ולהביאו לידי יישום נכון בזמן
                            הנכון.<br>
                        </p>
                    </div>

                    <div class='unit' id='client2'>
                        <h3>ליווי ויעוץ אירגונים קטנים:</h3>
                        <p>
                            ארגונים קטנים מצריכים ליווי ויעוץ שונה מארגונים גדולים. <br>
                            בדרך כלל ארגונים קטנים הם יותר גמישים, היכולת שלהם ליישם שינוים היא יותר מהירה אך ישנם אתגרים
                            רבים
                            אחרים. <br>
                            לכן ליווי ויעוץ ארגוני מצריכים חשיבה שלוקחת בחשבון את מכלול הנתונים ושמתאימה את התוכנית לארגון
                            הספציפי <br>
                        </p>
                    </div>

                    <div class='unit' id='client3'>
                        <h3>ליווי ויעוץ אירגונים גדולים :</h3>
                        <p>
                            ארגונים גדולים בדרך כלל מתאפיינים בקצב מסוים שבו ארגון מתנהל. <br>
                            ישנם המון גורמים המשפיעים על תהליכים שונים באירגון <br>
                            ולכן ליווי ויעוץ ארגוני לארגון גדולים מצריך חשיבה שונה וליווי מתמיד לתוכנית היעוצית שנבנתה
                            לארגון
                            תוך גימישות לנתונים בשטח.<br>
                        </p>
                    </div>
                </div>
                <div class='unit' id='contact_us'>
                    <h3>צור איתנו קשר </h3>
                    <form action="/action_page.php">
                        <label for="name">שם ומשפחה:</label>
                        <input type="text" id="name" name="name" placeholder="השם פרטי שלך">


                        <label for="name_bis">שם העסק:</label>
                        <input type="text" id="name_bis" name="name_bis" placeholder="שם העסק שלך">

                        <label for="phone">טלפון:</label>
                        <input type="number" id="phone" name="phone" placeholder="מספר הטלפון שלך">

                        <label for="email">מייל:</label>
                        <input type="email" id="email" name="email" placeholder="כתובת המייל שלך">

                        <br>
                        <label for="subject">כתבו לנו:</label>
                        <br>
                        <textarea id="subject" name="subject" placeholder="כתבו לנו קצת על עצמכם" ></textarea>
                        <br>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </main>
        </div>
        <div class="menuStyle">
            <div class="flex column menuStyle position">
                <h2 class="titleInMenuStyle">YITRO</h2>
                <ul class="menu flex column align">
                    <li><a href="index.php">עמוד ראשי</a></li>
                    <li><a href="aboutUs.php">עלינו</a></li>
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