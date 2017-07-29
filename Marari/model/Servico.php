<?php
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 29/07/2017
 * Time: 16:35
 */

class Servico
{

    private $idServico,$descricao,$valorServico,$valorMinimo,$valorMaximo,$idTipoServico,$idFuncionario;

    /**
     * @return mixed
     */
    public function getIdServico()
    {
        return $this->idServico;
    }

    /**
     * @param mixed $idServico
     */
    public function setIdServico($idServico)
    {
        $this->idServico = $idServico;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getValorServico()
    {
        return $this->valorServico;
    }

    /**
     * @param mixed $valorServico
     */
    public function setValorServico($valorServico)
    {
        $this->valorServico = $valorServico;
    }

    /**
     * @return mixed
     */
    public function getValorMinimo()
    {
        return $this->valorMinimo;
    }

    /**
     * @param mixed $valorMinimo
     */
    public function setValorMinimo($valorMinimo)
    {
        $this->valorMinimo = $valorMinimo;
    }

    /**
     * @return mixed
     */
    public function getValorMaximo()
    {
        return $this->valorMaximo;
    }

    /**
     * @param mixed $valorMaximo
     */
    public function setValorMaximo($valorMaximo)
    {
        $this->valorMaximo = $valorMaximo;
    }

    /**
     * @return mixed
     */
    public function getIdTipoServico()
    {
        return $this->idTipoServico;
    }

    /**
     * @param mixed $idTipoServico
     */
    public function setIdTipoServico($idTipoServico)
    {
        $this->idTipoServico = $idTipoServico;
    }

    /**
     * @return mixed
     */
    public function getIdFuncionario()
    {
        return $this->idFuncionario;
    }

    /**
     * @param mixed $idFuncionario
     */
    public function setIdFuncionario($idFuncionario)
    {
        $this->idFuncionario = $idFuncionario;
    }



}