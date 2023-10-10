<?php
    require_once("layers/template_header.php");
    require_once("layers/template_menu.php");
    $currentPageId = 'index';
    $defaultLang = 'fr'; // Langue par défaut
    $currentLang = isset($_GET['lang']) ? $_GET['lang'] : $defaultLang;
    

// ...

$pageToInclude = $currentLang . '/' . $currentPageId . ".php";
 ?>
<header class="bandeau_haut">
<h1 class="titre">Gratens Durand</h1>
</header>
<?php
renderMenuToHTML($currentPageId);
?>
<section class="corps">

<a href="index.php?page=index&lang=en">Anglais</a>
<a href="index.php?page=index&lang=fr">Francais</a>

</section>

<?php
require_once("layers/template_footer.php");
?>