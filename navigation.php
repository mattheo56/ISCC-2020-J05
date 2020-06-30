<nav 
    class="menu">
            <ul class="listehorizontale">
                <li class="menu"><a <?php if ($page_title == "Accueil") { echo 'id="current"'; } ?>href="vitrine-accueil.php">Accueil</a></li>
                <li class="menu"><a <?php if ($page_title == "Programme") { echo 'id="current"'; } ?>href="vitrine-programme.php">Programme</a></li>
                <li class="menu"><a <?php if ($page_title == "Contacts") { echo 'id="current"'; } ?>href="vitrine-contacts.php">Contacts</a></li>
            </ul>
        </nav>