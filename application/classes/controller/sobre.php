<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Sobre extends Controller_ApplicationBlog {

	public function action_index(){	

		$content = View::factory('site/sobre/page');


		$this->template->content = $content;
	}

} 

