<?php

use Phalcon\Mvc\Controller;

class HomeController extends Controller
{
	public function indexAction()
	{
		// load configs
		$configs = $this->di->get('config');

		// send data to the view
		$this->view->username = $username;
		$this->view->appname = $configs->app->name;
		$this->view->fcolor = $configs->interface->fcolor;
		$this->view->bcolor = $configs->interface->bcolor;
	}
}