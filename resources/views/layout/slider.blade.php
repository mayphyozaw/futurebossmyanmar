<section class="banner-section" hidden>
    <div class="bg bg-image" style="background-image: url({{asset('data/slider/slider2.png')}})"></div>
    {{-- <div class="bg banner1-shape1"></div>
    <div class="bg banner1-shape2"></div> --}}
    <div class="auto-container">
      <div class="row">
        <!-- Content Column -->
        <div class="content-column col-xl-7">
          <div class="inner-column">
            <span class="sub-title wow fadeInUp" data-wow-delay="300ms"> Solutions for all type of visas </span>
            <h1 class="title wow fadeInUp" data-wow-delay="600ms"></h1>
            <!-- Info Btn -->
          </div>
          <a href="tel:+3655540069" class="info-btn-two wow fadeInUp" data-wow-delay="1200ms"> <i class="icon fa fa-phone"></i> <small>Make a Call</small> <strong>+36 55 540 069</strong> </a>
        </div>
      </div>
    </div>
  </section>



  <style>
    .main-banner-area {
    position: relative;
    z-index: 1;
    background-color: rgb(249, 249, 249);
    overflow: hidden;
    }
    .carousel {
    position: relative;
}
    .carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
    }
    .carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 2;
    display: flex;
    justify-content: center;
    padding: 0;
    margin-right: 15%;
    margin-bottom: 1rem;
    margin-left: 15%;
    list-style: none;
}
.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
}

</style>
<div class="main-banner-area">
    <div class="container-fluid pe-0 ps-0" >
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class=""
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2" class="active" aria-current="true"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3" class=""></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="{{asset('data/slider/slider1.png')}}" class="d-block w-100" alt="..." >
                </div>
                <div class="carousel-item active">
                    <img src="{{asset('data/slider/slider3.png')}}" class="d-block w-100" alt="..."  >
                </div>
                <div class="carousel-item">
                    <img src="{{asset('data/slider/slider3.png')}}" class="d-block w-100" alt="..."  >
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            
        </div>
    </div>
</div>
