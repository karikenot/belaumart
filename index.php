<?php
    // require_once'config/config.php';
    
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    $allowed_pages = ['home', 'cart', 'profile', 'checkout', 'login', 'register'];
    if (in_array($page, $allowed_pages)) {
        $target_file = 'pages/' . $page . '.php';
    } else {
        $target_file = 'pages/404.php';
    }

    include 'components/header.php';
    include $target_file;
    //include 'components/footer.php';

?>