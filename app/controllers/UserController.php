<?php

class UserController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    }
	public function showAction()
	{
		$id = $this->request->get('id');
		return $id;
	}

}

