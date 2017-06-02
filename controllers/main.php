<?php

function la_halle() {
	$actualites = Model::factory('Article')
		->select(array('id', 'slug', 'title', 'time'))
		->order_by_desc('time')
		->limit(3)
		->find_many();
	Flight::render('la-halle', array('actualites' => $actualites), 'main_content');
	Flight::render('_page', array('title' => 'Halle au Frais - Amiens', 'home' => true));
}

function actualites($slug) {
	if ($slug == NULL) $slug = '_all';
	$types_actualites = Model::factory('Type_Article')
		->select(array('slug', 'name'))
		->find_many();
	if ($types_actualites != false) {
		Flight::render('actualites', array('types_actualites' => $types_actualites, 'default_type_slug' => $slug), 'main_content');
		Flight::render('_page', array('title' => 'Actualités - Halle au Frais'));
	} else {
		Flight::notFound();
	}
}

function actualite($slug) {
	$actualite = Model::factory('Article')
		->select(array('title', 'description'))
		->where('slug', $slug)
		->find_one();
	if ($actualite != false) {
		Flight::render('actualite', array('article' => $actualite), 'main_content');
		Flight::render('_page', array('title' => $actualite->title.' - Halle au Frais'));
	} else {
		Flight::notFound();
	}
}

function error404() {
	Flight::render('_404', array(), 'main_content');
	Flight::render('_page', array('title' => 'Page non trouvée - Halle au Frais'));
}

?>