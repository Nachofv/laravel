@extends('layout.master')
@section('content')
<hr class="featurette-divider">






<div class="container">
<h2> Berriel I</h2>

    <div id="myCarouselCustom" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarouselCustom" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselCustom" data-slide-to="1"></li>
            <li data-target="#myCarouselCustom" data-slide-to="2"></li>
            <li data-target="#myCarouselCustom" data-slide-to="3"></li>
            <li data-target="#myCarouselCustom" data-slide-to="4"></li>
            <li data-target="#myCarouselCustom" data-slide-to="5"></li>
            <li data-target="#myCarouselCustom" data-slide-to="6"></li>

        </ol>

        <!-- Wrapper for slides -->
        <div class="carro">
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/porche.jpg" alt="">
                <div class="carousel-caption">

                    <p>Berriel I</p>
                </div>
            </div>

            <div class="item">
                <img src="img/interior1.jpg" alt="">
                <div class="carousel-caption">

                    <p>Berriel I</p>
                </div>
            </div>

            <div class="item">
                <img src="img/interior2.jpg" alt="">
                <div class="carousel-caption">

                    <p>Berriel I</p>
                </div>
            </div>
            <div class="item">
                <img src="img/interior3.jpg" alt="">
                <div class="carousel-caption">

                    <p>Berriel I</p>
                </div>
            </div>
            <div class="item">
                <img src="img/baño.jpg" alt="">
                <div class="carousel-caption">

                    <p>Berriel I</p>
                </div>
            </div>
            <div class="item">
                <img src="img/mesamadera.jpg" alt="">
                <div class="carousel-caption">

                    <p>Berriel I</p>
                </div>
            </div>
            <div class="item">
                <img src="img/escaleraext2.jpg" alt="">
                <div class="carousel-caption">
                </div>
            </div>
                      

        </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
    <hr class="featurette-divider">
    <section class="service">
    <div class="container">
        <div class="row">
            <div class="section-title" >
                <h3>Apartamento Berriel I</h3>
                <p>Este acogedor apartamento es ideal para dos personas, equipado con todas las comodidades para hacer de una estancia inolvidable.</p>
                <hr class="featurette-divider">
           
        </div>
        <div class="row ">
            <div class="col-sm-6 col-md-3">
                <div class="service-item"><br>
                    <i><img src="https://img.icons8.com/color/48/000000/bath.png"/></i>
                    <h3>1 Baño</h3>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="service-item">
                    <i><img src="https://img.icons8.com/color/48/000000/sleeping-in-bed.png"/></i>
                    <h3>1 Habitación</h3>

                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="service-item">
                    <i><img src="https://img.icons8.com/color/48/000000/cooker.png"/></i>
                    <h3>Cocina</h3>
                    <p>Equipada con todos los utensilios </p>

                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="service-item">
                    <i><img src="https://img.icons8.com/color/48/000000/air-conditioner.png"/></i>
                    <h3>Aire Acondicionado</h3>

                </div>
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="card border-primary mb-3" style="max-width: 18rem;" id="c1">
  <div class="card-header"></div>
  <div class="card-body text-primary">
  <a href="{{url('reservas')}}">  <button class="btn btn-danger" name="book">Reservar</button></a><p></p>
    
  </div>
            </div>
    </div>
    </section>
    




@stop