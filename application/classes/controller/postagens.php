<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Postagens extends Controller_ApplicationBlog {

	protected $_redirect = "../postagens";

	public function action_index(){	

		$posts = ORM::factory('post');

		$count_all = $posts->count_all();

		/* Pagination */
		$pagination = Pagination::factory(array(
			'current_page'      => array('source' => 'query_string', 'key' => 'page'),
			'total_items'       => $count_all,
			'items_per_page'    => 3,
			'view'              => 'pagination/basic', 
			'auto_hide'         => TRUE,
			'first_page_in_url' => TRUE,
			));
		
		$pagination_links = $pagination->render();

		$posts = $posts
			->limit($pagination->items_per_page)
			->offset($pagination->offset)
			->order_by('id', 'DESC')
			->find_all();

		$content = View::factory('site/postagens/page')
				->bind('posts', $posts)
				->bind('pagination_links', $pagination_links);

		$this->template->content = $content;
	}

	public function action_novo(){

		# pega a action que está sendo utilizada
		$action = $this->request->action();

		# apenas para inicializar
		$post = array();

		$content = View::factory('site/postagens/form')
				->bind('action', $action)
				->bind('post', $post);

		$this->template->content = $content;

		if ($_POST && isset($_POST['salvar'])) {

			$time_now = new DateTime();

			$post = ORM::factory('post');
			
			$post->titulo =  (string) Arr::get($_POST, 'titulo');
			$post->chamada = (string) Arr::get($_POST, 'chamada');
			$post->texto = (string) Arr::get($_POST, 'texto');
			$post->data_registro = $time_now->format('Y-m-d H:i:s');

			$post->save();


			$redirect = URL::site($this->_redirect);
			$this->request->redirect($redirect);
		}
		if($_POST && isset($_POST['cancelar'])){

			$redirect = URL::site($this->_redirect);
			$this->request->redirect($redirect);
		}

	}

	public function action_editar(){

		# pega a action que está sendo utilizada
		$action = $this->request->action();

		# get the id to where condition
		$id = (string) Arr::get($_GET, 'id');

		$posts = ORM::factory('post');

		$post = $posts
				->where('id', '=', $id)
				->find();

		$content = View::factory('site/postagens/form')
				->bind('action', $action)
				->bind('post', $post);

		$this->template->content = $content;

		if ($_POST && isset($_POST['salvar'])) {

			$time_now = new DateTime();

			$post = ORM::factory('post', $id);
			
			$post->titulo =  (string) Arr::get($_POST, 'titulo');
			$post->chamada = (string) Arr::get($_POST, 'chamada');
			$post->texto = (string) Arr::get($_POST, 'texto');

			$post->update();

			$redirect = URL::site($this->_redirect);
			$this->request->redirect($redirect);
		}


		if($_POST && isset($_POST['cancelar'])){

			$redirect = URL::site($this->_redirect);
			$this->request->redirect($redirect);
		}
	}

	public function action_deletar(){

		$id = (string) Arr::get($_GET, 'id');

		$post = ORM::factory('post', $id);
		$post->delete();
		
		$redirect = URL::site($this->_redirect);
		$this->request->redirect($redirect);
	}

} 
