<?php
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 29/07/2017
 * Time: 16:11
 */

class TipoServico
{

    private $idTipoServico;
    private $descricao;

    /**
     * TipoServico constructor.
     */
    public function __construct()
    {
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