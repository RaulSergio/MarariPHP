<?php
namespace Marari\model;
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 29/07/2017
 * Time: 16:11
 */

class TipoServico
{    
    private $idTipoServico;    
    private $descricao;
    
    public function __construct($idTipoServico = 0,$descricao= "" ){
        $this->idTipoServico = $idTipoServico;
        $this->descricao = $descricao;

    }

    public static function construct($array){
        $obj = new TipoServico();
        $obj->setIdTipoServico( $array['idTipoServico']);
        $obj->setDescricao( $array['descricao']);
        return $obj;

    }

    public function getIdTipoServico(){
        return $this->idTipoServico;
    }

    public function setIdTipoServico($idTipoServico){
        $this->idTipoServico=$idTipoServico;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao=$descricao;
    }
    public function equals($object){
        if($object instanceof TipoServico){
            if($this->idTipoServico!=$object->idTipoServico){
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

        return "  [idTipoServico:" .$this->idTipoServico. "]  [descricao:" .$this->descricao. "]  " ;
    }


}