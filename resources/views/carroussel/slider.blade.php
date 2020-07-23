<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="https://www.dg-annonces.com"><img src="{{ asset('image/products/'. $annonce->image)}}" class="d-block w-100" alt="iles" width="100%" height="400"></a>
        <div class="carousel-caption d-none d-md-block">
          <h1><a href="https://www.dg-annonces.com"> Vas-sy découvrir dg-annonces </a></h1>
          <p>Participer .</p>
        </div>
      </div>
      <div class="carousel-item">
         <img src="{{ asset('image/photos/'. $annonce->photo)}}" class="d-block w-100"  width="100%" height="400" alt="ocean">
        <div class="carousel-caption d-none d-md-block">
           <h1>COMORES LIBRE, PUBLIER UNE ANNONCE</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
         <img src="{{ asset('image/medias/'. $annonce->media)}}" class="d-block w-100" width="100%" height="400" alt="cocotier">
        <div class="carousel-caption d-none d-md-block">
           <h1><a href="/articles/posts/create"> COMORES LIBRE, PUBLIER UN ARTICLE </a></h1>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
      <div class="carousel-item">
         <img src="{{ asset('image/uploads/'. $annonce->upload)}}" class="d-block w-100" width="100%" height="400" alt="cocotier" >
        <div class="carousel-caption d-none d-md-block">
           <h1><a href="/articles/posts/create"> COMORES LIBRE, PUBLIER UN ARTICLE </a></h1>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
      <div class="carousel-item">
         <img src="{{ asset('image/fichiers/'. $annonce->fichier)}}" class="d-block w-100" width="100%" height="400" alt="cocotier">
        <div class="carousel-caption d-none d-md-block">
           <h1><a href="/articles/posts/create"> COMORES LIBRE, PUBLIER UN ARTICLE </a></h1>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>