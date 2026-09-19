<?php 
    $conn = mysqli_connect("localhost", "root", "", "democctth");
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    } else {
        echo "Kết nối thành công";
    }

    // Chuẩn bị câu truy vấn SQL
    $sql = "SELECT * FROM sinhvien";

    // Thực hiện truy vấn
    $result = mysqli_query($conn, $sql);

    // Kiểm tra kết quả truy vấn
    if (!$result) {
        die("Lỗi truy vấn: " . mysqli_error($conn));
    } else {
        echo "<br>Truy vấn thành công";
    }

    // Xử lý dữ liệu từ kết quả trả về
    echo"<br><hr>";
    $num_rows = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)){
        for($i = 0; $i < mysqli_num_fields($result); $i++){
            echo $row[$i] . " | ";
        }
        echo "<br>";
    }

    // Giải phóng bộ nhớ kết quả
    mysqli_free_result($result);

    // Đóng kết nối
    mysqli_close($conn);
?>