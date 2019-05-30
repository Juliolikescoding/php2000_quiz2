<?php

use Phalcon\Mvc\Controller;

class ColabController extends Controller
{
    public function indexAction(){
        //get the list of items in your cart
		$colabb = Colabby::find();
        
		// send data to the view
		$this->view->colab = $colabb;
    }

    public function submitAction(){
		//POST
		$content = $this->request->get('content');
        // save the new user in the DB
		$colab = new Colabby();
		$colab->ip = $_SERVER['REMOTE_ADDR'];
		$colab->content = $content;
		$colab->save();
		//
		$this->response->redirect('colab');
    }
}
