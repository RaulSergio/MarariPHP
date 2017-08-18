<?php
namespace Marari\model;

class Produto{

    
    private $idProduto;    
    private $descricao;    
    private $codBarras;
    private $fornecedor;   
    private $precoCusto;    
    private $precoVenda;    
    private $precoMinVenda;    
    private $precoMaxVenda;    
    private $comissaoVenda;   
    private $qtdEstoque;    
    private $qtdMinEstoque;  
    private $altura;    
    private $peso;    
    private $largura;    
    private $profundidade;
    private $medidaproduto;
    private $tipoProduto;
    private $funcionario;    
    private $validade;
    
    public function __construct($idProduto = 0,$descricao= "" ,$codBarras= "" ,$fornecedor= "" ,$precoCusto= 0.0,$precoVenda= 0.0,$precoMinVenda= 0.0,$precoMaxVenda= 0.0,$comissaoVenda= 0.0,$qtdEstoque = 0,$qtdMinEstoque = 0,$altura= 0.0,$peso= 0.0,$largura= 0.0,$profundidade= 0.0,$medidaproduto= "" ,$tipoProduto= "" ,$funcionario= "" ,$validade = 0){
        $this->idProduto = $idProduto;
        $this->descricao = $descricao;
        $this->codBarras = $codBarras;
        $this->fornecedor = $fornecedor;
        $this->precoCusto = $precoCusto;
        $this->precoVenda = $precoVenda;
        $this->precoMinVenda = $precoMinVenda;
        $this->precoMaxVenda = $precoMaxVenda;
        $this->comissaoVenda = $comissaoVenda;
        $this->qtdEstoque = $qtdEstoque;
        $this->qtdMinEstoque = $qtdMinEstoque;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->largura = $largura;
        $this->profundidade = $profundidade;
        $this->medidaproduto = $medidaproduto;
        $this->tipoProduto = $tipoProduto;
        $this->funcionario = $funcionario;
        $this->validade = $validade;

    }

    public static function construct($array){
        $obj = new Produto();
        $obj->setIdProduto( $array['idProduto']);
        $obj->setDescricao( $array['descricao']);
        $obj->setCodBarras( $array['codBarras']);
        $obj->setFornecedor( $array['fornecedor']);
        $obj->setPrecoCusto( $array['precoCusto']);
        $obj->setPrecoVenda( $array['precoVenda']);
        $obj->setPrecoMinVenda( $array['precoMinVenda']);
        $obj->setPrecoMaxVenda( $array['precoMaxVenda']);
        $obj->setComissaoVenda( $array['comissaoVenda']);
        $obj->setQtdEstoque( $array['qtdEstoque']);
        $obj->setQtdMinEstoque( $array['qtdMinEstoque']);
        $obj->setAltura( $array['altura']);
        $obj->setPeso( $array['peso']);
        $obj->setLargura( $array['largura']);
        $obj->setProfundidade( $array['profundidade']);
        $obj->setMedidaproduto( $array['medidaproduto']);
        $obj->setTipoProduto( $array['tipoProduto']);
        $obj->setFuncionario( $array['funcionario']);
        $obj->setValidade( $array['validade']);
        return $obj;

    }

    public function getIdProduto(){
        return $this->idProduto;
    }

    public function setIdProduto($idProduto){
        $this->idProduto=$idProduto;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao=$descricao;
    }

    public function getCodBarras(){
        return $this->codBarras;
    }

    public function setCodBarras($codBarras){
        $this->codBarras=$codBarras;
    }

    public function getFornecedor(){
        return $this->fornecedor;
    }

    public function setFornecedor($fornecedor){
        $this->fornecedor=$fornecedor;
    }

    public function getPrecoCusto(){
        return $this->precoCusto;
    }

    public function setPrecoCusto($precoCusto){
        $this->precoCusto=$precoCusto;
    }

    public function getPrecoVenda(){
        return $this->precoVenda;
    }

    public function setPrecoVenda($precoVenda){
        $this->precoVenda=$precoVenda;
    }

    public function getPrecoMinVenda(){
        return $this->precoMinVenda;
    }

    public function setPrecoMinVenda($precoMinVenda){
        $this->precoMinVenda=$precoMinVenda;
    }

    public function getPrecoMaxVenda(){
        return $this->precoMaxVenda;
    }

