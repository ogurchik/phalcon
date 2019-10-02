<h1> Index </h1>
<table>
<?php foreach ($users as $user) { ?>
		<tr>
			<td>
				<?= $user->firstname ?>
			</td>
			<td>
				<?= $user->email ?>
			</td>
			<td>
				<?= $this->tag->linkTo(['/user/' . $user->user_id, 'page']) ?>
			</td>
		</tr>
<?php } ?>
</table>

