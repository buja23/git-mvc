<?php

namespace app\Controller;

use app\Model\GitModel;

class GitController
{
    public function iniciar()
    {
        $gitModel = new GitModel();
        return $gitModel->dados();
    }
}