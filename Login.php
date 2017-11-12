<html>
    <head>
        <title>Đăng nhập Hệ thống</title>
    </head>
    <body style="background-color: black">
        
        <form method="POST" action="XuLyLogin.php">
            <table style="width: 300px; margin: 0 auto; margin-top:100px; background-color: white">
                <tr>
                    <td colspan="2">
                        Đăng nhập
                    </td>
                </tr>
                <tr>
                    <td>Tên đăng nhập  </td>
                    <td> <input type="text" name="txtTenDN"> </td>
                </tr>
                <tr>
                    <td>Mật khẩu  </td>
                    <td> <input type="password" name="txtMK"> </td>
                </tr>
				
                <table   style="width: 300px; margin: 0 auto; background-color: white">
                <tr style="margin: auto">
                <td style="width: 105px"> </td>
                    <td style="border-left: 100px;"> <input type="submit" value="Đăng Nhập"> </td>
					<td><a href="DangKy.php">Đăng Ký</a></td>
                </tr>
				</table>

            </table>
        </form> 
        
        
    </body>
</html>
