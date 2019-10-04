<h3> User with <?= $userID ?> </h3>
<p> <?= $this->getContent() ?> </p>
<?= $this->tag->form(['/user/' . $userID, 'id' => 'registerForm', 'onbeforesubmit' => 'return false']) ?>
		<?= $form->label('city') ?>
		<?= $form->render('city') ?>
		
		<?= $form->label('postcode') ?>
		<?= $form->render('postcode') ?>
		
		<?= $form->label('region') ?>
		<?= $form->render('region') ?>
	
		<?= $form->label('street') ?>
		<?= $form->render('street') ?>
	
	
	
	<?= $this->tag->hiddenField(['value' => $userID, 'name' => 'userID']) ?>
	
	
	
		<?= $this->tag->submitButton(['Send']) ?>
<?= $this->tag->endForm() ?>
<p> paragraf </p>
