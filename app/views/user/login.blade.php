@extends("layout")
@section("content")


{{ Form::open(array( "route" => "user/login", "autocomplete" => "off" )) }}
	<div class="login-form">  {{ Form::label("username", "Username") }}
		<div>{{ Form::text("username", Input::old("username"), array(
			"placeholder" => "john.smith"
			)) }}
		</div>
		<div class="clearfix"></div>
	</div>
	
	<div class="login-form">{{ Form::label("password", "Password") }}
		<div>
			{{ Form::password("password", array("placeholder" => "●●●●●●●●●●")) }}
		</div>
		<div class="clearfix"></div>
	</div>
	
	<div class="login-form">
		<label>&nbsp;</label>
		<div>
			{{ Form::submit("login",array("class" =>"btn btn-primary")) }}
		</div>
	</div>

	{{ Form::close() }}


@stop
@section("footer")
@parent
<script src="//polyfill.io"></script>
@stop