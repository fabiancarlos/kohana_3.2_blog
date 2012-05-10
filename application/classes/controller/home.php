<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_ApplicationBlog {

	public function action_index(){		

		$content = View::factory('site/home/page');


		$this->template->content = $content;
	}

} 

