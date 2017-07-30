<?php

  class HelloWorldController extends BaseController{

    public static function index(){
      // make-metodi renderöi app/views-kansiossa sijaitsevia tiedostoja
   	  View::make("suunnitelmat/etusivu.html");
    }

    public static function sandbox(){
      // Testaa koodiasi täällä
      View::make("helloworld.html");
    }
 
 public static function people_list(){
     View::make("suunnitelmat/listaussivu.html");
 }
   
public static function person_show(){
    View::make ("suunnitelmat/esittelysivu.html");
}
public static function muokkaa_profiilitietojani(){
    View::make ("suunnitelmat/profiilitietojenimuokkaus.html");
}
   
    
    }
