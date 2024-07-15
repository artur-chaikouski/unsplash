<?php

// footer.php
global $twig;
ob_start();
wp_footer();
$footer_content = ob_get_clean();

$context = [
    'footer_content' => $footer_content,
];

echo $twig->render('footer.twig', $context);

?>