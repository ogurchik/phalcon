<h3> User with {{ user_id }} </h3>
<p> Paragraf </p>
{{ form ('/user', 'id': 'registerForm', 'onbeforesubmit': 'return false') }}
	<div>
		{{ form.label('city') }}
		{{ form.render('city') }}
	</div>	
		
	<div>
		{{ form.label('postcode') }}
		{{ form.render('postcode') }}
	</div>
		
	<div>
		{{ form.label('region') }}
		{{ form.render('region') }}
	</div>
	
	<div>	
		{{ form.label('street') }}
		{{ form.render('street') }}
	</div>
	<div>
		{{ submit_button('Send')}}
	</div>
</form>
