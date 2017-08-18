<?php
namespace Marari\model;
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 29/07/2017
 * Time: 16:30
 */

class Funcionario
{
    
    private $idFuncionario;
    
    private $nome;
    private $endereco;
    private $cpf;    
    private $rg;   
    private $telefone;    
    private $cep;    
    private $email;    
    private $infoAdc;
    
    public function __construct($idFuncionario = 0,$nome= "" ,$endereco= "" ,$cpf= "" ,$rg= "" ,$telefone= "" ,$cep= "" ,$email= "" ,$infoAdc= "" ){
        $this->idFuncionario = $idFuncionario;
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->telefone = $telefone;
        $this->cep = $cep;
        $this->email = $email;
        $this->infoAdc = $infoAdc;

    }

    public static function construct($array){
        $obj = new Funcioanrio();
        $obj->setIdFuncionario( $array['idFuncionario']);
        $obj->setNome( $array['nome']);
        $obj->setEndereco( $array['endereco']);
        $obj->setCpf( $array['cpf']);
        $obj->setRg( $array['rg']);
        $obj->setTelefone( $array['telefone']);
        $obj->setCep( $array['cep']);
        $obj->setEmail( $array['email']);
        $obj->setInfoAdc( $array['infoAdc']);
        return $obj;

    }

    public function getIdFuncionario(){
        return $this->idFuncionario;
    }

    public function setIdFuncionario($idFuncionario){
        $this->idFuncionario=$idFuncionario;
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

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf=$cpf;
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

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email=$email;
    }

    public function getInfoAdc(){
        return $this->infoAdc;
    }

    public function setInfoAdc($infoAdc){
        $this->infoAdc=$infoAdc;
    }
    public function equals($object){
        if($object instanceof Funcioanrio){

            if($this->idFuncionario!=$object->idFuncionario){
                return false;
            }
            if($this->nome!=$object->nome){
                return false;
            }
            if($this->endereco!=$object->endereco){
                return false;
            }
            if($this->cpf!=$object->cpf){
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
            if($this->email!=$object->email){
                return false;
            }
            if($this->infoAdc!=$object->infoAdc){
                return false;

            }
            return true;
        }
        else{
            return false;
        }

    }
    public function toString(){

        return "  [idFuncionario:" .$this->idFuncionario. "]  [nome:" .$this->nome. "]  [endereco:" .$this->endereco. "]  [cpf:" .$this->cpf. "]  [rg:" .$this->rg. "]  [telefone:" .$this->telefone. "]  [cep:" .$this->cep. "]  [email:" .$this->email. "]  [infoAdc:" .$this->infoAdc. "]  " ;
    }



}