<?php

class Produto{
    private $id_produto, $descricao, $codbarras, $id_fornecedor, $precocusto, $precovenda,
    $precominvenda, $precomaxvenda, $comissaovenda, $qtdestoque, $qtdminestoque, $altura, $peso,
    $largura, $profundidade, $id_medidaproduto, $id_tipoproduto, $id_funcionario, $validade;

    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getIdProduto()
    {
        return $this->id_produto;
    }

    /**
     * @param mixed $id_produto
     */
    public function setIdProduto($id_produto)
    {
        $this->id_produto = $id_produto;
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
    public function getCodbarras()
    {
        return $this->codbarras;
    }

    /**
     * @param mixed $codbarras
     */
    public function setCodbarras($codbarras)
    {
        $this->codbarras = $codbarras;
    }

    /**
     * @return mixed
     */
    public function getIdFornecedor()
    {
        return $this->id_fornecedor;
    }

    /**
     * @param mixed $id_fornecedor
     */
    public function setIdFornecedor($id_fornecedor)
    {
        $this->id_fornecedor = $id_fornecedor;
    }

    /**
     * @return mixed
     */
    public function getPrecocusto()
    {
        return $this->precocusto;
    }

    /**
     * @param mixed $precocusto
     */
    public function setPrecocusto($precocusto)
    {
        $this->precocusto = $precocusto;
    }

    /**
     * @return mixed
     */
    public function getPrecovenda()
    {
        return $this->precovenda;
    }

    /**
     * @param mixed $precovenda
     */
    public function setPrecovenda($precovenda)
    {
        $this->precovenda = $precovenda;
    }

    /**
     * @return mixed
     */
    public function getPrecominvenda()
    {
        return $this->precominvenda;
    }

    /**
     * @param mixed $precominvenda
     */
    public function setPrecominvenda($precominvenda)
    {
        $this->precominvenda = $precominvenda;
    }

    /**
     * @return mixed
     */
    public function getPrecomaxvenda()
    {
        return $this->precomaxvenda;
    }

    /**
     * @param mixed $precomaxvenda
     */
    public function setPrecomaxvenda($precomaxvenda)
    {
        $this->precomaxvenda = $precomaxvenda;
    }

    /**
     * @return mixed
     */
    public function getComissaovenda()
    {
        return $this->comissaovenda;
    }

    /**
     * @param mixed $comissaovenda
     */
    public function setComissaovenda($comissaovenda)
    {
        $this->comissaovenda = $comissaovenda;
    }

    /**
     * @return mixed
     */
    public function getQtdestoque()
    {
        return $this->qtdestoque;
    }

    /**
     * @param mixed $qtdestoque
     */
    public function setQtdestoque($qtdestoque)
    {
        $this->qtdestoque = $qtdestoque;
    }

    /**
     * @return mixed
     */
    public function getQtdminestoque()
    {
        return $this->qtdminestoque;
    }

    /**
     * @param mixed $qtdminestoque
     */
    public function setQtdminestoque($qtdminestoque)
    {
        $this->qtdminestoque = $qtdminestoque;
    }

    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param mixed $altura
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    /**
     * @return mixed
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * @param mixed $peso
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    /**
     * @return mixed
     */
    public function getLargura()
    {
        return $this->largura;
    }

    /**
     * @param mixed $largura
     */
    public function setLargura($largura)
    {
        $this->largura = $largura;
    }

    /**
     * @return mixed
     */
    public function getProfundidade()
    {
        return $this->profundidade;
    }

    /**
     * @param mixed $profundidade
     */
    public function setProfundidade($profundidade)
    {
        $this->profundidade = $profundidade;
    }

    /**
     * @return mixed
     */
    public function getIdMedidaproduto()
    {
        return $this->id_medidaproduto;
    }

    /**
     * @param mixed $id_medidaproduto
     */
    public function setIdMedidaproduto($id_medidaproduto)
    {
        $this->id_medidaproduto = $id_medidaproduto;
    }

    /**
     * @return mixed
     */
    public function getIdTipoproduto()
    {
        return $this->id_tipoproduto;
    }

    /**
     * @param mixed $id_tipoproduto
     */
    public function setIdTipoproduto($id_tipoproduto)
    {
        $this->id_tipoproduto = $id_tipoproduto;
    }

    /**
     * @return mixed
     */
    public function getIdFuncionario()
    {
        return $this->id_funcionario;
    }

    /**
     * @param mixed $id_funcionario
     */
    public function setIdFuncionario($id_funcionario)
    {
        $this->id_funcionario = $id_funcionario;
    }

    /**
     * @return mixed
     */
    public function getValidade()
    {
        return $this->validade;
    }

    /**
     * @param mixed $validade
     */
    public function setValidade($validade)
    {
        $this->validade = $validade;
    }


}