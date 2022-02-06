<?php

class Recargas {
    
    private $codigoRecarga;
    private $lote;
    private $numeroSerie;
    private $validade;
    private $caixa;
    private $detalhes;
    private $descricao;
    private $imagem;
    
    public function getCodigoRecarga() {
        return $this->codigoRecarga;
    }

    public function setCodigoRecarga($codigoRecarga) {
        $this->codigoRecarga = $codigoRecarga;
    }

    public function getLote() {
        return $this->lote;
    }

    public function setLote($lote) {
        $this->lote = $lote;
    }

    public function getNumeroSerie() {
        return $this->numeroSerie;
    }

    public function setNumeroSerie($numeroSerie) {
        $this->numeroSerie = $numeroSerie;
    }

    public function getValidade() {
        return $this->validade;
    }

    public function setValidade($validade) {
        $this->validade = $validade;
    }

    public function getCaixa() {
        return $this->caixa;
    }

    public function setCaixa($caixa) {
        $this->caixa = $caixa;
    }

    public function getDetalhes() {
        return $this->detalhes;
    }

    public function setDetalhes($detalhes) {
        $this->detalhes = $detalhes;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getImagem() {
        return $this->imagem;
    }

    public function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    public function mostrarRecargas(){
        
        $this->conexao = new Conexao();
        $sql = "SELECT * FROM recargas Where idRecarga";
    }
}

?>
