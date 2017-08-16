<?php

  //$routes->get('/', function() {
    //HelloWorldController::index();
  //});

$routes-> get('/', function(){
    KayttajaController::kirjaudu();
});

$routes-> post('/', function(){
    KayttajaController::kasittele_kirjaudu();
});

  $routes->get('/hiekkalaatikko', function() {
    HelloWorldController::sandbox();
  });

  //$routes-> get("/people", function(){
  //HelloWorldController::people_list();
  //});
  
   $routes-> get("/people",function(){
  YstavanetsijaController::index();
  });
  
  $routes-> get ("/people/aatumikkonen", function(){
      HelloWorldController::person_show();
  });
  
  $routes-> get ("/people/:id", function($id){
      YstavanetsijaController::show($id);
  });
  
  
    //$routes-> get ("/muokkaa", function(){
      //HelloWorldController::muokkaa_profiilitietojani();
  //});
  
   $routes-> get ("/muokkaa/:id", function($id){
       ProfiilitietojeniMuokkausController::show($id);
  });