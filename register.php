<?php
   include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register To Do List</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body style="background-color:pink">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register To Do List</h3></div>
                                    <div class="card-body">
                                        <?php
                                          if(isset($_POST[ 'register'])) {
                                            $username = $_POST['username'];
                                            $email = $_POST['email'];
                                            $password = md5($_POST['password']);
                                            $name = $_POST['name'];

                                            $insert = mysqli_query($koneksi, "INSERT INTO users(username,email,password,name) VALUES('$username','$email','$password','$name')");

                                            if($insert){
                                                echo '<script>alert("Selamat, register berhasil. Silahkan login");location.href="login.php"</script>';
                                            }else{
                                                echo '<script>alert("Registrasi gagal, silahkan langi kembali");</script>';
                                            }
                                          }
                                        ?>
                                        <form method="post">
                                        <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Username</label>
                                                <input class="form-control py 4" type="username" required name ="username" placeholder="Masukkan Username" />    
                                            </div>
                                             <div class="form-group">
                                                <label class="small mb-1">Email</label>
                                                <input class="form-control py 4" type required ="text" name="email" placeholder="Masukkan Email" />  
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Masukkan Password" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputname">Name</label>
                                                <input class="form-control py 4" type="name" required name ="name" placeholder="Masukkan Name" />    
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit" name="register" value="register">Register</a>
                                                <a class="btn btn-danger "href="login.php">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small">
                                            &copy; 2025 To Do List.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>