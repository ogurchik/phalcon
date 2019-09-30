<table>
<?php foreach ($users as $user) { ?>
		<tr>
			<td>
				<?= $user->firstname ?>
			</td>
			<td>
				<?= $user->email ?>
			</td>
		</tr>
<?php } ?>
</table>

