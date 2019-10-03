<h3> User with {{ userID }} </h3>
<p> {{ content() }} </p>
{{ form ('/user/' . userID, 'id': 'registerForm', 'onbeforesubmit': 'return false') }}
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
	
	
	
	{{ hidden_field('value' : userID, 'name' : 'userID') }}
	
	
	
	<div>
		{{ submit_button('Send')}}
	</div>
</form>
