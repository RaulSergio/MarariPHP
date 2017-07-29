<?php
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 29/07/2017
 * Time: 16:27
 */

class MedidaProduto
{
    private $idMedidaProduto;
    private $descricao;

    /**
     * MedidaProduto constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getIdMedidaProduto()
    {
        return $this->idMedidaProduto;
    }

    /**
     * @param mixed $idMedidaProduto
     */
    public function setIdMedidaProduto($idMedidaProduto)
    {
        $this->idMedidaProduto = $idMedidaProduto;
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