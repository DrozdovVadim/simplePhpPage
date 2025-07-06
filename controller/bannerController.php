<?php
require_once('./models/bannerModel.php');
class BannerController
{
    private $banner_model;
    public function __construct($db)
    {
        $this->banner_model = new BannerModel($db);
    }
    public function index()
    {
        $banners = $this->banner_model->getBanner();
        return $banners;
    }
}