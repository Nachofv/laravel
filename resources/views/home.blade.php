@extends('layout.master')
@section('content')
<!-- Slider Start -->


<section class="slider">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1 class="animated fadeInUp">Lanzarote no es mi tierra, <br> pero es tierra mía </h1>
                    <p class="animated fadeInUp">José Saramago</br> </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about section">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <div class="block">
                    <div class="section-title">
                        <h2>la casa</h2>
                        <p>Casa Berriel está situada en Tías, Lanzarote, y ofrece jardín con piscina compartida disponible todo el año. El alojamiento dispone de aire acondicionado y se encuentra a 4,4 km de Puerto del Carmen. Se proporciona WiFi gratuita en todas las instalaciones</p>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor</p>
                </div>
            </div><!-- .col-md-7 close -->
            <div class="col-md-5 col-sm-12">
                <div class="block">
                    <img src="img/interior2.jpg" id="i1" alt="Img">
                </div>
            </div><!-- .col-md-5 close -->
        </div>
    </div>
</section>

<section class="feature bg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-6">
                <h2 class="section-subtitle">Un lugar para desconectar</h2>
                <p>Lanzarote tiene algo diferente que va más allá de lo que se pueda encontrar en cualquier destino de sol y playa. Una isla en la que la naturaleza y el arte van de la mano, donde sus gentes sienten y viven el compromiso y orgullo de pertenecer a ella, y la comida sabe a mar y a campo, una isla cuya esencia deja huella</p>
               <!-- <a href="#" class="btn btn-view-works">View Works</a>-->
            </div>
        </div>
    </div>
</section>

<!-- Service Start -->
<section class="service">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2>Nuestros servicios</h2>
                <p>En nuestros apartamentos podrá disfrutar de todas las comodidades para una experiencia inolvidable, que sin duda, no olvidará</p>
            </div>
        </div>
        <div class="row ">
            <div class="col-sm-6 col-md-3">
                <div class="service-item"><br>
                    <i class="ion-plane"></i>
                    <h3>Aeropuerto</h3>
                    <p>10 minutos</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="service-item">
                    <i class="ion-wifi"></i>
                    <h3>Free wifi</h3>

                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="service-item">
                    <i><img src="https://img.icons8.com/ios/60/000000/beach.png" /></i>
                    <h3>Playa</h3>
                    <p> 10 minutos</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="service-item">
                    <img src="https://img.icons8.com/ios/70/000000/weber.png" />
                    <h3>Barbacoa</h3>

                </div>
            </div>
            <div class="col-sm-6 col-md-3" >
                <div class="service-item">
                    <img src="https://img.icons8.com/ios/70/000000/safe.png" />
                    <h3>Caja Fuerte</h3>

                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="service-item">
                    <i><img src="https://img.icons8.com/ios/70/000000/outdoor-swimming-pool.png" /></i>
                    <h3>Piscina al aire libre</h3>

                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="service-item">
                    <i><img src="https://img.icons8.com/ios/60/000000/heating-radiator--v1.png" /></i>
                    <h3>Calefacción</h3>

                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="service-item">
                    <i><img src="https://img.icons8.com/ios/60/000000/treatment-plan.png" /></i>
                    <h3>Zona Desinfectada</h3>

                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="service-item">
                    <i><img src="https://img.icons8.com/ios/50/000000/air-conditioner.png" /></i>
                    <h3>Aire acondicionado</h3>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- Call to action Start -->
<section class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>Ofrecemos experiencias inolvidables en un entorno envidiable</h2>
                    <p>Nos gusta saber los gustos y las preferencias de nuestros clientes, tambíen lo menos positivo para poder dar un mejor servicio a quienes nos visitan </p>
                    <a class="btn btn-main btn-solid-border" href="{{url('contacto')}}">Cuentanos tu historia</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial">
    <div class="container">
        <div class="row">
            <div class="section-title text-center">
                <h2>Experiencias de los clientes</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, <br> there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <ul class="counter-box clearfix">
                        <li>
                            <div class="counter-item">
                                <i class="ion-ios-chatboxes-outline"></i>
                                <h4 class="count" data-count="199">0</h4>
                                <span>Comentarios</span>
                            </div>
                        </li>
                        <li>
                            <div class="counter-item">
                                <i class="ion-ios-glasses-outline"></i>
                                <h4 class="count" data-count="+300">0</h4>
                                <span>Visitas</span>
                            </div>
                        </li>
                        <li>
                            <div class="counter-item">
                                <i class="ion-ios-compose-outline"></i>
                                <h4 class="count" data-count="125">0</h4>
                                <span>Projects Completed</span>
                            </div>
                        </li>
                        <li>
                            <div class="counter-item">
                                <i><svg class="bi bi-emoji-smile" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683z"/>
  <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
</svg></i>
                                <h4 class="count" data-count="756">0</h4>
                                <span>Sonrisas</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-5 col-md-offset-1">
                <div class="testimonial-carousel text-center">
                    <div class="testimonial-slider owl-carousel">
                        <div>
                            <i class="ion-quote"></i>
                            <p>“La decoración de la casa es preciosa, tradicional y con gusto. La ubicación también me pareció cómoda, en medio de todas las excursiones que teníamos planeadas.
                                Nos dejaron un detalle de bienvenida, un gesto muy agradable.”</p>
                            <div class="user">
                                <img src="https://img.icons8.com/color/48/000000/spain.png" />
                                <p><span>Elisa</span> España</p>
                            </div>
                        </div>
                        <div>
                            <i class="ion-quote"></i>
                            <p>"Hermoso alojamiento impecablemente limpio con todas las instalaciones que necesita para sus vacaciones tranquilas. Fantásticos anfitriones gracias Bea y Francis ”</p>
                            <div class="user">
                                <img src="https://img.icons8.com/color/48/000000/great-britain.png" />
                                <p><span>Sean</span> Reino Unido</p>
                            </div>
                        </div>
                        <div>
                            <i class="ion-quote"></i>
                            <p>“la gentillesse de Beatriz & Francis, la beauté du lieu avec cette ambiance de maison/musee. nous avons passé un magnifique séjour. ”</p>
                            <div class="user">
                            <img src="https://img.icons8.com/color/48/000000/france.png" />
                            <p><span>Frederic</span> France</p>
                            </div>
                        </div>
                        <div>
                            <i class="ion-quote"></i>
                            <p>“El apartamento está dentro de una casa típica de Lanzarote muy bonita. Equipado y cómo la ubicación, centrada en la isla y muy cerca de la autovía y del aeropuerto, permite desplazarte con facilidad.Los propietarios , muy amables.”</p>
                            <div class="user">
                                <img src="https://img.icons8.com/color/48/000000/spain.png" />

                                <p><span>Joseba</span> España</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
         
            
        </div>
    </div>
</br></br>
   <hr class="featurette-divider">
    <div id="cont_c9d6dac55d5ca6c81dba45f7cec082a5">
           
    <script type="text/javascript" async src="https://www.tiempo.com/wid_loader/c9d6dac55d5ca6c81dba45f7cec082a5"></script>
 </div>
</section>
@stop