<?php
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 29/07/2017
 * Time: 16:56
 */

class Cliente
{
    private $idCliente, $nomeCliente, $enderecoCliente, $cpfCliente, $rgCliente, $telefoneCliente, $cepCliente,
        $contatoCliente, $infoCliente, $emailCliente;

    /**
     * Cliente constructor.
     */
    public function __construct()
    {
    }


    /**
     * @return mixed
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * @param mixed $idCliente
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
    }

    /**
     * @return mixed
     */
    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }

    /**
     * @param mixed $nomeCliente
     */
    public function setNomeCliente($nomeCliente)
    {
        $this->nomeCliente = $nomeCliente;
    }

    /**
     * @return mixed
     */
    public function getEnderecoCliente()
    {
        return $this->enderecoCliente;
    }

    /**
     * @param mixed $enderecoCliente
     */
    public function setEnderecoCliente($enderecoCliente)
    {
        $this->enderecoCliente = $enderecoCliente;
    }

    /**
     * @return mixed
     */
    public function getCpfCliente()
    {
        return $this->cpfCliente;
    }

    /**
     * @param mixed $cpfCliente
     */
    public function setCpfCliente($cpfCliente)
    {
        $this->cpfCliente = $cpfCliente;
    }

    /**
     * @return mixed
     */
    public function getRgCliente()
    {
        return $this->rgCliente;
    }

    /**
     * @param mixed $rgCliente
     */
    public function setRgCliente($rgCliente)
    {
        $this->rgCliente = $rgCliente;
    }

    /**
     * @return mixed
     */
    public function getTelefoneCliente()
    {
        return $this->telefoneCliente;
    }

    /**
     * @param mixed $telefoneCliente
     */
    public function setTelefoneCliente($telefoneCliente)
    {
        $this->telefoneCliente = $telefoneCliente;
    }

    /**
     * @return mixed
     */
    public function getCepCliente()
    {
        return $this->cepCliente;
    }

    /**
     * @param mixed $cepCliente
     */
    public function setCepCliente($cepCliente)
    {
        $this->cepCliente = $cepCliente;
    }

    /**
     * @return mixed
     */
    public function getContatoCliente()
    {
        return $this->contatoCliente;
    }

    /**
     * @param mixed $contatoCliente
     */
    public function setContatoCliente($contatoCliente)
    {
        $this->contatoCliente = $contatoCliente;
    }

    /**
     * @return mixed
     */
    public function getInfoCliente()
    {
        return $this->infoCliente;
    }

    /**
     * @param mixed $infoCliente
     */
    public function setInfoCliente($infoCliente)
    {
        $this->infoCliente = $infoCliente;
    }

    /**
     * @return mixed
     */
    public function getEmailCliente()
    {
        return $this->emailCliente;
    }

    /**
     * @param mixed $emailCliente
     */
    public function setEmailCliente($emailCliente)
    {
        $this->emailCliente = $emailCliente;
    }


}