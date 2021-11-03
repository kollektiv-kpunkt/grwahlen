<nav id="main-nav">
    <div id="nav-container" class="lgcont">
        <div id="logo-container">
            <img src="<?= get_template_directory_uri() ?>/img/logo/logo.svg" alt="Logo der Sozialdemokratischen Partei">
            <div id="logo-text-container">
                <span class="logo-text">Am 13. Februar:</span>
                <span class="logo-text">SP wählen!</span>
            </div>
        </div>
        <div id="navmenu-container">
            <div class="menu-item<?php (is_front_page()) ? print(" current-item") : "" ?>">
                <a href="/#themen" class="menu-item-link">Themen</a>
            </div>
            <div class="menu-item">
                <a href="/#stadtrat" class="menu-item-link">Stadtrat</a>
            </div>
            <div class="menu-item">
                <a href="/#gemeinderat" class="menu-item-link">Gemeinderat</a>
            </div>
            <div class="menu-item">
                <a href="/unterstutzen" class="menu-item-link">Unterstützen</a>
            </div>
        </div>
        <div id="tofuburger-menu-container">
            <div id="mobnav-menubutton">
                <span>Menu</span>
                <div id="menu-tofuburger">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <div id="mob-navmenu-container">
        <div id="mob-navmenu" class="lgcont">
            <div class="menu-item<?php (is_front_page()) ? print(" current-item") : "" ?>">
                <a href="/#themen" class="menu-item-link">Themen</a>
            </div>
            <div class="menu-item">
                <a href="/#stadtrat" class="menu-item-link">Stadtrat</a>
            </div>
            <div class="menu-item">
                <a href="/#gemeinderat" class="menu-item-link">Gemeinderat</a>
            </div>
            <div class="menu-item">
                <a href="/unterstutzen" class="menu-item-link">Unterstützen</a>
            </div>
        </div>
    </div>
</nav>