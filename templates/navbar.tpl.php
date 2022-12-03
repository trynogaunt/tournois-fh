<div id="main-nav" class="main-nav">
    <menu>
        <li>Accueil</li>
        <li>Tournois</li>
        <li>Se connecter</li>
    </menu>
</div>

<a href="#" id="openBtn" class="main-nav--open">
  <span class="burger-icon">
    <span></span>
    <span></span>
    <span></span>
  </span>
</a>

<script>
    var openBtn = document.getElementById("openBtn");
    openBtn.onclick = openNav;
    function openNav() {
        var navmenu = document.getElementById("main-nav");
        navmenu.classList.add("active");
    }
</script>