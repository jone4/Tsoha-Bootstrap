<?php

class KayttajaController extends BaseController{
  public static function kirjaudu(){
      View::make('yleista/etusivu.html');
  }
public static function kasittele_kirjaudu(){
    $params = $_POST;

    $kayttaja = Kayttaja::tunnistaudu($params['nimi'], $params['password']);
    if(!$kayttaja){
View::make('yleista/etusivu.html', array('error' => 'Väärä käyttäjätunnus tai salasana!', 'nimi' => $params['nimi']));
    }else{
     $_SESSION['kayttaja'] = $kayttaja->id;
Redirect::to('/', array('message' => 'Tervetuloa takaisin ' . $kayttaja->nimi . '!'));
    }
  }
}
