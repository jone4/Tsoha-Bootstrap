<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class YstavanetsijaController extends BaseController{
   
    public static function index(){
        $ystavanetsijat = Ystavanetsija::kaikki();
        View::make('ystavanetsijat/listaussivu.html', array('ystavanetsijat'=> $ystavanetsijat));
    }

    
    public static function show($id){
       $ystavanetsija = Ystavanetsija::etsi($id);
      View::make('ystavanetsijat/esittelysivu.html', array('ystavanetsija'=> $ystavanetsija)); 
    }
    }
    
   