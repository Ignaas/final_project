<?php

namespace App\Views;

use App\App;

class Hero extends \Core\View
{

    public function render($template_path = ROOT . '/app/templates/hero.tpl.php')
    {
        return parent::render($template_path);
    }

}
