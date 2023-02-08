<div class="container">

<div class="row">

  <div class="col-lg-3">
 
  <h2 class="my-4">Bonjour <?php echo $nom;?>, Bienvenu</h2>

  </div>
  <!-- /.col-lg-3 -->

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
    <div class="title"><h1>Vos produits</h1></div>
    <br>
    <div class="row">
    <?php foreach ($listeProduit as $produit) { ?>
    
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
                <?php 
                $a="<a href=".base_url('index.php/home/echange')."?p=".$produit['idp']. " class=\"link-success\">Echanger</a>";
                foreach ($pec as $p) { 
                  if($produit['idp']==$p['idp']){
                  $a="Demande en cours ...";
                  }
                } echo $a; ?>       
              </div>
            </div>
          </div>
    <?php } ?>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row By <p class="card-text"><?php echo $produit['nom']?> -->

</div>