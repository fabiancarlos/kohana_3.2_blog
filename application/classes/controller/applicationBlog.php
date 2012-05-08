<?php defined('SYSPATH') or die('No direct script access');

abstract class Controller_ApplicationBlog extends Controller_Template{

	public $template = 'site/template_blog';
	
	public function before(){

		$icon = URL::base() . 'media/images/favicon_blog.png';
		
		parent::before();
		View::set_global('site_name', 'Blog com Kohana 3.2');
		View::set_global('description', 'Exemplo de blog usando framework kohana');
		View::set_global('X_UA_Compatible', 'IE=edge,chrome=1');
		View::set_global('viewport', 'width=device-width,initial-scale=1');
		View::set_global('author', 'Fabian Carlos');
		View::set_global('reply_to', 'fabian.pow@gmail.com');
		View::set_global('shortcut_icon', $icon);

		$this->template->content = '';
		$this->template->styles = array(
								'style'
								);
		$this->template->scripts = array(
								'general'
								);	

		
	}

}
