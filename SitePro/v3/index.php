<?php
    require_once("layers/template_header.php");
    require_once("layers/template_menu.php");
    $currentPageId = 'index';
    $defaultLang = 'fr';
    $currentLang = isset($_GET['lang']) ? $_GET['lang'] : $defaultLang;
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    }
    $pageToInclude =  '?page=' . $currentPageId;
 ?>

<header class="bandeau_haut">
<h1 class="titre">Gratens Durand</h1>
</header>
<?php
renderMenuToHTML($currentPageId, $currentLang);
?>
<section class="corps">
<?php
   $pageToInclude = $currentLang . "/" . $currentPageId . ".php";
if(is_readable($pageToInclude))
   require_once($pageToInclude);
?>
<a href="index.php?page=index&lang=en">Anglais</a>
<a href="index.php?page=index&lang=fr">Francais</a>

</section>

<?php
require_once("layers/template_footer.php");
?>