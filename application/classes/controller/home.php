<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_ApplicationBlog {

	public function action_index(){	

		$posts = ORM::factory('post');

		$count_all = $posts->count_all();

		/* Pagination */
		$pagination = Pagination::factory(array(
			'current_page'      => array('source' => 'query_string', 'key' => 'page'),
			'total_items'       => $count_all,
			'items_per_page'    => 4,
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

		$content = View::factory('site/home/page')
				->bind('posts', $posts)
				->bind('pagination_links', $pagination_links);

		$this->template->content = $content;
	}

} 

