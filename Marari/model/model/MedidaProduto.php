<?php
namespace Marari\model;
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 29/07/2017
 * Time: 16:27
 */

class MedidaProduto
{
    
    private $idMedidaProduto;    
    private $descricao;
    
    public function __construct($idMedidaProduto = 0,$descricao= "" ){
        $this->idMedidaProduto = $idMedidaProduto;
        $this->descricao = $descricao;

    }

    public static function construct($array){
        $obj = new MedidaProduto();
        $obj->setIdMedidaProduto( $array['idMedidaProduto']);
        $obj->setDescricao( $array['descricao']);
        return $obj;

    }

    public function getIdMedidaProduto(){
        return $this->idMedidaProduto;
    }

    public function setIdMedidaProduto($idMedidaProduto){
        $this->idMedidaProduto=$idMedidaProduto;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao=$descricao;
    }
    public function equals($object){
        if($object instanceof MedidaProduto){
            if($this->idMedidaProduto!=$object->idMedidaProduto){
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

        return "  [idMedidaProduto:" .$this->idMedidaProduto. "]  [descricao:" .$this->descricao. "]  " ;
    }




}