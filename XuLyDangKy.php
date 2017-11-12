<!DOCTYPE html>
<html>
    <head>
        <title>Thêm người dùng</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <table width="100%">
            <tr>
                <td colspan="2" style="background-color: wheat; height: 50px; text-align: center">
                  
                </td>
            </tr>
            <tr>
                <td width="200px" style="background-color: graytext">
                  
                </td>
                <td>
                   <h2>THÊM NGƯỜI DÙNG </h2>
                   <?php
                    // Lấy thông tin
                    $tenDN =$_POST["txtTenDN"];
					$matkhau =$_POST["txtMK"];
					
					
                    // kết nối
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
                    
                    
                    //Thực hiện kiểm tra trong CSDL
                    $truyVanThemTin="INSERT INTO `user` (`TenDN`, `MK` ) VALUES ('$tenDN', '$matkhau')";
                    
                    mysql_query($truyVanThemTin,$conn);   

                    echo "Đã thêm thành công";    // for test
					
                    ?>
                    
                </td>
				<td><a href="login.php">Quay lại trang login</a></td>
            </tr>
        </table>
    </body>
</html>

