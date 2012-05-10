<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Postagens extends Controller_ApplicationBlog {

	public function action_index(){	



		$content = View::factory('site/postagens/page');

		$this->template->content = $content;
	}

	public function action_novo(){

		$action = $this->request->action();

		$post = array();

		$content = View::factory('site/postagens/novo')
				->bind('action', $action)
				->bind('post', $post);

		$this->template->content = $content;

	}

} 
