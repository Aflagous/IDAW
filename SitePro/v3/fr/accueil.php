<?php
    require_once("./layers/template_header.php");
    require_once("./layers/template_menu.php");
    $currentPageId = 'accueil';
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
} ?>

<section class="corps">
<div class="vie">
            <h2> Ma vie:</h2>
            <p>Je suis un étudiant en école d'ingénieure à l'IMT Nord Euorpe</p>
</div>

</section>

<?php
require_once("./layers/template_footer.php");
?>