<?php

class Response{

    private $page = null;
    private $view = null;
    private $title = null;

    public function __construct($page, $title, $view){
        $this->page = $page;
        $this->title = $title;
        $this->view = $view;

        $view = VIEWS.$page.DIRECTORY_SEPARATOR.$view;
        include(VIEWS.'Base.php');
    }
}