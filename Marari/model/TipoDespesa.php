<?php
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 29/07/2017
 * Time: 16:24
 */

class TipoDespesa
{
    private $idTipoDespesa;
    private $descricao;

    /**
     * TipoDespesa constructor.
     */
    public function __construct()
    {
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




}