<?php

class SignupController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		 $form = new RegisterForm;

        if ($this->request->isPost()) {
            $firstname = $this->request->getPost('firstname', ['string', 'striptags']);
            $lastname = $this->request->getPost('lastname', 'alphanum');
            $email = $this->request->getPost('email', 'email');
            $password = $this->request->getPost('password');
            $repeatPassword = $this->request->getPost('repeatPassword');
			$type_user = $this->request->getPost('type_user');

            if ($password != $repeatPassword) {
                $this->flash->error('Passwords are different');

                return false;
            }

            $user = new Users();

            $user->firstname = $firstname;
            $user->password = sha1($password);
            $user->lastname = $lastname;
            $user->email = $email;
			$yser->type_user = $type_user;
            $user->created_at = new Phalcon\Db\RawValue('now()');

            if ($user->save() == false) {
                foreach ($user->getMessages() as $message) {
                    $this->flash->error(
                        (string) $message
                    );
                }
            } else {
                $this->tag->setDefault('email', '');
                $this->tag->setDefault('password', '');

                $this->flash->success(
                    'Thanks for sign-up, please log-in to start generating invoices'
                );

                return $this->dispatcher->forward(
                    [
                        "controller" => "session",
                        "action"     => "index",
                    ]
                );
            }
        }

        $this->view->form = $form;
    }

}

