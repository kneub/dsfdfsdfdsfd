<?php

require_once "../layouts/header.php";
require_once "../layouts/menu.php";

if (isset($list) && false !== $list) {
    ?>
<table border="1">
    <?php
    foreach ($list as $danseuse) {
        ?> 
    <tr>
        <td><?php echo $danseuse->getNom(); ?></td>
        <td><?php echo $danseuse->getPrenom(); ?></td>
        <td><?php echo $danseuse->getDateN(); ?></td>
    </tr>
    <?php
    }
    ?>
</table>
<?php
}

require_once "../layouts/footer.php";
?>