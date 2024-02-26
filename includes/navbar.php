<div class="navbar">
    <div class="transition absolute hover:brightness-90">
        <h1 class="text-lg"><i class="text-xl fa-solid fa-mug-hot"></i> Bean & Brew</h1>
    </div>
    <span></span>
    <div>
        <a class="navButton" href="/Bean-And-Brew/menu.php">Menu</a>
        <a class="navButton" href="/Bean-And-Brew/sessions.php">Baking Lessons</a>
        <?php if (!isset($_SESSION['user'])) { ?>
        <a class="navButton navSecondary" href="/Bean-And-Brew/makeanorder.php">Start Order <i class="ml-2 text-sm fa-solid fa-circle-plus"></i></a>
        <a class="navButton navPrimary" href="/Bean-And-Brew/account.php">My Account  <i class="text-sm ml-2 fa-regular fa-user"></i></a>
        <?php } else { ?>
        <a class="navButton navSecondary" href="/Bean-And-Brew/store-locator.php">Find a Cafe <i class="text-sm fa-solid fa-location-dot"></i></a>
        <a class="navButton navPrimary" href="/Bean-And-Brew/contact.php">Member Login</a>
        <?php } ?>
    </div>
</div>