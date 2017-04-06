<?php

function articles() {
	$articles = Model::factory('Article')->find_many();
	$types_articles = Model::factory('Type_Article')->find_many();
	if ($articles != false) {
		Flight::render('articles', array('articles' => $articles, 'types_articles' => $types_articles), 'body_content');
		Flight::render('_page', array('title' => 'Articles'));
	} else {
		not_found();
	}
}

function article($slug) {
	$article = Model::factory('Article')->where('slug', $slug)->find_one();
	if ($article != false) {
		Flight::render('article', array('article' => $article), 'body_content');
		Flight::render('_page', array('title' => 'Article - '.$article->title));
	} else {
		not_found();
	}
}

function ajax_articles_reload($slug) {
	$articles = Model::factory('Article')->join('Type_Article', array('Article.type', '=', 'Type_Article.id'))->where('Type_Article.slug', $slug)->find_many();
	var_dump($articles);
	var_dump(json_encode($articles));
	// echo json_encode($articles);
}

function not_found() {
	Flight::render('404', array(), 'body_content');
	Flight::render('_page', array('title' => 'Page non trouvée'));
}

?>