<?php

class QuestionarioPJ
{
    private $que_Codigo;
    private $for_codigo;
    private $que_inclusao;
    private $que_respondido;
    private $que_1_1;
    private $que_1_2;
    private $que_1_3;
    private $que_1_texto;
    private $que_2_1;
    private $que_2_2;
    private $que_2_3;
    private $que_2_texto;
    private $que_3_1;
    private $que_3_2;
    private $que_3_3;
    private $que_3_texto;
    private $que_4_1;
    private $que_4_natureza;
    private $que_4_parte;
    private $que_4_decisao;
    private $que_4_texto;
    private $que_5_1;
    private $que_5_natureza;
    private $que_5_parte;
    private $que_5_decisao;
    private $que_5_texto;
    private $que_6_1;
    private $que_6_texto;
    private $que_7_1;
    private $que_7_2;
    private $que_7_3;
    private $que_7_4;
    private $que_7_5;
    private $que_7_6;
    private $que_7_texto;
    private $que_8_1;
    private $que_8_2;
    private $que_8_3;
    private $que_8_4;
    private $que_8_5;
    private $que_8_6;
    private $que_8_7;
    private $que_8_8;
    private $que_8_9;
    private $que_8_texto;
    private $que_9_1;
    private $que_9_texto;
    private $que_10_1;
    private $que_10_texto;
    private $que_11_texto;
    private $for_nome;
        
    public function __construct() {

        $this->que_Codigo = 0;
        $this->for_codigo;
        $this->que_inclusao;
        $this->que_respondido;
        $this->que_1_1;
        $this->que_1_2;
        $this->que_1_3;
        $this->que_1_texto;
        $this->que_2_1;
        $this->que_2_2;
        $this->que_2_3;
        $this->que_2_texto;
        $this->que_3_1;
        $this->que_3_2;
        $this->que_3_3;
        $this->que_3_texto;
        $this->que_4_1;
        $this->que_4_natureza;
        $this->que_4_parte;
        $this->que_4_decisao;
        $this->que_4_texto;
        $this->que_5_1;
        $this->que_5_natureza;
        $this->que_5_parte;
        $this->que_5_decisao;
        $this->que_5_texto;
        $this->que_6_1;
        $this->que_6_texto;
        $this->que_7_1;
        $this->que_7_2;
        $this->que_7_3;
        $this->que_7_4;
        $this->que_7_5;
        $this->que_7_6;
        $this->que_7_texto;
        $this->que_8_1;
        $this->que_8_2;
        $this->que_8_3;
        $this->que_8_4;
        $this->que_8_5;
        $this->que_8_6;
        $this->que_8_7;
        $this->que_8_8;
        $this->que_8_9;
        $this->que_8_texto;
        $this->que_9_1;
        $this->que_9_texto;
        $this->que_10_1;
        $this->que_10_texto;
        $this->que_11_texto;
        $this->for_nome;
        
    }

    public function getQueCodigo() {
        return $this->que_codigo;
    }
    
//metodos sets
    public function setQueCodigo($que_codigo) {
        $this->que_codigo = $que_codigo;
    }

    public function setForCodigo($for_codigo) {
        $this->for_codigo = $for_codigo;
    }

    public function setQueInclusao($que_inclusao) {
        $this->que_inclusao = $que_inclusao;
    }

    public function setQueRespondido($que_respondido) {
        $this->que_respondido = $que_respondido;
    }

    public function setQue1_1($que_1_1) {
        $this->que_1_1 = $que_1_1;
    }

    public function setQue1_2($que_1_2) {
        $this->que_1_2 = $que_1_2;
    }
    
    public function setQue1_3($que_1_3) {
        $this->que_1_3 = $que_1_3;
    }

    public function setQue1_texto($que_1_texto) {
        $this->que_1_texto = $que_1_texto;
    }
    
    public function setQue2_1($que_2_1) {
        $this->que_2_1 = $que_2_1;
    }
    
    public function setQue2_2($que_2_2) {
        $this->que_2_2 = $que_2_2;
    }
    
    public function setQue2_3($que_2_3) {
        $this->que_2_3 = $que_2_3;
    }

