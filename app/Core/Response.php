<?php

class Response{

    private $page = null;
    private $view = null;
    private $title = null;
    private $error = null;
     

    public function __construct($page, $title, $view, $error){
        $this->page = $page;
        $this->title = $title;
        $this->view = $view;
        $this->error = $error;

        $view = VIEWS.$page.DIRECTORY_SEPARATOR.$view;
        include(VIEWS.'Base.php');
    }
}