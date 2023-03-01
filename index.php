<?php

require __DIR__.'./vendor/autoload.php';
use app\Controller\GitController;

$git = new GitController();
echo $git->iniciar();
