<?php
class Funcionario{

    private string $nome;
    private string $cpf;
    private string $numero_dependentes;
    private float $fgts;
    private float $desconto_inss;
    private float $salario_descontado_inss;
    private float $desconto_imposto_renda;
    private float $salario_familia;
    private float $desconto_vale_transporte;
    private float $salario_bruto;
    private float $salario_liquido;

    public function calcular_fgts(){

        $this->$salario_bruto = 2000;

    }

    public function calcular_inss(){

        if($salario_bruto <= 1302){

            $this->$salario_bruto - (7.5 * $salario_bruto)/100;

        }
        elseif($salario_bruto > 1302 && $salario_bruto <= 2571.29){

            $this->$salario_bruto - (9 * $salario_bruto)/100;

        }
        elseif($salario_bruto > 2571.29 && $salario_bruto <= 3856.94){

            $this->$salario_bruto - (12 * $salario_bruto)/100;

        }
        else{

            $this->$salario_bruto - (14 * $salario_bruto)/100;
        }
    }

    public function calcular_imposto_renda(){

        $this->$salario_descontado_inss = "";

    }

    public function calcular_salario_familia(){

        $this->$salario_bruto = "";
        $this->$numero_dependentes = "";

    }

    public function calcular_vale_transporte(){

        $this->$salario_bruto = "";

    }

    public function calcular_salario_liquido(){



    }



}


?>