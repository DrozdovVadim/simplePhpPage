<?php
require_once("./models/NewsModel.php");

class CurrentNewController
{
    private $current_new;

    public function __construct($db)
    {
        $this->current_new = new NewsModel($db);

    }

    public function index($id)
    {
        $new = $this->current_new->getItem($id); 
        return  $new;
    }
    
}