<?php
$sql = "INSERT INTO $table (namePro, descriptPro, pricePro, img) VALUES ('" .$ArrProducto[0]. "','" .$ArrProducto[1]. "','" .$ArrProducto[2]. "','" .$ArrProducto[3]. "')";

if ($conn->query($sql) === TRUE) {
    echo $lang['created'];
} else {
    echo "Error: ". $sql ."<br>" . $conn->error;
}
$conn->close();
?>