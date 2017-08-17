<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Ystavanetsija extends BaseModel{
 public $id, $kayttaja_id, $nimi, $julkaistu, $status, $kuvaus;  

public function __construct($attribuutit){
    parent::__construct($attribuutit);
}
public static function kaikki(){
    $jono = DB::connection()-> prepare('SELECT * FROM Ystavanetsija');
    $jono-> execute();
    $rivit = $jono->fetchAll();
    $ystavanetsijat=array();
    
    foreach ($rivit as $rivi){
        $ystavanetsijat[] = new Ystavanetsija (array(
                'id'=> $rivi['id'],
                'kayttaja_id'=> $rivi['kayttaja_id'],
                    'nimi'=> $rivi['nimi'],
                'julkaistu'=> $rivi['julkaistu'],
                'status'=> $rivi['status'],
                'kuvaus'=> $rivi['kuvaus']
                
                ));
    }
 return $ystavanetsijat;   
}

public static function etsi($id){
    $jono = DB::connection()-> prepare ('SELECT * FROM Ystavanetsija WHERE id = :id LIMIT 1');
    $jono-> execute (array('id'=> $id));
    $rivi = $jono-> fetch();
    
    if($rivi){
        $ystavanetsija = new Ystavanetsija(array(
             'id'=> $rivi['id'],
                'kayttaja_id'=> $rivi['kayttaja_id'],
                    'nimi'=> $rivi['nimi'],
                'julkaistu'=> $rivi['julkaistu'],
                'status'=> $rivi['status'],
                'kuvaus'=> $rivi['kuvaus']   
                ));
        return $ystavanetsija;
}
return null;
}


    }