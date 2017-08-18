<?php
namespace Marari\model;
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 29/07/2017
 * Time: 16:59
 */

class Caixa
{   
    private $idCaixa;
    private $data;    
    private $descricao;    
    private $valor;   
    private $status;    
    private $formaPagamento;
    private $tipoDespesa;
    private $cliente;
    private $fornecedor;
    
    public function __construct($idCaixa = 0,$data= "" ,$descricao= "" ,$valor= 0.0,$status = 0,$formaPagamento = 0,$tipoDespesa= "" ,$cliente= "" ,$fornecedor= "" ){
        $this->idCaixa = $idCaixa;
        $this->data = $data;
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->status = $status;
        $this->formaPagamento = $formaPagamento;
        $this->tipoDespesa = $tipoDespesa;
        $this->cliente = $cliente;
        $this->fornecedor = $fornecedor;

    }

    public static function construct($array){
        $obj = new Caixa();
        $obj->setIdCaixa( $array['idCaixa']);
        $obj->setData( $array['data']);
        $obj->setDescricao( $array['descricao']);
        $obj->setValor( $array['valor']);
        $obj->setStatus( $array['status']);
        $obj->setFormaPagamento( $array['formaPagamento']);
        $obj->setTipoDespesa( $array['tipoDespesa']);
        $obj->setCliente( $array['cliente']);
        $obj->setFornecedor( $array['fornecedor']);
        return $obj;

    }

    public function getIdCaixa(){
        return $this->idCaixa;
    }

    public function setIdCaixa($idCaixa){
        $this->idCaixa=$idCaixa;
    }

    public function getData(){
        return $this->data;
    }

    public function setData($data){
        $this->data=$data;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao=$descricao;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setValor($valor){
        $this->valor=$valor;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
        $this->status=$status;
    }

    public function getFormaPagamento(){
        return $this->formaPagamento;
    }

    public function setFormaPagamento($formaPagamento){
        $this->formaPagamento=$formaPagamento;
    }

    public function getTipoDespesa(){
        return $this->tipoDespesa;
    }

    public function setTipoDespesa($tipoDespesa){
        $this->tipoDespesa=$tipoDespesa;
    }

    public function getCliente(){
        return $this->cliente;
    }

    public function setCliente($cliente){
        $this->cliente=$cliente;
    }

    public function getFornecedor(){
        return $this->fornecedor;
    }

    public function setFornecedor($fornecedor){
        $this->fornecedor=$fornecedor;
    }
    public function equals($object){
        if($object instanceof Caixa){
            if($this->idCaixa!=$object->idCaixa){
                return false;
            }
            if($this->data!=$object->data){
                return false;
            }
            if($this->descricao!=$object->descricao){
                return false;
            }
            if($this->valor!=$object->valor){
                return false;
            }
            if($this->status!=$object->status){
                return false;
            }
            if($this->formaPagamento!=$object->formaPagamento){
                return false;
            }
            if($this->tipoDespesa!=$object->tipoDespesa){
                return false;
            }
            if($this->cliente!=$object->cliente){
                return false;
            }
            if($this->fornecedor!=$object->fornecedor){
                return false;
            }
            return true;
        }
        else{
            return false;
        }

    }
    public function toString(){

        return "  [idCaixa:" .$this->idCaixa. "]  [data:" .$this->data. "]  [descricao:" .$this->descricao. "]  [valor:" .$this->valor. "]  [status:" .$this->status. "]  [formaPagamento:" .$this->formaPagamento. "]  [tipoDespesa:" .$this->tipoDespesa. "]  [cliente:" .$this->cliente. "]  [fornecedor:" .$this->fornecedor. "]  " ;
    }


}