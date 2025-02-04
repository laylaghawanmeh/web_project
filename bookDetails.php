<?php
    session_start();
    if(isset($_SESSION['username'])){
        $user = $_SESSION['username'];
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bookDetails.css">
    <title>Book Details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: pink;">
        <div class="container-fluid">
          <a class="navbar-brand" href="account.php"><i class="fa-solid fa-user"></i></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item" style="padding-top:10;">
              <?php
                  if(isset($_SESSION['username'])){
                      $user = $_SESSION['username'];
                  }
              ?>
            </li>
            
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
            </ul>
            <form id="searchForm" class="d-flex">
              <input class="form-control me-2" id="txtSearch" placeholder="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
          </form>          
          </div>
        </div>
      </nav>

    <main id="book-detail-container" class="container">
        <div id="book-detail" class="book-info">
            
        </div>
    </main>
    <script src="bookDetails.js"></script>
  </body>
</html>
