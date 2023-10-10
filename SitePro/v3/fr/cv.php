<?php
    require_once("layers/template_header.php");
    require_once("layers/template_menu.php");
    $currentPageId = 'cv';
 ?>
<header class="bandeau_haut">
<h1 class="titre">Gratens Durand</h1>
</header>
<?php
renderMenuToHTML($currentPageId, 'fr');
?>
<section class="corps">
<div class="info">
            <div class="hobbies">
                <div class="hobbie">
                    <div class="boite"><div class="boiboite"></div><div class="boiboite"></div><div class="boiboite"></div><div class="boiboite"></div><div class="boiboite"></div></div>
                    <h2>
                        Grand
                    </h2>
                </div>
                <div class="hobbie">
                    <div class="boite"><div class="boiboite"></div><div class="boiboite"></div><div class="boiboite"></div><div class="boiboite"></div></div>
                    <h2>
                        Fort
                    </h2>
                </div>
                <div class="hobbie">
                    <div class="boite"><div class="boiboite"></div><div class="boiboite"></div><div class="boiboite"></div><div class="boiboite"></div><div class="boiboite"></div><div class="boiboite"></div></div>
                    <h2>
                        Intelligent
                    </h2>
                </div>
            </div>
        </div>
</section>

<?php
require_once("layers/template_footer.php");
?>