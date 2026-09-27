<?php
/*
DIFERENÇA ENTRE self:: E $this->
$this-> : Refere-se à INSTÂNCIA (objeto atual). É usado para acessar atributos e 
métodos de um objeto específico criado com 'new'.
self::  : Refere-se à CLASSE. É usado para acessar membros estáticos (propriedades 
static, métodos static ou constantes) que pertencem à classe em geral.
 */

class Teste {
    public $nomeObjeto = "Sou um objeto";

    public static function metodoEstaticoIncorreto() {

    }

    public static function metodoEstaticoCorreto() {
        return "Métodos estáticos não usam \$this, usam apenas membros de classe (self::)!";
    }
}

echo Teste::metodoEstaticoCorreto();
?>