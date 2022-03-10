<?php
ob_start();
$title = "О фирме";
?>

    <h1>NFT</h1>
<ul class="border">
<li>Border N1</li>
<li>Border N1</li>
</ul>


<?php
$content = ob_get_clean();
include "view/templates/layout.php";
?>