<?php
    require_once("layers/template_header.php");
    require_once("layers/template_menu.php");
    $currentPageId = 'contact';
 ?>
<header class="bandeau_haut">
<h1 class="titre">Gratens Durand</h1>
</header>
<?php
renderMenuToHTML($currentPageId);
?>
<section class="corps">
<div class="info">
            <div class="hobbies">
                <div class="hobbie">
                    <p>
                        email: 
                    </p>
                    <p>
                        baptiste.gratens@gmail.com
                    </p>
                </div>
                <div class="hobbie">
                    <p>
                        telephone: 
                    </p>
                    <p>
                        06 15 96 27 72
                    </p>
                </div>
            </div>
        </div>
</section>

<?php
require_once("layers/template_footer.php");
?>