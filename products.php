<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products | المنتجات</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="index.css"> -->
  <link rel="stylesheet" href="products.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;
300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
</head>
<body>
  <center>
    <h2>جميع المنتجات المتوافرة</h2>
  </center>

  <?php 
  require_once 'config.php';
  $sql = "SELECT * FROM products";
  $data= mysqli_query($con,$sql);
  while ($row = mysqli_fetch_assoc($data)){
    echo "
    <center>   
      <main class=\"container\">
        <div class='card' style='width: 18rem;'>
          <img src='$row[image]' class='card-img-top' alt='product'>
          <div class='card-body'>
            <h5 class='card-title'>$row[name]</h5>
            <p class='card-text'>$row[price]</p>
            <a href='#' class='btn btn-success'>تعديل المنتج</a>
            <a href='#' class='btn btn-danger'>حذف المنتج</a>
          </div>
        </div>
      </main  >
    </center>";
  }
  ?>
  <?php ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">


  </script>
</body>
</html>