<footer>
    <div id="footer-upper">
        <img src="<?= get_template_directory_uri() ?>/partials/footer/img/footer.jpg" alt="Panorama der Stadt Zürich" id="footer-background" loading="lazy">
        <div id="footer-content-container">
            <div id="footer-content-title">
                <h2>Jetzt mithelfen!</h2>
            </div>
            <div id="footer-content">
                <p>Um bei den Wahlen ein gutes Resultat zu machen, sind wir auf deine Unterstützung angewiesen! Hänge jetzt eine Fahne auf, mobilisiere deine Bekannten oder spende für unsere Plakatkampagne:</p>
                <div id="supportbuttons">
                    <a href="/unterstutzen" class="button">Mitmachen</a>
                    <a href="/spenden" class="button">Spenden</a>
                </div>
            </div>
        </div>
    </div>
    <div id="bottom-bar" style="background-color: var(--red120)">
        <div id="bottom-bar-container" class="lgcont">
            <div id="credits" style="display: flex">
                <img src="<?= get_template_directory_uri() ?>/partials/footer/img/logo-footer.svg" alt="Logo der sozialdemokratischen Partei">
                <span style="margin: auto 0; margin-left: 0.5rem; color: var(--white)" class="text_small">SP Stadt Zürich, <?= date("Y") ?></span>
            </div>
            <div id="footer-secondary-menu">
                <a href="/impressum" class="sec-menu-link">Impressum</a>
                <a href="/datenschutz" class="sec-menu-link">Datenschutz</a>
                <a href="/kontakt" class="sec-menu-link">Medien</a>
                <a href="https://kpunkt.ch" target="_blank" rel="norefferer" class="sec-menu-link">Built with ♥ | Webdesign by <b>K.</b></a>
            </div>
        </div>
    </div>
</footer>