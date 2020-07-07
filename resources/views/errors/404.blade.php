@extends('layout.master')
@section('content')


	<section class="page-404">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="index.html">
						<img src="images/log.png" id="logo" alt="site logo" />
					</a>
					<h1>404</h1>
					<h2>Page Not Found</h2>
					<a href="{{url('home')}}" class="btn btn-main"><i class="tf-ion-android-arrow-back"></i> Go Home</a>
					<p class="copyright-text">© 2020 <a href="https://github.com/Nachofv" target="_blank">nachoFvillar</a> All Rights Reserved
					</p>
				</div>
			</div>
		</div>
	</section>
@stop