<?php
require_once("./models/currentNewsModel.php");

class CurrentNewController{
    private $current_new;
    public function __construct($db){
        $this->current_new = new CurrentNewsModel($db);
        $this->id = isset($_GET["id"]) ? (int)$_GET["id"] :1;
    }
    public function index($id){
        $new = $this->current_new->getCurrentNew($id); 
        return  $new;
    }
}