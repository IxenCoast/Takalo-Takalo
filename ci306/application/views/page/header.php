

    <?php 
    
    $home = "";
    $ajouter = "";
    $contact = "";
    $demandes = "";
    
        $title = $header;

        if($header == "ajouter"){
          $ajouter = "active";
        }else if($header == "home"){
          $home = " active";
        }else if($header == "demandes"){
          $demandes = " active";
        }else if($header == "contact"){
          $contact = " active";
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php echo $title;?></title>
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url();?>assets/css/shop-homepage.css" rel="stylesheet">
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Takalo-Takalo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item<?php echo $home?>">
            <a class="nav-link" href="index">Home</a>
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item <?php echo $ajouter?>">
                <a class="nav-link" href="ajouter">Ajouter</a>
          </li>
          <li class="nav-item<?php echo $demandes?>">
            <a class="nav-link" href="demandes">Demandes</a>
          </li>
          <li class="nav-item<?php echo $contact?>">
            <a class="nav-link" href="<?php echo base_url('index.php/log/logout')?>">Log out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>