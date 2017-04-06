<?php

require_once 'config.php';

require_once 'libs/idiorm.php';
require_once 'libs/paris.php';
ORM::configure('sqlite:data/data.sqlite');

require_once 'models/article.php';
require_once 'models/type_article.php';

require_once 'libs/flight/Flight.php';
require_once 'controllers/controller.php';

Flight::route('/', function() {
	Flight::redirect('/articles');
});

Flight::route('*', function() {
	$article = Model::factory('Article')->find_one(4);
	return true;
});
Flight::route('/articles', 'articles');
Flight::route('/article/@name', 'article');

Flight::route('/ajax/articles/reload/@slug', 'ajax_articles_reload');

Flight::map('notFound', 'notFound');

Flight::start();

?>