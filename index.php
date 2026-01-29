<?php 

if(session_status() === PHP_SESSION_NONE){
    $lifetime = 60 * 60 * 24 *14;
    session_set_cookie_params($lifetime, '/');
    session_start();
}

require_once 'view/header.php'; ?>

<img id="home-photo" src="<?php echo "images/colorful-tree-image.jpg"; ?>" alt=""/>

<?php require_once 'view/footer.php'; ?>