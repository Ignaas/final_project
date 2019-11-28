<?php

namespace Core;

class View
{

    protected $data;

    public function __construct($data = [])
    {
        $this->data = $data;
    }

    /**
     * @return array Reference to $this->data
     */
    public function &getData()
    {
        return $this->data;
    }

    /**
     * Renders array into temlate
     * @param $template_path
     * @return false|string
     * @throws \Exception
     */
    public function render($template_path)
    {

        if (!file_exists($template_path)) {
            throw (new \Exception("Template with filename: " . "$template_path does not exsist!"));
        }

        //Assigns $data variable for template's scope
        $data = $this->data;

        //Starts buffering the output to memory
        ob_start();

        //Loads the view (template)
        require $template_path;

        //Outputs buffered output as string to render
        return ob_get_clean();
    }

}