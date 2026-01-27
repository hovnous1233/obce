<?php

namespace App\Controllers;

use App\Controllers\BaseController;
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

  

}


 /* public function okres()
    {

        $dataOkresu = new Okres();
        $okres = $dataOkresu->where('kraj', 141)->findAll();

        $dataObce = new Obce();
        $obce = $dataObce->findAll();


        $data = [
                "okresyData" => $okres,
               "obce"=> $obce
              
               
        ];
        echo view("okres", $data);
    }

