<?php

namespace App\Controllers;

use App\Models\Obce;
use App\Models\Okres;

class Main extends BaseController
{


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
