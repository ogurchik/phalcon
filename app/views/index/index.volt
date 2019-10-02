<h1> Index </h1>
<table>
{% for user in users %}
		<tr>
			<td>
				{{ user.firstname}}
			</td>
			<td>
				{{ user.email}}
			</td>
			<td>
				{{ link_to("/user/" ~ user.user_id, 'page')}}
			</td>
		</tr>
{% endfor %}
</table>

