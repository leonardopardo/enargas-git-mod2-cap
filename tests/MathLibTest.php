<?php

use src\Libraries\MathLib;
use PHPUnit\Framework\TestCase;

class MathLibTest extends TestCase {

    private $ob;

    public function setUp(): void{
        $this->ob = new MathLib;
    }

    public function test_debe_sumar_dos_numeros_positivos(): void{
        $this->assertEquals(12, $this->ob->sumarNaturales(7,5));
    }

    public function test_debe_sumar_y_retornar_positivo_con_dos_numeros_negativos(): void{
        $this->assertEquals(12, $this->ob->sumarNaturales(-7,-5));
    }

    public function test_debe_sumar_varios_numeros(): void{
        $this->assertEquals(15, $this->ob->sumarNaturales(1,2,3,4,5));
    }

    public function test_debe_sumar_los_n_primeros_numeros_naturales(): void{
        $this->assertEquals(15, $this->ob->sumaGaussiana(5));
    }
}