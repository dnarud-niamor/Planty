<?php
if (has_nav_menu('footer-menu')) {
    wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'container'      => 'nav',
        'container_class'=> 'footer-menu',
        'menu_class'     => 'footer-menu-items',
        'depth'          => 1, // Limite à un seul niveau pour les menus de pied de page
    ));
} else {
    echo '<p>Veuillez attribuer un menu au pied de page dans le back-office.</p>';
}
?>