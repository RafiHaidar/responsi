<?php 
require 'koneksi.php';

$input = file_get_contents('php://input');
$data = json_decode($input,true);

$pesan = [];
$tanggal = trim($data['tanggal']);
$peminjaman = trim($data['peminjaman']);
$lama = trim($data['lama']);
$total = trim($data['total']);
$nama = trim($data['nama']);

if ($tanggal != '' and $peminjaman != '') {
	$query = mysqli_query($con,"insert into rent(no,tanggal,peminjaman,lama,total,nama) values('','$tanggal','$peminjaman','$lama','$total','$nama')");

}else{
	$query = mysqli_query($con,"delete from rent where no='$no'");
}


// if ($query) {
// 	http_response_code(201);
// 	$pesan['status'] = 'sukses';
// }else{
// 	http_response_code(422);
// 	$pesan['status'] = 'gagal';
// }

echo json_encode($pesan);
echo mysqli_error($con);

?>