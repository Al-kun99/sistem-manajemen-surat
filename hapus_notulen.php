<?php 
require '../connection.php';

$id_notulen = $_GET["id_notulen"];

if( hapus_notulen($id_notulen) > 0 ) {
		echo "
			<script>
				alert('Data berhasil dihapus!');
				document.location.href = 'index.php?page=pertandingan';
			</script>
			";
	} else {
		echo "
			<script>
				alert('Data gagal dihapus!');
				document.location.href = 'index.php?page=peetandingan';
			</script>
			";
	}


 ?>