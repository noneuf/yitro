<?php
$pageTitle = "About us";
include './include/header.php';
?>
            <main class="flex flexDir mobileColumn">
                <span class="mobileStyleForPicParent"><img class="rivkaPicStyle mobilePicStyle"src="./images/Optimized-rivka.jpg"/></span>
                <span class="flex column contentMargin">
                    <h3 class="aboutMe"> קצת עלי:</h3>
                    <div class="textStyle textStyleMobile flex column">
                        <p class="more moreMobile"> שמי רבקה גואל, את הדרך שלי בתחום הייעוץ התחלתי דווקא בצבא: התגייסתי לחיל הים לתפקיד
                            בקרית סימולטורים. התפקיד העיקרי שלי היה לאמן יחידות שונות בחייל תוך ליווי ומתן ביקורת בונה
                            ליחדות השונות, שם גיליתי את מתנת הייעוץ שלי. אחרי השחרור שלי מהמערכת הצבאית התקדמתי
                            לכוון למידת תואר ראשון בכלכלה וניהול.
                        </p>
                        <a class="showButton aStyle" onclick="showMore()">קרא עוד...</a>
                        <p class="more" style="display: none" id="showHide"> 
                            לאחר שנות לימודים מוצלחות, התחלתי לעסוק בייעוץ פננסי
                            ונתקלתי בקושי ואפילו בכישלון שארגונים כאלה ואחרים שוקעים בהם כאשר אינם מתנהלים נכון
                            מבחינה פיננסית. אך גם גיליתי שנושא הפננסים חשוב ושניהול נכון יכול להרים עסק.<br><br> אך ניהול אירגוני
                            תקין אף הוא בעל ערך חשוב מאוד בנוסף לכך זהיתי שאם מעורב שילוב של השנים, התוצאות יכולות
                            להיות מדהימות, מרשימות ומעל הציפיות. לאחר ההבנה הזאת החלתי ללמוד את התואר השני שלי
                            בייעוץ ופיתוח ארגוני.<br><br> מאז ועד היום אני מלווה ארגונים קטנים וגדולים: אם זה ארגונים מתפתחים או
                            ארגונים ישנים שכבר מצויים שנים בתחומם. אני מלווה ומייעצת לאותם גופים בשילוב תחום הפיננסים
                            והתחום האירגוני.
                        </p>
                        <a class="hideButton aStyle" onclick="showless()">קרא פחות...</a>
                    </div>
                </span>
            </main>
        </div>
        <?php
        include './include/menu.php'
        ?>
    </div>
    <?php
    // include './include/footer.php'
    ?>
</body>
</html>

<?php

?>
