<h1 class="mt-4">Ulasan Tugas</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
    
                <h2 class="mt-3">Tugas</h2>
                <form method="post">
                    <?php
                    if (isset($_POST['submit'])) {
                        $id_buku = $_POST['id_buku'];
                        $id_user = $_SESSION['user']['id_user'];
                        $ulasan = $_POST['ulasan'];
                        $rating = $_POST['rating'];

                        $query = mysqli_query($koneksi, "INSERT INTO ulasan(id_buku, id_user, ulasan, rating) VALUES ('$id_buku', '$id_user', '$ulasan', '$rating')");

                        if ($query) {
                            echo '<script>alert("Tambah data berhasil.");</script>';
                            echo '<script>window.location.href = "?page=ulasan&id_buku=' . $id_buku . '";</script>';
                        } else {
                            echo '<script>alert("Tambah data gagal.");</script>';
                        }
                    }
                    ?>  
                    <div class="row mb-3">
                        <div class="col-md-2">Jenis</div>
                        <div class="col-md-8 mb-3">
                            <select name="id_buku" class="form-control">
                                <?php
                                $buku = mysqli_query($koneksi, "SELECT * FROM buku");
                                while ($buku = mysqli_fetch_array($buku)) {
                                    ?>
                                    <option value="<?php echo $buku['id_buku']; ?>"><?php echo $buku['judul']; ?></option>
?                                   <option value="<?php echo $tasks['categories']; ?>"><?php echo $categories['jenis']; ?></option>
                                    <option

                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Ulasan</div>
                        <div class="col-md-8">
                            <textarea name="ulasan" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Rating</div>
                        <div class="col-md-8">
                            <select name="rating" class="form-control">
                                <option>1</option>
                                <option>2</option> 
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option> 
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <a href="?page=buku" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>