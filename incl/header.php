<?php
        $full_name = $_SERVER['PHP_SELF'];
        $name_array = explode('/',$full_name);
        $count = count($name_array);
        $page = $name_array[$count-1];
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SF Marina Systems</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
        <!-- google fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic|Bitter:400,700,400italic' rel='stylesheet' type='text/css'>        
        
        <link rel="stylesheet" href="css/normalize.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="../js/vendor/responsive-slider/responsiveslides.css" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <nav class = "">
            
            
            <div id = "main-logo-wrapper">
                <a href = "index.php"><img src="img/logo_sf-marina-main.png" alt="logo_sf-marina-main" width="386" height="50"></a>
            </div>
            
            <div id = "nav-wrapper" class = "pushy pushy-left">
                <ul>
                    <li class = "dropdown">
                        <a <?php if ($page == "marina-systems.php" || $page == "industrial-docking-systems.php" || $page == "floating-breakwaters.php" || $page == "specialized-structures.php"){ echo "class='active scroll-to-section'";} ?> class = "scroll-to-section" href = "#products-nav">Products & Applications</a>
                        <ul>
                            <li><a href = "marina-systems.php">Marina Systems</a></li>
                            <li><a href = "industrial-docking-systems.php">Industrial Docking Systems</a></li>
                            <li><a href = "floating-breakwaters.php">Floating Breakwaters</a></li>
                            <li><a href = "specialized-structures.php">Specialized Structures</a></li>
                        </ul>
                    </li>
                    <li><a <?php if ($page == "history.php"){ echo "class='active'";} ?> href = "history.php">History</a></li>
                    <li><a <?php if ($page == "news.php"){ echo "class='active'";} ?> href = "news.php">News</a></li>
                    <li><a class = "scroll-to-section" href = "#contact">Contact</a></li>
                </ul>
            </div>
            
            
            
            <div class = "clear"></div>
            
        </nav>


        <div class="site-overlay"></div>     
        
       <div class="menu-btn">&#9776; Menu</div>        
