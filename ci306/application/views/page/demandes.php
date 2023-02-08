<div class="container">

<div class="row">

  <div class="col-lg-3">
 
  <h2 class="my-4">Bonjour <?php echo $nom;?></h2>

  </div>

  <div class="col-lg-9">

    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <h3>Takalo</h3>        </div>
        <div class="carousel-item">
          <h3>Echange</h3>
        </div>
        <div class="carousel-item">
          <h3>Exchange</h3>        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="title"><h1>Vos Demandes</h1></div>
    <br>
    <div class="row">
    <?php 
    $i=0; 
    foreach ($listeProduit as $produit) {
        
    ?>
    
    <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?php echo $produit['title']?></a>
                </h4>
                <h5><?php echo $produit['prix']?> Ar</h5>
                <p class="card-text"><?php echo $produit['Description']?></p>
              </div>
              <div class="card-footer">
                <a class="link-success" href="<?php echo base_url('index.php/demande/yes'); ?>?p=<?php echo $produit['idd']; ?>&idf=<?php echo $idu; ?>&idp=<?php echo $produit['idp']; ?>&idpf=<?php echo $produit['idpf']; ?>&idu=<?php 
                echo $t = $idg[$i]['idu']; $i++ ?>">Accepter</a>
                ou 
                <a class="link-success" href="<?php echo base_url('index.php/demande/no'); ?>?p=<?php echo $produit['idd']; ?>">Refuser</a>    
              </div>
            </div>
          </div>
    <?php } ?>
    </div>

  </div>


</div>


</div>