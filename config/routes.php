<?php

  $routes->get('/', function() {
    HelloWorldController::index();
  });

  $routes->get('/hiekkalaatikko', function() {
    HelloWorldController::sandbox();
  });

  $routes-> get("/people", function(){
  HelloWorldController::people_list();
  });
  
  $routes-> get ("/people/aatumikkonen", function(){
      HelloWorldController::person_show();
  });
  
    $routes-> get ("/muokkaa", function(){
      HelloWorldController::muokkaa_profiilitietojani();
  });