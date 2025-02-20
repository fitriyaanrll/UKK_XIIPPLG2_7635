<h1 class="mt-4">Tugas</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <a href="?page=buku_tambah" class="btn btn-primary">+ Tambah Data</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Deskripsi</th>
                    </tr>
                    <?php
                    $i = 1;
                        $query = mysqli_query($koneksi, "SELECT*FROM tasks LEFT JOIN categories on tasks.category_id = categories.category_id");
                       
                            ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $query['category_id']; ?></td>
                                <td><?php echo $query['judul']; ?></td>
                                <td><?php echo $query['tanggal']; ?></td>
                                <td><?php echo $query['deskripsi']; ?></td>
                                <td>
                                    <a href="?page=buku_ubah&&id=<?php echo $query['category_id']; ?>" class="btn btn-info">Ubah</a>
                                    <a onclick="return confirm('Apakah anda yakin menghapus data ini?');" href="?page=buku_hapus&&id=<?php echo $tasks['user_id']; ?>" class="btn btn-danger ">Hapus</a>
                                </td>
                            </tr>
        
                </table>
            </div>
        </div>
    </div>
</div>