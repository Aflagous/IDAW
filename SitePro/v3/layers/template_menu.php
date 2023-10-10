<?php
function renderMenuToHTML($currentPageId, $currentLang) {
    $mymenu = array(
        'accueil' => array('Accueil'),
        'cv' => array('Cv'),
        'projets' => array('Mes Projets'),
        'contact' => array('Contactez moi :'),
    );

    echo '<ul>';
    foreach($mymenu as $pageId => $pageParameters) {
        $isActive = ($pageId === $currentPageId) ? 'class="active"' : 'class="notactive"';
        echo '<li ' . $isActive . '><a href="' . $pageId . '.php?lang=' . $currentLang . '">' . $pageParameters[0] . '</a></li>';
    }
    echo '</ul>';
}
?>
