<?php

class Kayttaja extends BaseModel{
 public $id, $nimi, $password;  

public function __construct($attribuutit){
    parent::__construct($attribuutit);
}

public static function etsi($nimi, $password){
    $jono = DB::connection()-> prepare ('SELECT * FROM Kayttaja WHERE nimi = :id AND password = :password LIMIT 1');
    $jono-> execute (array('nimi'=> $nimi, 'password' => $password));
    $rivi = $jono-> fetch();
    
    if($rivi){
        $kayttaja = new Kayttaja(array(
             'nimi'=> $rivi['nimi'],
    'password'=> $rivi['password']));
    return $kayttaja;
        
}
return null;
}

public static function tunnistaudu($nimi, $password){
    $jono = DB::connection()->prepare('SELECT * FROM Kayttaja WHERE nimi = :nimi AND password = :password LIMIT 1');
$jono->execute(array('nimi' => $nimi, 'password' => $password));
$rivi = $jono->fetch();
if($rivi){
 // Käyttäjä löytyi, palautetaan löytynyt käyttäjä oliona
$kayttaja = new Kayttaja(array(
             'nimi'=> $rivi['nimi'],
    'password'=> $rivi['password']));
    return $kayttaja;
    
}else{
  // Käyttäjää ei löytynyt, palautetaan null

 return null;   
}
}

    }

