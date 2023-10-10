<?php
function renderMenuToHTML($currentPageId, $currentLang) {
    $mymenu = array(
        'accueil' => array('Accueil', 'home'),
        'cv' => array('Cv', 'resume'),
        'projets' => array('Mes Projets', 'projects'),
        'contact' => array('Contactez moi :', 'contact'),
    );

    echo '<ul>';
    foreach($mymenu as $pageId => $pageParameters) {
        $isActive = ($pageId === $currentPageId) ? 'class="active"' : 'class="notactive"';
        echo '<li ' . $isActive . '><a href="' . '?page=' . $pageId . '&lang=' . $currentLang.'">' . $pageParameters[0] . '</a></li>';
    }
    echo '</ul>';
}
?>
