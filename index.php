<?php

require_once 'vendor/autoload.php';

include 'crud/CrudModel.php';

// --------------------------------------------------------------------------------------

$options = [];


$crud = new CrudModel();

$items = $crud->getItems();

if (isset($_GET['product']) && !empty($_GET['product'])) {
  $id = htmlspecialchars(intval($_GET['product'])) - 1;
  $tmp_name = 'item';
}


// --------------------------------------------------------------------------------------

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');

$twig = new Twig_Environment($loader);

$template = $twig->loadTemplate('index.tpl');

echo $template->render(['template' => @$tmp_name,'items' => @$items, 'id' => @$id]);

?>
