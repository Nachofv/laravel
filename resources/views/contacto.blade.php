@extends('layout.master')
@section('content')


<section class="page-title bg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1>Envíanos un mensaje</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact form start -->
<section class="contact-form">
    <div class="container">
        <div class="row">
            @if(session()->has('flash'))
            <div class="alert alert-warning alert-dismissible " role="alert">
                <strong>Genial !</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{session()->get('flash')}}
            </div>
            @endif
            <form id="contact-form" method="post" action="{{route('message')}}" role="form">
                {{ csrf_field() }}
                <div class="col-md-6 col-sm-12">
                    <div class="block">
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" placeholder="Tu nombre" required>
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="Email " required>
                        </div>
                        
                        <div class="form-group">
                            <input name="subject" type="text" class="form-control" placeholder="Asunto" required>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="block">
                        <div class="form-group-2">
                            <textarea name="body" class="form-control" rows="4" placeholder="Tu mensaje" required></textarea>
                        </div>
                        <button class="btn btn-outline-warning" type="submit">Enviar Mensaje</button>
                    </div>
                </div>
                <div class="error" id="error">Sorry Msg does not sent</div>
                <div class="success" id="success">Message Sent</div>
            </form>
        </div>
        <div class="contact-box row">
            <div class="col-md-6 col-sm-12">
                <div class="block">
                    <h2>Contáctanos</h2>
                    <ul class="address-block">
                        <li>
                            <i class="ion-ios-location-outline"></i>Lugar de abajo,5 Tías. Lanzarote
                        </li>
                        <li>
                            <i class="ion-ios-email-outline"></i>Email: beatrizvillarlopez@gmail.com
                        </li>
                        <li>
                            <i class="ion-ios-telephone-outline"></i>Móvil: +34 606 986 345
                        </li>
                    </ul>
                    <ul class="social-icons">
                        <li>
                            <a href="{{url('errors.404')}}"><i class="ion-social-googleplus-outline"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/"><i class="ion-social-linkedin-outline"></i></a>
                        </li>
                        <li>
                            <a href="https://www.pinterest.es/"><i class="ion-social-pinterest-outline"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/"><i class="ion-social-twitter-outline"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/"><i class="ion-social-instagram-outline"></i></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/"><i class="ion-social-facebook-outline"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="block">
                    <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3491.0868597534895!2d-13.646847748875485!3d28.95514808220476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc46242c2bf2876f%3A0xf13daa1c364ed753!2sCamino%20Berriel%2C%2035572%20T%C3%ADas%2C%20Las%20Palmas!5e0!3m2!1ses!2ses!4v1593257006686!5m2!1ses!2ses" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop