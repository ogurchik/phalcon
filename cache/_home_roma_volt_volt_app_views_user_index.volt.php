<h3> User with <?= $userID ?> </h3>
<p> Paragraf </p>
<?= $this->tag->form(['/user', 'id' => 'registerForm', 'onbeforesubmit' => 'return false']) ?>
	<div>
		<?= $form->label('city') ?>
		<?= $form->render('city') ?>
	</div>	
		
	<div>
		<?= $form->label('postcode') ?>
		<?= $form->render('postcode') ?>
	</div>
		
	<div>
		<?= $form->label('region') ?>
		<?= $form->render('region') ?>
	</div>
	
	<div>	
		<?= $form->label('street') ?>
		<?= $form->render('street') ?>
	</div>
	
	
	
	<?= $this->tag->hiddenField(['value' => $userID, 'name' => 'userID']) ?>
	
	
	
	<div>
		<?= $this->tag->submitButton(['Send']) ?>
	</div>
</form>
