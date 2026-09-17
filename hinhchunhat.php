<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hình Chữ Nhật</title>
</head>
<body>
    <form method="post" action="">
        <table align = "center"  bgcolor="#feffd3">
            <tr>
                <td colspan="2" bgcolor="#e98a38" align="center">
                    <h3>Vẽ Hình Chữ Nhật</h3>
                </td>
            </tr>
            <tr>
                <th>Chiều Dài:</th>
                <td><input type="number" id="width" name="width" required step = "any"
                value="<?php
                    if (isset($_POST['submit'])) {echo $_POST['width'];}
                    ?>">
                </td>
            </tr>
            <tr>
                <th>Chiều Rộng:</th>
                <td><input type="number" id="height" name="height" required step = "any"
                value="<?php
                    if (isset($_POST['submit'])) {echo $_POST['height'];}
                    ?>">
                </td>
            </tr>
            <tr>
                <th>Diện Tích:</th>
                <td>
                    <input type="text" id="area" name="area"
                    value="<?php
                        if (isset($_POST['submit']) && isset($_POST['width']) && isset($_POST['height'])) {
                            $cd = $_POST['width'];
                            $cr = $_POST['height'];
                            if ($cd <= 0 || $cr <= 0) {
                                echo "Chiều dài và chiều rộng phải lớn hơn 0";
                            } else if ($cr>=$cd) {
                                echo "Chiều rộng phải nhỏ hơn chiều dài";
                            } else {
                                echo $_POST['width'] * $_POST['height'];
                            }
                        }
                        ?>"
                        readonly = "true">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="submit" value="Tính">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>