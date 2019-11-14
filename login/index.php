<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login | Admin</title>
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="col-md-4"></div>
    <div class="col-md-3 box form-login">
        
        <div class="outer-form-login">
        
        <h3 class="text-center title-login" >Login | GoShop</h3>

         

            <?php
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal"){
                    echo "login gagal";
                }else if($_GET['pesan'] == "logout"){
                    echo "anda berhasil logout";
                } else if($_GET['pesan'] == "belum_login"){
                    echo "anda belum login";
                }
            }
            ?>
            
            <form action="check-login.php" method="post">
            <div class="form-group">
                <input type="text" name="username" placeholder="Username"></input>
            </div>
            
            <div class="form-group">
                <input type="password" name="password" placeholder="Password"></input>
            </div>

            <input type="submit" class="btn btn-success" value="LOGIN">

            <!-- <div class="text-center forget">
                <p>Forget Password?</p>
            </div> -->
        </form>
        </div>
    </div>


    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>