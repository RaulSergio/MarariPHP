<?php
namespace Marari\model;
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 29/07/2017
 * Time: 16:24
 */

class TipoDespesa
{
    
    private $idTipoDespesa;   
    private $descricao;
    
    public function __construct($idTipoDespesa = 0,$descricao= "" ){
        $this->idTipoDespesa = $idTipoDespesa;
        $this->descricao = $descricao;

    }

    public static function construct($array){
        $obj = new TipoDespesa();
        $obj->setIdTipoDespesa( $array['idTipoDespesa']);
        $obj->setDescricao( $array['descricao']);
        return $obj;

    }

    public function getIdTipoDespesa(){
        return $this->idTipoDespesa;
    }

    public function setIdTipoDespesa($idTipoDespesa){
        $this->idTipoDespesa=$idTipoDespesa;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao=$descricao;
    }
    public function equals($object){
        if($object instanceof TipoDespesa){
            if($this->idTipoDespesa!=$object->idTipoDespesa){
                return false;
            }
            if($this->descricao!=$object->descricao){
                return false;
            }
            return true;
        }
        else{
            return false;
        }

    }
    public function toString(){

        return "  [idTipoDespesa:" .$this->idTipoDespesa. "]  [descricao:" .$this->descricao. "]  " ;
    }




}