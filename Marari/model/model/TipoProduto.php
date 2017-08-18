<?php
namespace Marari\model;
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 29/07/2017
 * Time: 16:17
 */

class TipoProduto{
   
    private $idTipoProduto;    
    private $descricao;
    
    public function __construct($idTipoProduto = 0,$descricao= "" ){
        $this->idTipoProduto = $idTipoProduto;
        $this->descricao = $descricao;

    }

    public static function construct($array){
        $obj = new TipoProduto();
        $obj->setIdTipoProduto( $array['idTipoProduto']);
        $obj->setDescricao( $array['descricao']);
        return $obj;

    }

    public function getIdTipoProduto(){
        return $this->idTipoProduto;
    }

    public function setIdTipoProduto($idTipoProduto){
        $this->idTipoProduto=$idTipoProduto;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao=$descricao;
    }
    public function equals($object){
        if($object instanceof TipoProduto){
            if($this->idTipoProduto!=$object->idTipoProduto){
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

        return "  [idTipoProduto:" .$this->idTipoProduto. "]  [descricao:" .$this->descricao. "]  " ;
    }



}