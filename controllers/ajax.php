<?php

function load_actualites_list($slug) {
	if ($slug == '_all') {
		$actualites = Model::factory('Article')
			->select(array('Article.title', 'Article.slug'))
			->find_array();
	} else {
		$actualites = Model::factory('Article')
			->select(array('Article.title', 'Article.slug'))
			->join('Type_Article', array('Article.type', '=', 'Type_Article.id'))
			->where('Type_Article.slug', $slug)
			->find_array();
	}
	Flight::json($actualites);
}

?>