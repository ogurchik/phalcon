<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
		$users = Users::find();
		$this->view->users = $users;
	}

}

