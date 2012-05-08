<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_ApplicationBlog {

	public function action_index(){
		
		$hello = 'hello xomano!!!';

		$content = View::factory('site/home/index')
				->bind('hello', $hello);


		$this->template->content = $content;
	}

} // End Welcome
