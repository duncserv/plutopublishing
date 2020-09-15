<?php
    require_once 'TheNounProject.class.php';
    $key  = '5e216aa2f7404c12b88792f549a054cb';
    $secret = 'ba908c8220b84aceaf7e8510917e0e0e';
    $theNounProject = new TheNounProject($key, $secret);
    $icons = $theNounProject->getIconsByTerm(
        'happy',
        array('limit' => 10)
    );
    print_r($icons);
    exit(0);
	?>