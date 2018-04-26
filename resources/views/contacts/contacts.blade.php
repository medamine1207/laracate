@extends('default',['title'=>'Contact'])

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
			<h2>Get in Touch</h2>
			<p class="text-muted">If you having trouble with this service, please <a href="mailto:medamine1207@gmail.com">ask for help.</a></p>

	<form role="form">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Name" required='required'>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" required='required'>
					</div>
					
					<div class="form-group">
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required='required'>
					</div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
                    </div>
            
        <button type="button" id="submit" name="submit" class="btn btn-primary btn-block pull-right">Submit Form  &raquo;</button>
        </form>
		</div>
	</div>
</div>
@endsection