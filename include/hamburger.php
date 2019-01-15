<?php
?>
<div class="container" onclick="triggerMenu(this)">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
</div>

<div class="hamburgerMenu">
    <ul class="menu flex column align">
        <li><a style="color: black" href="../index.php">עמוד ראשי</a></li>
        <li><a style="color: black" href="../aboutUs.php">עלינו</a></li>
        <li><a style="color: black" href="contactUs.php">צור קשר</a></li>
    </ul>
    <div class="flex justifyContent specificIdHamburger">
        <i class="fab fa-facebook-f socialIconsStyle"></i>
        <i class="fab fa-twitter socialIconsStyle"></i>
        <i class="fab fa-pinterest-p socialIconsStyle"></i>
        <i class="fab fa-instagram socialIconsStyle"></i>
    </div>
</div>

<script>
function triggerMenu(x) {
  x.classList.toggle("change");
}
</script>
<?php
?>