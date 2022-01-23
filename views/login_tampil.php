<div class="tengah">
                <!--Jika terjadi login error tampilkan pesan ini-->
                <?php if(isset($_GET['error']) ) {?>
                <div class="alert alert-danger">Maaf! Login Gagal, Coba Lagi..</div>
                <?php }?>

                <?php if (isset($_SESSION['username'])) { ?>
                <div class="alert alert-info">
                    <strong>Welcome <?=$_SESSION['nama']?></strong>
                </div>
                <?php
            } else { ?>

                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title"><center>Login</center></h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="proses_login.php" method="post">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" name="user" class="form-control input-sm"
                                    placeholder="Username" required="" autocomplete="off"/>
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="password" name="pwd" class="form-control input-sm"
                                    placeholder="Password" required="" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" name="login" value="login"
                                            class="btn btn-danger btn-sm"><span class="fa fa-unlock-alt"></span>
                                        Masuk
                                    </button>
                                </div>
                        </form>
                        
                    </div>
                    
                </div>

            </div>
                <?php } ?>
        </div>
    </div>
 