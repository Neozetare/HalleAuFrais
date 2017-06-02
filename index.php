<?php

require_once 'config.php';

require_once 'libs/idiorm.php';
require_once 'libs/paris.php';
ORM::configure('sqlite:data/data.sqlite');

require_once 'models/article.php';
require_once 'models/type_article.php';

require_once 'libs/flight/Flight.php';
require_once 'controllers/main.php';
require_once 'controllers/ajax.php';

Flight::route('/', 'la_halle');
Flight::route('/actualites(/@slug)', 'actualites');
Flight::route('/actualite/@slug', 'actualite');

Flight::route('/ajax/actualites/load_actualites_list/@slug', 'load_actualites_list');

Flight::map('notFound', 'error404');

Flight::start();

?>