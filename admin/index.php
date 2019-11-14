<?php
include"action.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GoShop | Admin</title>

    <!-- css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/bdf66ddc22.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">GoShop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sign-out</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h3 class="text-center text-dark mt-3">Selamat Datang Di Halaman Admin</h3>
                <hr>
            </div>

            <!-- Add Product -->
            <div class="col-md-4">
                <h5 class="text-center text-success mt-2">Add Product</h5>
                <form action="action.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control " id="name" name="nama" aria-describedby="emailHelp"
                            placeholder="Nama Produk">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control " id="kode" name="kode" aria-describedby="emailHelp"
                            placeholder="Kode Produk">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="kategori" id="kategori">
                            <option value="-" selected>-</option>
                            <option value="pakaian-wanita">Pakaian Wanita</option>
                            <option value="pakaian-pria">Pakaian Pria</option>
                            <option value="pakaian-anak-l">Pakaian Anak Laki-laki</option>
                            <option value="pakaian-anak-p">Pakaian Anak Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control " id="jumlah" aria-describedby="emailHelp" name="jumlah"
                            placeholder="Jumlah">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"
                            placeholder="Enter Deskripsi..."></textarea>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success btn-block" id="exampleFormControlFile1" name="add"
                            value="Add">
                    </div>
                </form>
            </div>
            <!-- End Add Product -->


            <!-- Tables -->
            <div class="col-md-8">
                <h5 class="text-center text-success mt-2">List Product</h5>
                <table class="table table-striped">
                    <thead>
                        <tr class="bg-secondary text-white text-center">
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Kode Produk</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><img src="../assets/product/p10.jpg" width="70"></td>
                            <td>Dress</td>
                            <td>1245167</td>
                            <td>Pakaian Wanita</td>
                            <td>20</td>
                            <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus praesentium sit
                                accusamus explicabo voluptate quaerat, dolores at ipsa omnis fugiat sed pariatur quas!
                                Architecto error ducimus neque ipsam obcaecati laboriosam.</td>
                            <td>
                                <div class="p-1">
                                    <a href="#" class="badge badge-primary p-2">Detail</a>
                                </div>
                                <div class="p-1">
                                    <a href="#" class="badge badge-warning p-2">Edit</a>
                                </div>
                                <div class="p-1">
                                    <a href="#" class="badge badge-danger p-2">Delete</a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">1</th>
                            <td><img src="../assets/product/p13.jpg" width="70"></td>
                            <td>Dress</td>
                            <td>1245167</td>
                            <td>Pakaian Wanita</td>
                            <td>20</td>
                            <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus praesentium sit
                                accusamus explicabo voluptate quaerat, dolores at ipsa omnis fugiat sed pariatur quas!
                                Architecto error ducimus neque ipsam obcaecati laboriosam.</td>
                            <td>
                                <div class="p-1">
                                    <a href="#" class="badge badge-primary p-2">Detail</a>
                                </div>
                                <div class="p-1">
                                    <a href="#" class="badge badge-warning p-2">Edit</a>
                                </div>
                                <div class="p-1">
                                    <a href="#" class="badge badge-danger p-2">Delete</a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">1</th>
                            <td><img src="../assets/product/p12.jpg" width="70"></td>
                            <td>Dress</td>
                            <td>1245167</td>
                            <td>Pakaian Wanita</td>
                            <td>20</td>
                            <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus praesentium sit
                                accusamus explicabo voluptate quaerat, dolores at ipsa omnis fugiat sed pariatur quas!
                                Architecto error ducimus neque ipsam obcaecati laboriosam.</td>
                            <td>
                                <div class="p-1">
                                    <a href="#" class="badge badge-primary p-2">Detail</a>
                                </div>
                                <div class="p-1">
                                    <a href="#" class="badge badge-warning p-2">Edit</a>
                                </div>
                                <div class="p-1">
                                    <a href="#" class="badge badge-danger p-2">Delete</a>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>