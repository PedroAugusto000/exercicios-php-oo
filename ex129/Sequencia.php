<?php

class Sequencia {
    private $inicio;
    private $fim;

    public function setInicio($inicio) {
        $this->inicio = $inicio;
    }

    public function setFim($fim) {
        $this->fim = $fim;
    }

    public function exibirTodosNumeros() {
        $sequencia = range($this->inicio, $this->fim);
        return $sequencia;
    }

    public function exibirPares() {
        $sequencia = range($this->inicio, $this->fim);
        $pares = array_filter($sequencia, function ($numero) {
            return $numero % 2 == 0;
        });
        return $pares;
    }

    public function exibirImpares() {
        $sequencia = range($this->inicio, $this->fim);
        $impares = array_filter($sequencia, function ($numero) {
            return $numero % 2 != 0;
        });
        return $impares;
    }
}
?>