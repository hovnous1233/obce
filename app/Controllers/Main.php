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
    var $okres;
   public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
   {
    
        $dataOkresu = new Okres();
        $this -> okres = $dataOkresu->where('kraj', 141)->findAll();

    return parent::initController($request, $response, $logger);

   }



    public function index()
    {
        $dataOkresu = new Okres();
        $okres = $dataOkresu->where('kraj', 141)->findAll();


        $data = [
               "okresyData"=> $okres,
              
               
        ];
        echo view("main_page", $data);
    }

    public function okres()
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
}

}
