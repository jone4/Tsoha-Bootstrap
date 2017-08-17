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
  
    public static function muokkaa($id){
    $ystavanetsija = Ystavanetsija::etsi($id);
    View::make('ystavanetsijat/profiilitietojenimuokkaus.html', array('attributes' => $ystavanetsija));
  }
     public static function paivita($id){
    $params = $_POST;

    $attributes = array(
      'id' => $id,
      'nimi' => $params['nimi'],
      'julkaistu' => $params['julkaistu'],
      'status' => $params['status'],
      'kuvaus' => $params['kuvaus']
    );
    
    $ystavanetsija = new Ystavanetsija($attributes);
    $errors = $ystavanetsija->errors();

    if(count($errors) > 0){
      View::make('ystavanetsijat/profiilitietojenimuokkaus.html', array('errors' => $errors, 'attributes' => $attributes));
    }else{
      $ystavanetsija->paivita();

      Redirect::to('/people/' . $game->id, array('message' => 'Ystävänetsijää on muokattu onnistuneesti!'));
    }
  }
    
  public static function tuhoa($id){
    $ystavanetsija = new Ystavanetsija(array('id' => $id));
    $ystavanetsija->tuhoa();

    Redirect::to('/people', array('message' => 'Ystavanetsija on poistettu onnistuneesti!'));
  }
  
  
     }
    
   