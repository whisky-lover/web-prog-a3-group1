<?php 
if (file_exists("install.php")) {
    exit("The install.php file is exit");
} else {
    function check_login() {
        if (isset($_SESSION["login"])) {
            return "./user-information.php";
        } else {
            return "./login-box.php";
        }
    }
    function check_admin_login() {
        if (isset($_SESSION["admin-login"])) {
            return "../backend/cms.php";
        } else {
            return "../code/admin-login.php";
        }
    }
}
?>