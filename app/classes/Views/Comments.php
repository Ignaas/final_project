<?php

namespace App\Views;

use App\App;

class Comments extends \Core\View
{

    public function __construct($data = [])
    {
        parent::__construct($data);
    }

    public function render($template_path = ROOT . '/app/templates/comments.tpl.php')
    {
        return parent::render($template_path);
    }

}
