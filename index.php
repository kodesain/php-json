<?php

include('json.php');

$menu = new json('menu.json');

//$_id = microtime(true);

$menu->save(array('_id' => 1000, 'name' => 'HOME', 'alias' => 'home', 'url' => './home'));
$menu->save(array('_id' => 2000, 'name' => 'ABOUT', 'alias' => 'home', 'url' => './home'));
$menu->save(array('_id' => 3000, 'name' => 'SERVICE', 'alias' => 'home', 'url' => './home'));
$menu->save(array('_id' => 4000, 'name' => 'PRODUCT', 'alias' => 'home', 'url' => './home'));
$menu->save(array('_id' => 5000, 'name' => 'CONTACT', 'alias' => 'home', 'url' => './home'));

$param = array(
    'select' => array('_id', 'name', 'alias'),
    'where' => array('alias' => 'home'),
    'order' => array('name' => SORT_DESC)
);

print_r($menu->show($param));

$menu->drop(array('name' => 'HOME'));

print_r($menu->show());

function isset_var(&$var, $val = '') {
    if (gettype($var) === 'boolean') {
        return isset($var) ? $var : $val;
    } else if (gettype($var) === 'array') {
        return isset($var) ? $var : $val;
    } else {
        return isset($var) ? trim($var) : $val;
    }
}

?>
