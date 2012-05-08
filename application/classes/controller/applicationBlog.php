<?php defined('SYSPATH') or die('No direct script access');

abstract class Controller_ApplicationBlog extends Controller_Template{

	public $template = 'layouts/template_blog';
	
	public function before(){
		
		parent::before();
		View::set_global('site_name', 'Blog com Kohana 3.2');
		View::set_global('description', 'Exemplo de blog usando framework kohana');

		$this->template->content = '';
		$this->template->styles = array(
								'style'
								);
		$this->template->scripts = array(
								'general'
								);	

		
	}

}
