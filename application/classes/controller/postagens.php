<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Postagens extends Controller_ApplicationBlog {

	public function action_index(){	

		$content = View::factory('site/postagens/page');


		$this->template->content = $content;
	}

} 
