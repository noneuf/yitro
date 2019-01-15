<?php
$pageTitle = "Home";
include './config/db.php';
include './include/header.php';
?>
            <main>
                <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-circle-up"></i></button>
                <div class="flex column">
                    <div class="background1 sectionStyle flex justifyContent align">
                        <a href="./vision.php" class="linkStyle"><div class="content flex justifyContent align textAlign">?מה אנחנו מציעים ביתרו</div></a>
                    </div>
                    <div class="background2 sectionStyle flex justifyContent align">
                        <a href="./growingCorp.php" class="linkStyle"><div class="content flex justifyContent align textAlign">ליווי ויעוץ אירגונים מתפתחים</div></a>
                    </div>
                    <div class="background3 sectionStyle flex justifyContent align">
                        <a href="./smallCorp.php" class="linkStyle"><div class="content flex justifyContent align textAlign">ליווי ויעוץ אירגונים קטנים</div></a>
                    </div>
                    <div class="background4 sectionStyle flex justifyContent align">
                        <a href="./bigCorp.php" class="linkStyle"><div class="content flex justifyContent align textAlign">ליווי ויעוץ אירגונים גדולים </div></a>
                    </div> 
                </div>
            </main>
        </div>
        <?php
        include './include/menu.php'
        ?>
    </div>
    <?php 
    // include './include/footer.php';
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>

<?php

?>