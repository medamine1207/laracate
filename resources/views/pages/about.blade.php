@extends('default', ['title'=>'about'])

@section('content')
<div class="container">
<h1>What is Laracarte?</h1>
<p>{{config('app.name')}} is a clone app of <a target="_blank" href="https://laramap.com">Laramap.com.</a></p>
	<div class="row">
		<div class="col-md-6">
		<p class="alert alert-warning"> <strong><i class="fa fa-exclamation-triangle"></i> This app has been built by @etsmo for learning purposes.</strong></p>
		</div>

	</div>
	<p>Feel free to help to improve the source <a href="https://github.com/medamine1207/laracate">code.</a></p>
	<hr>
	<h2>What is Laramap?</h2>
	<p>Laramap is the website by which {{config('app.name')}} was inspired :).</p>
	<p>More info <a href="https://laravel.com"></a>here.</p>

	<h2>Which tools and services are used in {{config('app.name')}}?</h2>
	<p>Basically it's built on Laravel & Bootstrap. But there's a bunch of services used for email and other sections.</p>
	<ul>
		<li>laravel</li>
		<li>Bootstrap</li>
		<li>Amazon S3</li>
		<li>Mandrill</li>
		<li>Google Maps</li>
		<li>Gravatar</li>
		<li>Heroku</li>
		<li>Antony Martin's Geolocation Package</li>
		<li>Michel Fortin's Markdown Parser Package</li>
	</ul>
</div>
@stop