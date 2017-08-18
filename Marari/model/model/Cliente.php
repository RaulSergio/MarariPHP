<?php
namespace Marari\model;
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 29/07/2017
 * Time: 16:56
 */

class Cliente
{
    
    private $idCliente;    
    private $nome;
    private $endereco;    
    private $cpfCnpj;    
    private $rg;   
    private $telefone;    
    private $cep;    
    private $contato;    
    private $info;    
    private $email;
    
    public function __construct($idCliente = 0,$nome= "" ,$endereco= "" ,$cpfCnpj= "" ,$rg= "" ,$telefone= "" ,$cep= "" ,$contato= "" ,$info= "" ,$email= "" ){
        $this->idCliente = $idCliente;
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->cpfCnpj = $cpfCnpj;
        $this->rg = $rg;
        $this->telefone = $telefone;
        $this->cep = $cep;
        $this->contato = $contato;
        $this->info = $info;
        $this->email = $email;

    }

    public static function construct($array){
        $obj = new Cliente();
        $obj->setIdCliente( $array['idCliente']);
        $obj->setNome( $array['nome']);
        $obj->setEndereco( $array['endereco']);
        $obj->setCpfCnpj( $array['cpfCnpj']);
        $obj->setRg( $array['rg']);
        $obj->setTelefone( $array['telefone']);
        $obj->setCep( $array['cep']);
        $obj->setContato( $array['contato']);
        $obj->setInfo( $array['info']);
        $obj->setEmail( $array['email']);
        return $obj;

    }

    public function getIdCliente(){
        return $this->idCliente;
    }

    public function setIdCliente($idCliente){
        $this->idCliente=$idCliente;
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

    public function getRg(){
        return $this->rg;
    }

    public function setRg($rg){
        $this->rg=$rg;
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
        if($object instanceof Cliente){
            if($this->idCliente!=$object->idCliente){
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
            if($this->rg!=$object->rg){
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

        return "  [idCliente:" .$this->idCliente. "]  [nome:" .$this->nome. "]  [endereco:" .$this->endereco. "]  [cpfCnpj:" .$this->cpfCnpj. "]  [rg:" .$this->rg. "]  [telefone:" .$this->telefone. "]  [cep:" .$this->cep. "]  [contato:" .$this->contato. "]  [info:" .$this->info. "]  [email:" .$this->email. "]  " ;
    }



}