<?php
class Funcionario{

    private string $nome;
    private string $cpf;
    private int $numero_dependentes;
    private float $fgts;
    private float $desconto_inss;
    private float $salario_descontado_inss;
    private float $desconto_imposto_renda;
    private float $salario_familia;
    private float $desconto_vale_transporte;
    private float $salario_bruto;
    private float $salario_liquido;

    public function calcular_fgts(){

        $fgts = ($salario_bruto * 8)/100;
        return $this->$salario_bruto - $fgts; 
        
       
    }

    public function calcular_inss(){

        if($salario_bruto <= 1302){

           return $this->$salario_bruto - (7.5 * $salario_bruto)/100;

        }
        elseif($salario_bruto > 1302 && $salario_bruto <= 2571.29){

           return $this->$salario_bruto - (9 * $salario_bruto)/100;

        }
        elseif($salario_bruto > 2571.29 && $salario_bruto <= 3856.94){

           return $this->$salario_bruto - (12 * $salario_bruto)/100;

        }
        else{

            return $this->$salario_bruto - (14 * $salario_bruto)/100;
        }
    }

    public function calcular_imposto_renda(){

        if($salario_bruto >1903.98 && $salario_bruto <= 2826.65){

           return $this->$salario_bruto - (7.5 * $salario_bruto)/100;

        }

        elseif($salario_bruto > 2826.65 && $salario_bruto <= 3751.05){

            return $this->$salario_bruto - (15 * $salario_bruto)/100;

        }
        
        elseif($salario_bruto > 3751.05 && $salario_bruto <= 4664.68){

           return $this->$salario_bruto - (22.5 * $salario_bruto)/100; 

        }

        elseif($salario_bruto > 4664.69){

           return $this->$salario_bruto - (27.5 * $salario_bruto)/100;

        }


  
    public function calcular_salario_liquido(){

        return $this->$salario_bruto - calcular_fgts - calcular_inss - calcular_imposto_renda;        

    }



}


?>