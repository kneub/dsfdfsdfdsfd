<?php

require_once "../layouts/header.php";
require_once "../layouts/menu.php";

if (isset($danseuse) && false !== $danseuse) {
    ?>
<div style="background-color: aqua;">
    <span><?php echo $danseuse->getNom(); ?></span>
    <span><?php echo $danseuse->getPrenom(); ?></span>
    <span><?php echo $danseuse->getDateN(); ?></span>
</div>
<?php
}
require_once "../layouts/footer.php";
?>