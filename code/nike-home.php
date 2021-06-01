<?php
if (file_exists("../backend/install.php")) {
    exit("The install.php file is exit");
} else {
    session_start();
    $_SESSION["page"] = -1;
    include('../backend/check_login.php');
    $my_account_link = check_login();
?>
<?php
include '../backend/get-data.php';
include '../backend/display-store-product.php';
include '../backend/product_by_store.php';
include '../backend/display_store_by_categories.php';
include '../backend/arrray_product_by_store.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Nike</title>
    <link rel="stylesheet" href="./css/store-home.css">
    <link rel="stylesheet" href="./css/store-container.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./css/cookies.css">
    <link rel="stylesheet" href="../code/css/cms.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="overlay-cookies"></div>
    <div class="cookie-container">
        <h1>I use cookie</h1>
        <p>My website uses cookies necessary for its basic functioning. By continue browsing, you consent to my use of cookies and other technologies.</p>
        <button class="cookie-btn">I understand</button>
        <a href="#">Learn more</a>
    </div>
    <!-- CMS icon for PC-->
    <div class="cms-icon"><a href="../backend/cms.php"><i class="fa fa-address-card-o fa-3x" aria-hidden="true"></i></a></div>
    <!-- CMS icon for ipad and iphone X -->
    <div class="cms-icon-responsive"><a href="../backend/cms.php"><i class="fa fa-address-card-o fa-2x" aria-hidden="true"></i></a></div>
    <header>
        <main>
            <nav class="first-nav">
                <h1 class="logo"><a href="./index.php">RETAILEZ</a></h1>
                <!-- Nav PC -->
                <nav class="nav__pc">
                    <ul class="nav__list">
                        <li><a href="./index.php" class="nav__link push" id="underline">Home</a></li>
                        <li><a href="./about.php" class="nav__link" id="underline">About Us</a></li>
                        <li><a href="./fee.php" class="nav__link" id="underline">Fees</a></li>
                        <li><a href=<?=$my_account_link?> class="nav__link my-account">My Account</a></li>
                        <li>
                            <a href="#" class="nav__link">Browse<i class="ti-angle-double-down"></i></a>
                            <ul class="subnav">
                                <li><a href="./nike-browse-time.php?store_id=<?=$_GET["store_id"];?>">Product by created time</a></li>
                                <li><a href="./nike-browse-categ.php?store_id=<?=$_GET["store_id"];?>">Product by category</a></li>
                            </ul>
                        </li>
                        <li><a href="./faqs.php" class="nav__link">FAQs</a></li>
                        <li><a href="./contact.php" class="nav__link">Contact</a></li>
                        <li><a href="./order_placement_2.php" class="nav__link"><i class="ti-shopping-cart"></i></a></li>
                    </ul>
                </nav>
    
                
                <!-- Nav responsive -->
                <label for="nav-mobile-input" class="nav__bars-btn">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
                </label>
                
                <input type="checkbox" hidden name="" id="nav-mobile-input" class="nav__input">
                
    
                <label for="nav-mobile-input" class="nav__overlay">
    
                </label>
    
                <nav class="nav__mobile">
                    <label for="nav-mobile-input" class="nav__mobile-close">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>
                    </label>
                    <ul class="nav__mobile-list">
                        <li><a href="./index.php" class="nav__mobile-link">Home</a></li>
                        <li><a href="./about.php" class="nav__mobile-link">About us</a></li>
                        <li><a href="./fee.php" class="nav__mobile-link">Fees</a></li>
                        <li>
                            <a class="my-account" href=<?=$my_account_link?>><label for="subnav-mobile-check-account" class="nav__mobile-link hover-account">My Account</label></a>
                        </li>
                        <li>
                            <label for="subnav-mobile-check-browse" class="nav__mobile-link hover-browse">Browse<i class="ti-angle-double-down"></i></label>
                            <input type="checkbox" id="subnav-mobile-check-browse" class="check-subnav-browse">
                                <ul class="subnav-mobile-browse">
                                    <li><a href="./nike-browse-time.php?store_id=<?=$_GET["store_id"]?>">Product by created time</a></li>
                                    <li><a href="./store-browse-categ.php?store_id=<?=$_GET["store_id"]?>">Product by category</a></li>
                                </ul>
                        </li>
                        <li><a href="./faqs.php" class="nav__mobile-link">FAQs</a></li>
                        <li><a href="./contact.php" class="nav__mobile-link">Contact</a></li>
                        <li><a href="./order_placement_2.php" class="nav__mobile-link"><i class="ti-shopping-cart"></i></a></li>
                    </ul>
                </nav>
                
            </nav>
        </main>
    </header>

    <main>
        <!-- New Product -->
        <div class="title">
        <?php 
        $store_id = $_GET["store_id"];
        foreach ($stores_data as $store) {
            if ($store[$field_name_stores["id"]] === $store_id) {
                $store_name = $store[$field_name_stores["name"]];
            }
        };
        ?>
        <h1><?=$store_name; ?></h1>
            <h1>New Product</h1>
        </div>
        <div class="product-container">
        <?php $product_count = 0;
                foreach ($products_data as $product) :
                    if ($product[$field_name_products["store_id"]] == $_GET["store_id"] ){
                        $value = $product;
                        if ($product_count == 5) {
                            break;
                        } else {
                            $product_count++; ?>
            <div class="product">
                <a href="./product-detail.php?product_id=<?=$value[$field_name_products["id"]]?>" ><img src="./images/stores-image/nike-images/bask1.jpg" alt="lebron" width="200" height="200"></a>
                <h3><a href="./product-detail.php?product_id=<?=$value[$field_name_products["id"]]?>"><?=$value[$field_name_products["name"]]; ?></a></h3>
                
            </div>
            <?php }}; ?>
            <?php endforeach; ?>
        </div>

        <!-- Featured Product -->
        <div class="title-2">
            <h1>Featured Products</h1>
        </div>
        <div class="feature-container ft2">
            
        <?php
                $feature_count = 0;
                foreach ($products_data as $product):
                    if ($product[$field_name_products["store_id"]] == $_GET["store_id"] ){
                        $value = $product;
                        $x = $value[$field_name_products["featured_in_store"]];
                        if (strpos($x, "TRUE") !== FALSE) {
                            if ($feature_count == 5) {
                                break;
                            } else {
                                $feature_count++; ?>
            <div class="feature">
                <!-- <div class="overlay">
                    <p>155$</p>
                </div> -->
                <a href="./product-detail.php?product_id=<?=$value[$field_name_products["id"]]?>" ><img src="./images/stores-image/nike-images/football_set1.jpg" alt="full football set" width="200" height="200"></a>
                <h3><a href="./product-detail.php?product_id=<?=$value[$field_name_products["id"]]?>"><?= $value[$field_name_products["name"]]?></a></h3>
            </div>
 
            <?php    }
                    }}
                    ?>
                <?php endforeach; ?> 
        </div>
    </main>
    <div class="push"></div>
    <footer>
        <nav>
            <h3 class="left">All Rights Reserved. © 2021 RETAILEZ.</h3>
            <ul>
                <li><a href="./copyright.php">Copyright</a></li>
                <li><a href="./tos.php">ToS</a></li>
                <li><a href="./policy.php">Privacy Policy</a></li>
            </ul>
            <h3 class="right">Design by developer team</h3>
        </nav>
    </footer>
    <script src="./script/cookies.js" defer></script>
    <script src="./script/check_login.js" defer></script>
</body>
</html>
<?php } ?>