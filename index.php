<?php
include './config/db.php';
include './include/header.php';
?>
            <main>
                <div class='main_unit'>
                    <div class="flex column questionSectionStyle backgroundUnit">
                        <div class="flex justifyContent align specificQuestionStyle">
                            <div class="navigationSquare flex justifyContent align iconStyle">
                            <i class="fas fa-plane-departure iconFontSize"></i>
                            </div>
                            <a class="decoration" href='#client1'><h2 class="questionStyle">?האם אתה עסק המחפש לגדול</h2></a>
                        </div>
                        <div class="flex justifyContent align specificQuestionStyle">
                            <div class="navigationSquare flex justifyContent align iconStyle">
                                <i class="fas fa-credit-card iconFontSize"></i>
                            </div>
                            <a class="decoration" href='#client2'><h2 class="questionStyle">?מחפש מימון למוצרים חדשים</h2></a>
                        </div>
                        <div class="flex justifyContent align specificQuestionStyle">
                            <div class="navigationSquare flex justifyContent align iconStyle">
                                <i class="fas fa-archway iconFontSize"></i>
                            </div>
                            <a class="decoration" href='#client3'><h2 class="questionStyle">?מעונינים להתפתח לאפיק חדש</h2></a>
                        </div>
                    </div>

                    <div class='unit backgroundUnit1' id='offer'>
                        <h3>מה אנחנו מציעים ביתרו?</h3>
                        <p>
                            בשלב הראשון נלמד את הארגון, כיצד הוא מתנהל, מה הם גורמי הסביבה המשפעים ומה הם הגורמים הפנימים
                            המושפעים. <br>
                            ותחת אילו אילוצים הארגון צריך להתנהל. בסוף שלב זה אנו מציגים לארגון תמונת שיקוף של הארגון ושל המצב
                            הפיננסי. <br>
                            תמונת השיקוף מאפשרת לארגון לראות את ההשתקפות הארגונית שלו. לזהות את החוזקות, החולשות ונקודות לשיפור
                            וייעול.
                        </p>
                    </div>

                    <div class='unit backgroundUnit2' id='client1'>
                        <h3>ליווי ויעוץ אירגונים מתפתחים:</h3>
                        <p>
                            ארגונים מתפתחים הם אירגונים שנמצאים בשלב שונה מארגונים שכבר מבוססים <br>
                            לכן הליווי והיעוץ מצריך משקפיים לא רק להווה האירגוני אלא משקפיים שרואות את חזון ועתיד הארגון.<br>
                            ליווי והיעוץ צריך להיות בעל יכולת לקחת בחשבון את כל הגורמים הללו ולהביאו לידי יישום נכון בזמן
                            הנכון.<br>
                        </p>
                    </div>

                    <div class='unitAlt2 backgroundUnit3' id='client2'>
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

                    <div class='unit backgroundUnit4' id='client3'>
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
            </main>
        </div>
        <?php
        include './include/menu.php'
        ?>
    </div>
    <?php 
    include './include/footer.php';
    ?>
</body>
</html>

<?php

?>