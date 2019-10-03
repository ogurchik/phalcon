<?php

class UserController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		$form = new AddressForm();
		$userID = $this->dispatcher->getParam('id');
		$this->view->userID = $userID;
		if ($this->request->isPost()) {
			$postReq = $this->request->getPost();
			if ($form->isValid($postReq) == false) {
			    $this->flash->error("ahtung!");
				return $this->dispatcher;	
			}
			
		}
		$this->view->form = $form;

    }

	public function showAction()
	{
	}



}

