<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Produk</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA Produk
            </div>
            <div class="card-body">
              <a href="tambah_produk.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH PRODUK</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">ID Produk</th>
                    
                    <th scope="col">NAMA produk</th>
                    <th scope="col">harga</th>
                    <th scope="col"> kategori</th>
                    <th scope="col"> status</th>

                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM produk 
                      INNER JOIN kategori ON produk.id_kategori = kategori.id_kategori
                      INNER JOIN status ON produk.id_status = status.id_status");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      
                  <td><?php echo $row['id_produk'] ?></td>
                      <td><?php echo $row['nama_produk'] ?></td>
                      <td><?php echo $row['harga'] ?></td>
                      <td><?php echo $row['nama_kategori'] ?></td>
                      <td><?php echo $row['nama_status'] ?></td>

                      <td class="text-center">
                        <a href="update_produk.php?id=<?php echo $row['id_produk'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus_produk.php?id=<?php echo $row['id_produk'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>



    
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA Kategori
            </div>
            <div class="card-body">
              <a href="tambah_kategori.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH KATEGORI</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">ID Kategori</th>
                    <th scope="col">NAMA Kategori</th>
                    <th scope="col"> Option</th>

                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM Kategori 
                      ");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      
                      <td><?php echo $row['id_kategori'] ?></td>
                      
                      <td><?php echo $row['nama_kategori'] ?></td>
                      <td class="text-center">
                        <a href="update_kategori.php?id=<?php echo $row['id_kategori'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus_kategori.php?id=<?php echo $row['id_kategori'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA Status
            </div>
            <div class="card-body">
              <a href="tambah_status.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH STATUS</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">ID Status.</th>
                    
                    <th scope="col">Nama Status</th>
                    <th scope="col">Option</th>
                    

                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM status 
                      ");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      
                      
                      <td><?php echo $row['id_status'] ?></td>
                      <td><?php echo $row['nama_status'] ?></td>
                      

                      <td class="text-center">
                        <a href="update_status.php?id=<?php echo $row['id_status'] ?>" class="btn btn-sm btn-primary" >EDIT</a>
                        <a href="hapus_status.php?id=<?php echo $row['id_status'] ?>" class="btn btn-sm btn-danger" >HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>