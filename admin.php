<?php 
ob_start();
session_start();
include 'koneksi.php'; 

if ($_SESSION['username'] != "admin") {
  header("location:index.php");
}

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>tAMPILAN!</title>
  </head>
  <header><h1>tampilan</h1>
 <a href="logout.php"><button class="logout">Log out</button></a>
 </header>
  <body>
    <table class="table">
  <tbody>
    <tr>
      <th scope="row">id</th>
      <td>nama</td>
      <td>email</td>
      <td>komentar</td>
      <td colspan="2">aksi</td>
    </tr>
    <tr>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
 <?php 
 $sql = mysqli_query($koneksi,"SELECT * FROM situbondo");
 while ($admin = mysqli_fetch_array($sql)) {
  ?>
  <tr>
  	<td><?=$admin['id'];?></td>
  	<td><?=$admin['nama'];?></td>
  	<td><?=$admin['email'];?></td>
  	<td><?=$admin['komentar'];?></td>
  	<td><a href="delete.php?id=<?=$admin['id'];?>"><button type="button" class="btn btn-primary">delete</button></a></td>
 	<td><a href="update.php?id=<?=$admin['id'];?>"><button type="button" class="btn btn-primary">update</button></a></td>
  </tr>
  <?php 
}
 ?>
 </table>
 </center>
 </body>
 </html>

 <style type="text/css">
  *{
    margin: 0px;
    padding: 0px;
  }
  header{
    background:black;
    padding: 20px;
  }
  h1{
    color: white;
  }
  table tr td{
    border:solid black 0.5px;
    padding: 25px;
    margin-bottom: 30px;
  }

  td{
    text-align: center;
  }

  .logout {
    float: right;
    margin-top: -35px;
  }
 </style>

 <?php 
mysqli_close($koneksi);
ob_end_flush();
 ?>