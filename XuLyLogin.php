<?php
// Lấy tên ĐN và MK
$tenDN =$_POST["txtTenDN"];
$mk=$_POST["txtMK"];
//echo $tenDN."-". $mk;   // for Test
//---------
// Ket noi DB

$SERVER = "localhost";  //địa chỉ máy chủ MySQL
$USERNAME = "root";   // Tài khoản đăng nhập MySQL
$PASSWORD = "";       // 
$DBNAME = "website";   // Tên CSDL
$conn = @mysql_connect($SERVER, $USERNAME,$PASSWORD);
if ( !$conn ) {
//Không kết nối được, thoát ra và báo lỗi
die("Không nết nối được vào MySQL server");
} //end if
//chọn CSDL để làm việc
mysql_select_db($DBNAME, $conn);
echo "Kết nối thành công";    // for test

//Thực hiện kiểm tra trong CSDL
$truyVan="select * from user where TenDN='".$tenDN."' and MK='".$mk."'";
$kq=  mysql_query($truyVan,$conn);  // thực hiện truy vấn  

if (mysql_num_rows($kq)==0)  // nếu không có bản ghi nào ==> đăng nhập sai
{   // CHuyển hướng
    header("Location: login.php");
}
 else {
     // Lưu lại session (phiên làm việc)
     session_start();  // khởi tạo
     $_SESSION['uName']=$tenDN;   // lưu lại 
     // 
     //chuyển hướng
     header("Location: index.php");
     
    
}
?>

