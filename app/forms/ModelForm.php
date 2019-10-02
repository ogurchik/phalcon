<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Password;
use Phalcon\Forms\Element\Select;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Email;

class ModelForm extends Form
{
    public function initialize($entity = null, $options = null)
    {
        // Name
        $firstname = new Text('firstname');
        $firstname->setLabel('Your first name');
        $firstname->setFilters(['striptags', 'string']);
        $firstname->addValidators(
            [
                new PresenceOf(
                    [
                        'message' => 'First name is required',
                    ]
                ),
            ]
        );
        $this->add($firstname);

        // Name
        $lastname = new Text('lastname');
        $lastname->setLabel('Last name');
        $lastname->setFilters(['alpha']);
        $lastname->addValidators(
            [
                new PresenceOf(
                    [
                        'message' => 'Please enter your desired last name',
                    ]
                ),
            ]
        );
        $this->add($lastname);

        // Email
        $email = new Text('email');
        $email->setLabel('E-Mail');
        $email->setFilters('email');
        $email->addValidators(
            [
                new PresenceOf(
                    [
                        'message' => 'E-mail is required',
                    ]
                ),
                new Email(
                    [
                        'message' => 'E-mail is not valid',
                    ]
                ),
            ]
        );
        $this->add($email);

		$type_user = new  Select(
			'type_user',
			[
				'admin' => 'admin',
				'normal' => 'normal',
			]
		);
		$type_user->setLabel('Type');
		$this->add($type_user);

        // Password
        $password = new Password('password');
        $password->setLabel('Password');
        $password->addValidators(
            [
                new PresenceOf(
                    [
                        'message' => 'Password is required',
                    ]
                ),
            ]
        );
        $this->add($password);

        // Confirm Password
        $repeatPassword = new Password('repeatPassword');
        $repeatPassword->setLabel('Repeat Password');
        $repeatPassword->addValidators(
            [
                new PresenceOf(
                    [
                        'message' => 'Confirmation password is required',
                    ]
                ),
            ]
        );
        $this->add($repeatPassword);
    }
}