    public function setQue2_texto($que_2_texto) {
        $this->que_2_texto = $que_2_texto;
    }
    
    public function setQue3_1($que_3_1) {
        $this->que_3_1 = $que_3_1;
    }
    
    public function setQue3_2($que_3_2) {
        $this->que_3_2 = $que_3_2;
    }
    
    public function setQue3_3($que_3_3) {
        $this->que_3_3 = $que_3_3;
    }
    
    public function setQue3_texto($que_3_texto) {
        $this->que_3_texto = $que_3_texto;
    }
    
    public function setQue4_1($que_4_1) {
        $this->que_4_1 = $que_4_1;
    }
    
    public function setQue4_natureza($que_4_natureza) {
        $this->que_4_natureza = $que_4_natureza;
    }
    
    public function setQue4_parte($que_4_parte) {
        $this->que_4_parte = $que_4_parte;
    }

    public function setQue4_decisao($que_4_decisao) {
        $this->que_4_decisao = $que_4_decisao;
    }

    public function setQue4_texto($que_4_texto) {
        $this->que_4_texto = $que_4_texto;
    }
    
    public function setQue5_1($que_5_1) {
        $this->que_5_1 = $que_5_1;
    }
    
    public function setQue5_natureza($que_5_natureza) {
        $this->que_5_natureza = $que_5_natureza;
    }
    
    public function setQue5_parte($que_5_parte) {
        $this->que_5_parte = $que_5_parte;
    }
    
    public function setQue5_decisao($que_5_decisao) {
        $this->que_5_decisao = $que_5_decisao;
    }
    
    public function setQue5_texto($que_5_texto) {
        $this->que_5_texto = $que_5_texto;
    }
    
    public function setQue6_1($que_6_1) {
        $this->que_6_1 = $que_6_1;
    }
    
    public function setQue6_texto($que_6_texto) {
        $this->que_6_texto = $que_6_texto;
    }

    public function setQue7_1($que_7_1) {
        $this->que_7_1 = $que_7_1;
    }
    
    public function setQue7_2($que_7_2) {
        $this->que_7_2 = $que_7_2;
    }
    
    public function setQue7_3($que_7_3) {
        $this->que_7_3 = $que_7_3;
    }
    
    public function setQue7_4($que_7_4) {
        $this->que_7_4 = $que_7_4;
    }
    
    public function setQue7_5($que_7_5) {
        $this->que_7_5 = $que_7_5;
    }

    public function setQue7_6($que_7_6) {
        $this->que_7_6 = $que_7_6;
    }

    public function setQue7_texto($que_7_texto) {
        $this->que_7_texto = $que_7_texto;
    }

    public function setQue8_1($que_8_1) {
        $this->que_8_1 = $que_8_1;
    }
    
    public function setQue8_2($que_8_2) {
        $this->que_8_2 = $que_8_2;
    }
    
    public function setQue8_3($que_8_3) {
        $this->que_8_3 = $que_8_3;
    }
    
    public function setQue8_4($que_8_4) {
        $this->que_8_4 = $que_8_4;
    }

    public function setQue8_5($que_8_5) {
        $this->que_8_5 = $que_8_5;
    }

    public function setQue8_6($que_8_6) {
        $this->que_8_6 = $que_8_6;
    }

    public function setQue8_7($que_8_7) {
        $this->que_8_7 = $que_8_7;
    }

    public function setQue8_8($que_8_8) {
        $this->que_8_8 = $que_8_8;
    }

    public function setQue8_9($que_8_9) {
        $this->que_8_9 = $que_8_9;
    }

    public function setQue8_texto($que_8_texto) {
        $this->que_8_texto = $que_8_texto;
    }

    public function setQue9_1($que_9_1) {
        $this->que_9_1 = $que_9_1;
    }

    public function setQue9_texto($que_9_texto) {
        $this->que_9_texto = $que_9_texto;
    }

    public function setQue10_1($que_10_1) {
        $this->que_10_1 = $que_10_1;
    }
    
    public function setQue10_texto($que_10_texto) {
        $this->que_10_texto = $que_10_texto;
    }

    public function setQue11_texto($que_11_texto) {
        $this->que_11_texto = $que_11_texto;
    }

}