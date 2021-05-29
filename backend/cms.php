<?php
if (file_exists("install.php")) {
    exit("The install.php file is exit");
} else {
    session_start();
    if (!isset($_SESSION["admin-login"])) {
        header("location: ../code/admin-login.php");
        } else {
            // header("location: ./cms.php");
        }

    include('./check_login.php');
    $my_account_link = check_login();
    $check_admin = check_admin_login();
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../code/css/header.css">
    <link rel="stylesheet" href="../code/css/footer.css">
    <link rel="stylesheet" href="../code/css/about.css">
    <link rel="stylesheet" href="../code/css/member-info.css">
    <link rel="stylesheet" href="../code/css/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../code/css/cookies.css">
    <link rel="stylesheet" href="../code/css/cms.css">
</head>
<body>
<div id="overlay-cookies"></div>
    <div class="cookie-container">
        <h1>I use cookie</h1>
        <p>My website uses cookies necessary for its basic functioning. By continue browsing, you consent to my use of cookies and other technologies.</p>
        <button class="cookie-btn">I understand</button>
        <a href="#">Learn more</a>
    </div>
    <header>
        <main>
            <nav class="first-nav">
                <h1 class="logo"><a href="../code/index.php">RETAILEZ</a></h1>
                <!-- Nav PC -->
                <nav class="nav__pc">
                    <ul class="nav__list">
                        <li><a href="../code/index.php" class="nav__link push" id="underline">Home</a></li>
                        <li><a href="../code/about.php" class="nav__link" id="underline">About Us</a></li>
                        <li><a href="../code/fee.php" class="nav__link" id="underline">Fees</a></li>
                        <li><a href=<?=$my_account_link?> class="nav__link my-account">My Account</a></li>
                        <li>
                            <a href="#" class="nav__link">Browse<i class="ti-angle-double-down"></i></a>
                            <ul class="subnav">
                                <li><a href="../code/store-browse-name.php">Store By Name</a></li>
                                <li><a href="../code/store-browse-categ.php">Store By Category</a></li>
                            </ul>
                        </li>
                        <li><a href="../code/faqs.php" class="nav__link">FAQs</a></li>
                        <li><a href="../code/contact.php" class="nav__link">Contact</a></li>
                        <li><a href="../code/order_placement_2.php" class="nav__link"><i class="ti-shopping-cart"></i></a></li>
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
                        <li><a href="../code/index.php" class="nav__mobile-link">Home</a></li>
                        <li><a href="../code/about.php" class="nav__mobile-link">About us</a></li>
                        <li><a href="../code/fee.php" class="nav__mobile-link">Fees</a></li>
                        <li>
                            <a class="my-account" href=<?=$my_account_link?>><label for="subnav-mobile-check-account" class="nav__mobile-link hover-account">My Account</label></a>
                        </li>
                        <li>
                            <label for="subnav-mobile-check-browse" class="nav__mobile-link hover-browse">Browse<i class="ti-angle-double-down"></i></label>
                            <input type="checkbox" id="subnav-mobile-check-browse" class="check-subnav-browse">
                                <ul class="subnav-mobile-browse">
                                    <li><a href="../code/store-browse-name.php">By Name</a></li>
                                    <li><a href="../code/store-browse-categ.php">By Category</a></li>
                                </ul>
                        </li>
                        <li><a href="../code/faqs.php" class="nav__mobile-link">FAQs</a></li>
                        <li><a href="../code/contact.php" class="nav__mobile-link">Contact</a></li>
                        <li><a href="../code/order_placement_2.php" class="nav__mobile-link"><i class="ti-shopping-cart"></i></a></li>
                    </ul>
                </nav>
                
            </nav>
        </main>
    </header>
    <main>
        <div class="cms-container">
            <p>Welcome to the dashboard <?= $_SESSION['admin-username'] ?></p>
            <br>
            <h3>Change content of a page</h3>
            <form name="content-editor" method="post" action="cms.php">
                <label for="file">Choose the page you want to edit:</label>
                <select name="file" id="files">
                    <option value="default" disabled="disabled" selected="true">Select a file</option>
                    <option value="copyright">Copyright</option>
                    <option value="tos">TOS</option>
                    <option value="privacy">Privacy</option>
                </select>
                <br><br>
                <fieldset>
                    <legend>Content Editor</legend>
                    <br>
                    <textarea name="content" cols="150" rows="18" ></textarea>
                    <br>
                    <input type="submit" name="submit-append" value="Append Content">
                    <input type="submit" name="submit-overwrite" value="Overwrite Content">
                    <br><br>
                </fieldset>
                <?php 
                    if (isset($_POST)) {
                        if (isset($_POST['submit-append']) && !empty($_POST['file'])) {
                            if (!file_exists($_POST['file'] . ".txt")){
                                echo "Error: This file does not exist";
                            } else {
                                $file = fopen($_POST['file'] . ".txt","a+");
                                $curr_content = "";
                                while(!feof($file)){
                                    $curr_content = $curr_content . fgets($file). "<br>";
                                }
                                $new_content = $_POST["content"];
                                file_put_contents($_POST['file'] . ".txt", $curr_content . $new_content);
                                fclose($file);
                            }
                        }
                        if (isset($_POST['submit-overwrite']) && !empty($_POST['file'])) {
                            $file = fopen($_POST['file'] . ".txt","w");
                            $content = $_POST["content"];
                            file_put_contents($_POST['file'] . ".txt", $content);
                            fclose($file);
                        }
                    }
                ?>
            </form>   
            <br> 
            <h3>Check content of a page</h3>
            <form name="read-file" method="post" action="cms.php">
                <label for="file-name">Choose the page you want to view:</label>
                    <select name="file-name" id="file-name">
                        <option value="default" disabled="disabled" selected="true">Select a file</option>
                        <option value="copyright">Copyright</option>
                        <option value="tos">TOS</option>
                        <option value="privacy">Privacy</option>
                        <input type="submit" name="submit-open" value="View Content">
                    </select>
                    <br><br>
                    <fieldset>
                        <legend>Content Reader</legend>
                        <br>
                        <?php
                            if (isset($_POST['submit-open'])) {
                                if(!file_exists($_POST['file-name'] . ".txt")){
                                    echo "Error: This file does not exist.";
                                } else {
                                    $file = fopen($_POST['file-name'] . ".txt", "r");
                                    while(!feof($file)){
                                        echo fgets($file). "<br>";
                                    }
                                    fclose($file);
                                }
                            }
                        ?>   
                        <br><br>
                    </fieldset>    
            </form>
            <br>    
            <h3>Change team avatars</h3>
            <br>
            <p>Click on the member you want to change avatar:</p>
            <br>
            <div class="team">
                <div class="avatar-box" id="duy-box">
                    <div class="img-box">
                        <img src="../code/images/about-images/duy-img.jpeg">
                    </div>
                    <div class="box-content">
                        <h1>Nguyen Anh Duy<br>
                        <span>s3878141<br>Website Developer</span>
                        </h1>
                    </div>
                </div>
                <div class="avatar-box" id="bao-box">
                    <div class="img-box">
                        <img src="../code/images/about-images/bao-img.jpeg">
                    </div>
                    <div class="box-content">
                        <h1>Nguyen Luu Quoc Bao<br>
                        <span>s3877698<br>Website Developer</span>
                        </h1>
                    </div>
                </div>
                <div class="avatar-box" id="tuan-box">
                    <div class="img-box">
                        <img src="../code/images/about-images/tuan-image.jpeg">
                    </div>
                    <div class="box-content">
                        <h1>Dao Kha Tuan<br>
                        <span>s3877347<br>Website Developer</span>
                        </h1>
                    </div>
                </div>
                <div class="avatar-box" id="long-box">
                    <div class="img-box">
                        <img src="../code/images/about-images/long-image.jpeg">
                    </div>
                    <div class="box-content">
                        <h1>Nguyen Trong Minh Long<br>
                        <span>s3878694<br>Website Developer</span>
                        </h1>
                    </div>
                </div>
            </div>

            <div id="overlay-about" onclick="offOverlay()"></div>
            <div class="info" id="more-info-duy">
                <div class="info-header">
                    <div class="info-title">Nguyen Anh Duy</div>
                </div>
                <div class="info-image">
                    <img src="../code/images/about-images/duy-img.jpeg" width="200px" height="200px">
                </div>
                <div class="info-body">
                    <form name="duy-img-editor" method="post" enctype="multipart/form-data" action="cms.php"> 
                        <!-- Profile image -->
                        <label for="duy_image">Select a new image</label>
                            <input type="file" name="duy_image">
                            <input type="submit" name="duy-submit-btn" value="Upload Image">
                            <br>
                        <?php
                            if (isset($_POST['duy-submit-btn'])) {
                                if ($_FILES["duy_image"]["error"] == UPLOAD_ERR_OK) {
                                // store new image as duy.jpeg (replace the current image)
                                $new_location = '../code/images/about-images/duy-img.jpeg';    
                                move_uploaded_file($_FILES['duy_image']['tmp_name'], $new_location);
                                echo "<p>The image has been uploaded, restart the browser to update the file!</p>";
                                }
                            }
                        ?>
                    </form>
                </div>
            </div>

            <div class="info" id="more-info-bao">
                <div class="info-header">
                    <div class="info-title">Nguyen Luu Quoc Bao</div>
                </div>
                <div class="info-image">
                    <img src="../code/images/about-images/bao-img.jpeg" width="200px" height="200px">
                </div>
                <div class="info-body">
                    <form name="bao-img-editor" method="post" enctype="multipart/form-data" action="cms.php"> 
                        <!-- Profile image -->
                        <label for="bao_image">Select a new image</label>
                            <input type="file" name="bao_image">
                            <input type="submit" name="bao-submit-btn" value="Upload Image">
                            <br>
                        <?php
                            if (isset($_POST['bao-submit-btn'])) {
                                if ($_FILES["bao_image"]["error"] == UPLOAD_ERR_OK) {
                                // store new image as duy.jpeg (replace the current image)
                                $new_location = '../code/images/about-images/bao-img.jpeg';    
                                move_uploaded_file($_FILES['bao_image']['tmp_name'], $new_location);
                                echo "<p>The image has been uploaded, restart the browser to update the file!</p>";
                                }
                            }
                        ?>
                    </form>
                </div>
            </div>

            <div class="info" id="more-info-tuan">
                <div class="info-header">
                    <div class="info-title">Dao Kha Tuan</div>
                </div>
                <div class="info-image">
                    <img src="../code/images/about-images/tuan-image.jpeg" width="200px" height="200px">
                </div>
                <div class="info-body">
                    <form name="tuan-img-editor" method="post" enctype="multipart/form-data" action="cms.php"> 
                        <!-- Profile image -->
                        <label for="tuan_image">Select a new image</label>
                            <input type="file" name="tuan_image">
                            <input type="submit" name="tuan-submit-btn" value="Upload Image">
                            <br>
                        <?php
                            if (isset($_POST['tuan-submit-btn'])) {
                                if ($_FILES["tuan_image"]["error"] == UPLOAD_ERR_OK) {
                                // store new image as duy.jpeg (replace the current image)
                                $new_location = '../code/images/about-images/tuan-image.jpeg';    
                                move_uploaded_file($_FILES['tuan_image']['tmp_name'], $new_location);
                                echo "<p>The image has been uploaded, restart the browser to update the file!</p>";
                                }
                            }
                        ?>
                    </form>
                </div>
            </div>

            <div class="info" id="more-info-long">
                <div class="info-header">
                    <div class="info-title">Nguyen Trong Minh Long</div>
                </div>
                <div class="info-image">
                    <img src="../code/images/about-images/long-image.jpeg" width="200px" height="200px">
                </div>
                <div class="info-body">
                    <form name="long-img-editor" method="post" enctype="multipart/form-data" action="cms.php"> 
                        <!-- Profile image -->
                        <label for="long_image">Select a new image</label>
                            <input type="file" name="long_image">
                            <input type="submit" name="long-submit-btn" value="Upload Image">
                            <br>
                        <?php
                            if (isset($_POST['long-submit-btn'])) {
                                if ($_FILES["long_image"]["error"] == UPLOAD_ERR_OK) {
                                // store new image as duy.jpeg (replace the current image)
                                $new_location = '../code/images/about-images/long-image.jpeg';    
                                move_uploaded_file($_FILES['long_image']['tmp_name'], $new_location);
                                echo "<p>The image has been uploaded, restart the browser to update the file!</p>";
                                }
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>

    </main>
    <footer>
        <nav>
            <h3 class="left">All Rights Reserved. © 2021 RETAILEZ.</h3>
            <ul>
                <li><a href="../code/copyright.php">Copyright</a></li>
                <li><a href="../code/tos.php">ToS</a></li>
                <li><a href="../code/policy.php">Privacy Policy</a></li>
            </ul>
            <h3 class="right">Design by developer team</h3>
        </nav>
    </footer>
    <script src="../code/script/cookies.js" defer></script>
    <script src="../code/script/display-member-info.js"></script>
    <script src="../code/script/check_login.js" defer></script>
</body>
</body>
</html>
<?php } ?>