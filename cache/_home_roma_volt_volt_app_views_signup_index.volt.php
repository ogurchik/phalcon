
<?= $this->getContent() ?>

<div class="page-header">
    <h2>Register for INVO</h2>
</div>

<?= $this->tag->form(['signup', 'id' => 'registerForm', 'onbeforesubmit' => 'return false']) ?>

    <fieldset>

        <div class="control-group">
            <?= $form->label('firstname', ['class' => 'control-label']) ?>
            <div class="controls">
                <?= $form->render('firstname', ['class' => 'form-control']) ?>
                <p class="help-block">(required)</p>
                <div class="alert alert-warning" id="name_alert">
                    <strong>Warning!</strong> Please enter your full name
                </div>
            </div>
        </div>

        <div class="control-group">
            <?= $form->label('lastname', ['class' => 'control-label']) ?>
            <div class="controls">
                <?= $form->render('lastname', ['class' => 'form-control']) ?>
                <p class="help-block">(required)</p>
                <div class="alert alert-warning" id="username_alert">
                    <strong>Warning!</strong> Please enter your desired user name
                </div>
            </div>
        </div>

        <div class="control-group">
            <?= $form->label('email', ['class' => 'control-label']) ?>
            <div class="controls">
                <?= $form->render('email', ['class' => 'form-control']) ?>
                <p class="help-block">(required)</p>
                <div class="alert alert-warning" id="email_alert">
                    <strong>Warning!</strong> Please enter your email
                </div>
            </div>
        </div>

        <div class="control-group">
            <?= $form->label('password', ['class' => 'control-label']) ?>
            <div class="controls">
                <?= $form->render('password', ['class' => 'form-control']) ?>
                <p class="help-block">(minimum 8 characters)</p>
                <div class="alert alert-warning" id="password_alert">
                    <strong>Warning!</strong> Please provide a valid password
                </div>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="repeatPassword">Repeat Password</label>
            <div class="controls">
                <?= $this->tag->passwordField(['repeatPassword', 'class' => 'form-control']) ?>
                <div class="alert" id="repeatPassword_alert">
                    <strong>Warning!</strong> The password does not match
                </div>
            </div>
        </div>


	<div>
		<?= $form->label('type_user') ?>
		<?= $form->render('type_user') ?>
	</div>

        <div class="form-actions">
            <?= $this->tag->submitButton(['Register', 'class' => 'btn btn-primary', 'onclick' => 'return SignUp.validate();']) ?>
            <p class="help-block">By signing up, you accept terms of use and privacy policy.</p>
        </div>

    </fieldset>
</form>
