<?php
class FormatadorTexto {
    public static function paraMaiusculas($texto) {
        return mb_strtoupper($texto, 'UTF-8');
    }
}
?>