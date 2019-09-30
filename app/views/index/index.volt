<table>
{% for user in users %}
		<tr>
			<td>
				{{ user.firstname}}
			</td>
			<td>
				{{ user.email}}
			</td>
		</tr>
{% endfor %}
</table>

