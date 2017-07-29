<?php
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 29/07/2017
 * Time: 16:49
 */

class Fornecedor
{
    private $idFornecedor, $nomeFornecedor, $enderecoFornecedor,
        $cpfCnpjFornecedor, $rgIeFornecedor, $telefoneFornecedor,
        $cepFornecedor, $contatoFornecedor, $infoFornecedor, $emailFornecedor;

    /**
     * Fornecedor constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getIdFornecedor()
    {
        return $this->idFornecedor;
    }

    /**
     * @param mixed $idFornecedor
     */
    public function setIdFornecedor($idFornecedor)
    {
        $this->idFornecedor = $idFornecedor;
    }

    /**
     * @return mixed
     */
    public function getNomeFornecedor()
    {
        return $this->nomeFornecedor;
    }

    /**
     * @param mixed $nomeFornecedor
     */
    public function setNomeFornecedor($nomeFornecedor)
    {
        $this->nomeFornecedor = $nomeFornecedor;
    }

    /**
     * @return mixed
     */
    public function getEnderecoFornecedor()
    {
        return $this->enderecoFornecedor;
    }

    /**
     * @param mixed $enderecoFornecedor
     */
    public function setEnderecoFornecedor($enderecoFornecedor)
    {
        $this->enderecoFornecedor = $enderecoFornecedor;
    }

    /**
     * @return mixed
     */
    public function getCpfCnpjFornecedor()
    {
        return $this->cpfCnpjFornecedor;
    }

    /**
     * @param mixed $cpfCnpjFornecedor
     */
    public function setCpfCnpjFornecedor($cpfCnpjFornecedor)
    {
        $this->cpfCnpjFornecedor = $cpfCnpjFornecedor;
    }

    /**
     * @return mixed
     */
    public function getRgIeFornecedor()
    {
        return $this->rgIeFornecedor;
    }

    /**
     * @param mixed $rgIeFornecedor
     */
    public function setRgIeFornecedor($rgIeFornecedor)
    {
        $this->rgIeFornecedor = $rgIeFornecedor;
    }

    /**
     * @return mixed
     */
    public function getTelefoneFornecedor()
    {
        return $this->telefoneFornecedor;
    }

    /**
     * @param mixed $telefoneFornecedor
     */
    public function setTelefoneFornecedor($telefoneFornecedor)
    {
        $this->telefoneFornecedor = $telefoneFornecedor;
    }

    /**
     * @return mixed
     */
    public function getCepFornecedor()
    {
        return $this->cepFornecedor;
    }

    /**
     * @param mixed $cepFornecedor
     */
    public function setCepFornecedor($cepFornecedor)
    {
        $this->cepFornecedor = $cepFornecedor;
    }

    /**
     * @return mixed
     */
    public function getContatoFornecedor()
    {
        return $this->contatoFornecedor;
    }

    /**
     * @param mixed $contatoFornecedor
     */
    public function setContatoFornecedor($contatoFornecedor)
    {
        $this->contatoFornecedor = $contatoFornecedor;
    }

    /**
     * @return mixed
     */
    public function getInfoFornecedor()
    {
        return $this->infoFornecedor;
    }

    /**
     * @param mixed $infoFornecedor
     */
    public function setInfoFornecedor($infoFornecedor)
    {
        $this->infoFornecedor = $infoFornecedor;
    }

    /**
     * @return mixed
     */
    public function getEmailFornecedor()
    {
        return $this->emailFornecedor;
    }

    /**
     * @param mixed $emailFornecedor
     */
    public function setEmailFornecedor($emailFornecedor)
    {
        $this->emailFornecedor = $emailFornecedor;
    }




}