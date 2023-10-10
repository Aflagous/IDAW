<?php
    require_once("layers/template_header.php");
    require_once("layers/template_menu.php");
    $currentPageId = 'accueil';
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
} ?>
<header class="bandeau_haut">
<h1 class="titre">Hector Durand</h1>
</header>
<?php
renderMenuToHTML($currentPageId);
?>
<section class="corps">
<div class="vie">
            <h2> Ma vie:</h2>
            <p>Je suis un étudiant en école d'ingénieure à l'IMT Nord Euorpe</p>
</div>
<?php
   $pageToInclude = $currentPageId . ".php";
if(is_readable($pageToInclude))
   require_once($pageToInclude);
else
   require_once("error.php");
?>
</section>

<?php
require_once("layers/template_footer.php");
?>