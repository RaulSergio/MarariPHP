<?php
namespace Marari\model;
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 29/07/2017
 * Time: 16:35
 */

class Servico
{    
    private $idServico;    
    private $descricao;    
    private $valorServico;    
    private $valorMinimo;    
    private $valorMaximo;
    private $tipoServico;
    private $funcionario;
    
    public function __construct($idServico = 0,$descricao= "" ,$valorServico= 0.0,$valorMinimo= 0.0,$valorMaximo= 0.0,$tipoServico= "" ,$funcionario= "" ){
        $this->idServico = $idServico;
        $this->descricao = $descricao;
        $this->valorServico = $valorServico;
        $this->valorMinimo = $valorMinimo;
        $this->valorMaximo = $valorMaximo;
        $this->tipoServico = $tipoServico;
        $this->funcionario = $funcionario;

    }

    public static function construct($array){
        $obj = new Servico();
        $obj->setIdServico( $array['idServico']);
        $obj->setDescricao( $array['descricao']);
        $obj->setValorServico( $array['valorServico']);
        $obj->setValorMinimo( $array['valorMinimo']);
        $obj->setValorMaximo( $array['valorMaximo']);
        $obj->setTipoServico( $array['tipoServico']);
        $obj->setFuncionario( $array['funcionario']);
        return $obj;

    }

    public function getIdServico(){
        return $this->idServico;
    }

    public function setIdServico($idServico){
        $this->idServico=$idServico;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao=$descricao;
    }

    public function getValorServico(){
        return $this->valorServico;
    }

    public function setValorServico($valorServico){
        $this->valorServico=$valorServico;
    }

    public function getValorMinimo(){
        return $this->valorMinimo;
    }

    public function setValorMinimo($valorMinimo){
        $this->valorMinimo=$valorMinimo;
    }

    public function getValorMaximo(){
        return $this->valorMaximo;
    }

    public function setValorMaximo($valorMaximo){
        $this->valorMaximo=$valorMaximo;
    }

    public function getTipoServico(){
        return $this->tipoServico;
    }

    public function setTipoServico($tipoServico){
        $this->tipoServico=$tipoServico;
    }

    public function getFuncionario(){
        return $this->funcionario;
    }

    public function setFuncionario($funcionario){
        $this->funcionario=$funcionario;
    }
    public function equals($object){
        if($object instanceof Servico){
            if($this->idServico!=$object->idServico){
                return false;
            }
            if($this->descricao!=$object->descricao){
                return false;
            }
            if($this->valorServico!=$object->valorServico){
                return false;
            }
            if($this->valorMinimo!=$object->valorMinimo){
                return false;
            }
            if($this->valorMaximo!=$object->valorMaximo){
                return false;
            }
            if($this->tipoServico!=$object->tipoServico){
                return false;
            }
            if($this->funcionario!=$object->funcionario){
                return false;
            }
            return true;
        }
        else{
            return false;
        }

    }
    public function toString(){

        return "  [idServico:" .$this->idServico. "]  [descricao:" .$this->descricao. "]  [valorServico:" .$this->valorServico. "]  [valorMinimo:" .$this->valorMinimo. "]  [valorMaximo:" .$this->valorMaximo. "]  [tipoServico:" .$this->tipoServico. "]  [funcionario:" .$this->funcionario. "]  " ;
    }




}