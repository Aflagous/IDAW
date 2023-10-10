<?php
function renderMenuToHTML($currentPageId) {
    $mymenu = array(
        'index' => array('Accueil'),
        'cv' => array('Cv'),
        'projets' => array('Mes Projets'),
        
    );

    echo '<ul>';
    foreach($mymenu as $pageId => $pageParameters) {
        $isActive = ($pageId === $currentPageId) ? 'class="active"' : 'class="notactive"';
        echo '<li ' . $isActive . '><a href="' . $pageId . '.php">' . $pageParameters[0] . '</a></li>';
    }
    echo '</ul>';
}
?>