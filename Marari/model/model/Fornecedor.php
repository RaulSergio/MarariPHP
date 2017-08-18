<?php
namespace Marari\model;
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 29/07/2017
 * Time: 16:49
 */

class Fornecedor
{
    
    private $idFornecedor;   
    private $nome;
    private $endereco;    
    private $cpfCnpj;   
    private $rgIe;   
    private $telefone;    
    private $cep;   
    private $contato;    
    private $info;   
    private $email;
    
    public function __construct($idFornecedor = 0,$nome= "" ,$endereco= "" ,$cpfCnpj= "" ,$rgIe= "" ,$telefone= "" ,$cep= "" ,$contato= "" ,$info= "" ,$email= "" ){
        $this->idFornecedor = $idFornecedor;
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->cpfCnpj = $cpfCnpj;
        $this->rgIe = $rgIe;
        $this->telefone = $telefone;
        $this->cep = $cep;
        $this->contato = $contato;
        $this->info = $info;
        $this->email = $email;

    }

    public static function construct($array){
        $obj = new Fornecedor();
        $obj->setIdFornecedor( $array['idFornecedor']);
        $obj->setNome( $array['nome']);
        $obj->setEndereco( $array['endereco']);
        $obj->setCpfCnpj( $array['cpfCnpj']);
        $obj->setRgIe( $array['rgIe']);
        $obj->setTelefone( $array['telefone']);
        $obj->setCep( $array['cep']);
        $obj->setContato( $array['contato']);
        $obj->setInfo( $array['info']);
        $obj->setEmail( $array['email']);
        return $obj;

    }

    public function getIdFornecedor(){
        return $this->idFornecedor;
    }

    public function setIdFornecedor($idFornecedor){
        $this->idFornecedor=$idFornecedor;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome=$nome;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco=$endereco;
    }

    public function getCpfCnpj(){
        return $this->cpfCnpj;
    }

    public function setCpfCnpj($cpfCnpj){
        $this->cpfCnpj=$cpfCnpj;
    }

    public function getRgIe(){
        return $this->rgIe;
    }

    public function setRgIe($rgIe){
        $this->rgIe=$rgIe;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone=$telefone;
    }

    public function getCep(){
        return $this->cep;
    }

    public function setCep($cep){
        $this->cep=$cep;
    }

    public function getContato(){
        return $this->contato;
    }

    public function setContato($contato){
        $this->contato=$contato;
    }

    public function getInfo(){
        return $this->info;
    }

    public function setInfo($info){
        $this->info=$info;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email=$email;
    }
    public function equals($object){
        if($object instanceof Fornecedor){
            if($this->idFornecedor!=$object->idFornecedor){
                return false;
            }
            if($this->nome!=$object->nome){
                return false;
            }
            if($this->endereco!=$object->endereco){
                return false;
            }
            if($this->cpfCnpj!=$object->cpfCnpj){
                return false;
            }
            if($this->rgIe!=$object->rgIe){
                return false;
            }
            if($this->telefone!=$object->telefone){
                return false;
            }
            if($this->cep!=$object->cep){
                return false;
            }
            if($this->contato!=$object->contato){
                return false;
            }
            if($this->info!=$object->info){
                return false;
            }
            if($this->email!=$object->email){
                return false;
            }
            return true;
        }
        else{
            return false;
        }

    }
    public function toString(){

        return "  [idFornecedor:" .$this->idFornecedor. "]  [nome:" .$this->nome. "]  [endereco:" .$this->endereco. "]  [cpfCnpj:" .$this->cpfCnpj. "]  [rgIe:" .$this->rgIe. "]  [telefone:" .$this->telefone. "]  [cep:" .$this->cep. "]  [contato:" .$this->contato. "]  [info:" .$this->info. "]  [email:" .$this->email. "]  " ;
    }




}