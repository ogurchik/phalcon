<?php

class UserController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		$form = new AddressForm();
		$user_id = $this->dispatcher->getParam('id');
		$this->view->id = $id;
		if ($this->request->isPost()) {
			$city = $this->request->getPost('city', ['string', 'striptags']);
			$poststamp = $this->request->getPost('poststamp');
			$region = $this->request->getPost('region');
			$street = $this->request->getPost('street');

			$address = new Address();
			$address->city = $city;
			$address->poststamp = $poststamp;
			$address->region = $region;
			$address->street = $street;

			if ($address->save() == false) {
				foreach ($user->getMessages() as $message) {
					$this->flash->error(
						(string) $message
					);
				}
			} else {
				$this->flash->success(
					'Address is added'
				);
				return $this->dispatcher->forward(
					[
						'controller' => 'user',
						'action' => 'show',
					]
				);
			}
		}
		$this->view->form = $form;

    }

	public function showAction()
	{
		if ($this->request->isPost()) {
			return "request is post";
		}
	}

}

