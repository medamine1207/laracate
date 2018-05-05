@extends('default',['title'=>'Contact'])

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
			<h2>Get in Touch</h2>
			<p class="text-muted">If you having trouble with this service, please <a href="mailto:{{config('laracarte.email_admin')}}">ask for help.</a></p>

			<form action="{{route('contact_path')}}" method="POST">
				{{ csrf_field() }}

				<div class="form-group {{$errors->has('name')? 'has-error':''}}">
					<label for="name" class="control-label">Name</label>
					<input type="text" name="name" id="name" class="form-control" required="required" value="{{old('name')}}">
					{!!$errors->first('name','<span class="help-block">:message</span>')!!}
				</div>
				<div class="form-group {{$errors->has('email')? 'has-error':''}}">
					<label for="email" class="control-label">email</label>
					<input type="text" name="email" id="email" class="form-control" required="required" value="{{old('email')}}">
					{!!$errors->first('email','<span class="help-block">:message</span>')!!}
				</div>
				<div class="form-group {{$errors->has('msg')? 'has-error':''}}">
					<label for="msg" class="control-label sr-only">message</label>
					<textarea class="form-control" rows="10" cols="10" required="required" name="msg" id="msg">{!!old('msg')!!}</textarea>
					{!!$errors->first('msg','<span class="help-block">:message</span>')!!}
				</div>

				<div class="form-group">
					<button class="btn btn-primary btn-block" formnovalidate="">submit Enquery &raquo;</button>
				</div>
				
			</form>
		</div>
	</div>
</div>
@endsection