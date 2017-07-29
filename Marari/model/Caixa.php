<?php
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 29/07/2017
 * Time: 16:59
 */

class Caixa
{
    private $idCaixa, $dataCaixa, $descricaoCaixa, $ValorCaixa, $statusCaixa, $valorCaixa, $formapagamentoCaixa,
        $idTipoDespesa, $idCliente, $idFornecedor;

    /**
     * Caixa constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getIdCaixa()
    {
        return $this->idCaixa;
    }

    /**
     * @param mixed $idCaixa
     */
    public function setIdCaixa($idCaixa)
    {
        $this->idCaixa = $idCaixa;
    }

    /**
     * @return mixed
     */
    public function getDataCaixa()
    {
        return $this->dataCaixa;
    }

    /**
     * @param mixed $dataCaixa
     */
    public function setDataCaixa($dataCaixa)
    {
        $this->dataCaixa = $dataCaixa;
    }

    /**
     * @return mixed
     */
    public function getDescricaoCaixa()
    {
        return $this->descricaoCaixa;
    }

    /**
     * @param mixed $descricaoCaixa
     */
    public function setDescricaoCaixa($descricaoCaixa)
    {
        $this->descricaoCaixa = $descricaoCaixa;
    }

    /**
     * @return mixed
     */
    public function getStatusCaixa()
    {
        return $this->statusCaixa;
    }

    /**
     * @param mixed $statusCaixa
     */
    public function setStatusCaixa($statusCaixa)
    {
        $this->statusCaixa = $statusCaixa;
    }

    /**
     * @return mixed
     */
    public function getValorCaixa()
    {
        return $this->valorCaixa;
    }

    /**
     * @param mixed $valorCaixa
     */
    public function setValorCaixa($valorCaixa)
    {
        $this->valorCaixa = $valorCaixa;
    }

    /**
     * @return mixed
     */
    public function getFormapagamentoCaixa()
    {
        return $this->formapagamentoCaixa;
    }

    /**
     * @param mixed $formapagamentoCaixa
     */
    public function setFormapagamentoCaixa($formapagamentoCaixa)
    {
        $this->formapagamentoCaixa = $formapagamentoCaixa;
    }

    /**
     * @return mixed
     */
    public function getIdTipoDespesa()
    {
        return $this->idTipoDespesa;
    }

    /**
     * @param mixed $idTipoDespesa
     */
    public function setIdTipoDespesa($idTipoDespesa)
    {
        $this->idTipoDespesa = $idTipoDespesa;
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


}