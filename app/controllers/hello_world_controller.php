<?php

  class HelloWorldController extends BaseController{

    public static function index(){
      // make-metodi renderöi app/views-kansiossa sijaitsevia tiedostoja
   	  echo "Tämä on etusivu";
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
    
    }
