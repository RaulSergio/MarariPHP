<?php
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 29/07/2017
 * Time: 16:17
 */

class TipoProduto{
    private $idTipoProduto;
    private $descricao;

    /**
     * TipoProduto constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getIdTipoProduto()
    {
        return $this->idTipoProduto;
    }

    /**
     * @param mixed $idTipoProduto
     */
    public function setIdTipoProduto($idTipoProduto)
    {
        $this->idTipoProduto = $idTipoProduto;
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