<?php error_reporting(0);
$menu="$_GET[menu]";

switch ($menu){
    case '':
        # tampilan pendaftaran user
        echo "<h3>Halaman Utama Website</h3>";
        break;
    case 'daftar':
        # tampilan pendaftaran user
        include "form/frm_daftar.php";
        break;
    case 'bantuan':
        # tampilan reset password
        include "form/frm_hubungi.php";
        break;
    case 'login':          
        include "form/frm_login.php";
        break;      
    default:
        # tampilan awal halaman login
        echo "<h3>Eror 404 | Menu tidak ditemukan</h3>";
    break;        
}
?>