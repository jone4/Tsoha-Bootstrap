<?php

  $routes->get('/', function() {
    HelloWorldController::index();
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
  
  
    $routes-> get ("/muokkaa", function(){
      HelloWorldController::muokkaa_profiilitietojani();
  });