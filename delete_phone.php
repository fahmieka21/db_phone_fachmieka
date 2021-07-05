<?php
include('connection.php');
$id = (int)$_POST['id'];
$query = 'delete from tbl_phone where id ='.$id;
$result = mysqli_query($query) or die(mysqli_erorr());
if(mysqli_affected_now() > 0) {
    echo 'Menghapus Data Sukses';
} else {
    echo 'Tidak Sukses Penghapusan data';
}
?>