<?php
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM ulasan WHERE id_buku=$id");

// Delete the book from the buku table
$query = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku=$id");
?>
<script>
    alert('Hapus Data Berhasil.');
    location.href = "index.php?page=buku";
</script>