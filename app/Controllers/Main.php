<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Adresnimisto;
use App\Models\Okres;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Models\Obce;

class Main extends BaseController
{
    public $okres;
    public $dataOkresu;
    public $dataObce;
 
    public $obce;
    private $data;
     //toto je uplne vsude kde pouizije metodu 
 public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
   {
        $this -> okres = new Okres();
        $dataOkresu = $this-> okres ->where('kraj', 141)->findAll();

        $this-> obce = new Obce();
        $this-> dataObce = $this-> obce->findAll();
        $this-> data = [
            "navbar" => $dataOkresu
        ];
    return parent::initController($request, $response, $logger);
//$this muzeme pouzit vsude v main
   }



    public function index()
    {

        $this->data += [
               
              
               
        ];
        echo view("main_page", $this->data);
    }


    public function okres($kodOkresu,$perPage)
    {

        $adresniMisto = new Adresnimisto();
        $obec = $adresniMisto->select("obec.nazev, Count(*) as pocet")->join("ulice", "ulice.kod=adresni_misto.ulice", "inner")->join("cast_obce", "cast_obce.kod=ulice.cast_obce", "inner")->join("obec", "obec.kod=cast_obce.obec", "inner")->where("obec.okres", $kodOkresu)->groupBy("obec.kod")
        ->orderBy("pocet","desc")->paginate($perPage);
        $pager = $adresniMisto->pager;
 
        $page = $pager->getCurrentPage();


        $this->data += [
            "obec" => $obec,
            "pager" => $pager,
            "perPage" => $perPage,
            "page" => $page,
            "kod" => $kodOkresu
        ];
        echo view("okres", $this->data);
 
    }
  

}
