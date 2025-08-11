<?php
require_once('./models/NewsModel.php');

class BannerController
{
    private $banner_model;

    public function __construct($db)
    {
        $this->banner_model = new NewsModel($db);
    }

    public function index()
    {
        $banners = $this->banner_model->getBanners();
        return $banners;
    }

}