    public function setPrecoMaxVenda($precoMaxVenda){
        $this->precoMaxVenda=$precoMaxVenda;
    }

    public function getComissaoVenda(){
        return $this->comissaoVenda;
    }

    public function setComissaoVenda($comissaoVenda){
        $this->comissaoVenda=$comissaoVenda;
    }

    public function getQtdEstoque(){
        return $this->qtdEstoque;
    }

    public function setQtdEstoque($qtdEstoque){
        $this->qtdEstoque=$qtdEstoque;
    }

    public function getQtdMinEstoque(){
        return $this->qtdMinEstoque;
    }

    public function setQtdMinEstoque($qtdMinEstoque){
        $this->qtdMinEstoque=$qtdMinEstoque;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setAltura($altura){
        $this->altura=$altura;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($peso){
        $this->peso=$peso;
    }

    public function getLargura(){
        return $this->largura;
    }

    public function setLargura($largura){
        $this->largura=$largura;
    }

    public function getProfundidade(){
        return $this->profundidade;
    }

    public function setProfundidade($profundidade){
        $this->profundidade=$profundidade;
    }

    public function getMedidaproduto(){
        return $this->medidaproduto;
    }

    public function setMedidaproduto($medidaproduto){
        $this->medidaproduto=$medidaproduto;
    }

    public function getTipoProduto(){
        return $this->tipoProduto;
    }

    public function setTipoProduto($tipoProduto){
        $this->tipoProduto=$tipoProduto;
    }

    public function getFuncionario(){
        return $this->funcionario;
    }

    public function setFuncionario($funcionario){
        $this->funcionario=$funcionario;
    }

    public function getValidade(){
        return $this->validade;
    }

    public function setValidade($validade){
        $this->validade=$validade;
    }
    public function equals($object){
        if($object instanceof Produto){
            if($this->idProduto!=$object->idProduto){
                return false;
            }
            if($this->descricao!=$object->descricao){
                return false;
            }
            if($this->codBarras!=$object->codBarras){
                return false;
            }
            if($this->fornecedor!=$object->fornecedor){
                return false;
            }
            if($this->precoCusto!=$object->precoCusto){
                return false;
            }
            if($this->precoVenda!=$object->precoVenda){
                return false;
            }
            if($this->precoMinVenda!=$object->precoMinVenda){
                return false;
            }
            if($this->precoMaxVenda!=$object->precoMaxVenda){
                return false;
            }
            if($this->comissaoVenda!=$object->comissaoVenda){
                return false;
            }
            if($this->qtdEstoque!=$object->qtdEstoque){
                return false;
            }
            if($this->qtdMinEstoque!=$object->qtdMinEstoque){
                return false;
            }
            if($this->altura!=$object->altura){
                return false;
            }
            if($this->peso!=$object->peso){
                return false;
            }
            if($this->largura!=$object->largura){
                return false;
            }
            if($this->profundidade!=$object->profundidade){
                return false;
            }
            if($this->medidaproduto!=$object->medidaproduto){
                return false;
            }
            if($this->tipoProduto!=$object->tipoProduto){
                return false;
            }
            if($this->funcionario!=$object->funcionario){
                return false;
            }
            if($this->validade!=$object->validade){
                return false;
            }
            return true;
        }
        else{
            return false;
        }

    }
    public function toString(){

        return "  [idProduto:" .$this->idProduto. "]  [descricao:" .$this->descricao. "]  [codBarras:" .$this->codBarras. "]  [fornecedor:" .$this->fornecedor. "]  [precoCusto:" .$this->precoCusto. "]  [precoVenda:" .$this->precoVenda. "]  [precoMinVenda:" .$this->precoMinVenda. "]  [precoMaxVenda:" .$this->precoMaxVenda. "]  [comissaoVenda:" .$this->comissaoVenda. "]  [qtdEstoque:" .$this->qtdEstoque. "]  [qtdMinEstoque:" .$this->qtdMinEstoque. "]  [altura:" .$this->altura. "]  [peso:" .$this->peso. "]  [largura:" .$this->largura. "]  [profundidade:" .$this->profundidade. "]  [medidaproduto:" .$this->medidaproduto. "]  [tipoProduto:" .$this->tipoProduto. "]  [funcionario:" .$this->funcionario. "]  [validade:" .$this->validade. "]  " ;
    }


}