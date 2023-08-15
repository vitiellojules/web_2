<?php


echo " Testando alguns codigo em PHP  na sala de aula  no dia 14/08/2023".'<br>'.'<br>';

//Criação do Array



$carros = array('Palio','Corsa','Gol'
,
"siena" =>"Siena");
$brasil["RN"][1] = "Natal";
$brasil["RN"][2] = "Caicó";
$brasil["RN"][3] = "Pau do Ferros";
$brasil["PB"][1] = "João Pessoa";
$brasil["PB"][2] = "Campina Grande";
$brasil["MG"][1] = "Belo Horizonte";
$brasil["MG"][2] = "Araguari";
$brasil["GO"][1] = "Goiânia";
echo $brasil["RN"][1] . "<br>"; //Resultado Natal
echo $brasil["MG"][2] . "<br>"; //Resultado Araguari
echo $brasil["GO"][1] . "<br>"; //Resultado Goiânia
echo $carros[1] . "<br>"; //Resultado Corsa
echo $carros["siena"] . "<br>"; //Resultado Siena

class Computador
{
var $cpu;
function ligar()
{
echo "Ligando computador a {$this->cpu}...";
}

}
$obj = new Computador;
$obj->cpu = "500Mhz";
$obj->ligar();

define("MAXIMO_CLIENTE",100);
echo MAXIMO_CLIENTE; 



echo true .
'<br>';
echo false.
'<br>';
echo __FILE__.'
<br>';
echo __LINE__.
'<br> ';
echo PHP_VERSION .'<br>';

$num = 5000;
function escopo_global_array()
{
 echo $GLOBALS["num"] . "<br>";
$GLOBALS["num"]--;
}
escopo_global_array();
echo " o numero chamado e ". $num . "<br>";
// Uso do Array $Globals


$string = "5";
$numero = 3;
$texto = " Je suis celui que je suis par la grace de Dieu ";

//echo $string+$numero+$texto;



$cidade = "Pau dos Ferros";
$regiao = "Alto Oeste";
$estado = "Rio Grande do Norte";
echo "A cidade de $cidade fica no $regiao do $estado".'<br>'.'<br>'
;

$texto = "Natal";
$futuro_identificador = "cidade";
$$futuro_identificador = $texto;

echo "$cidade é no litoral do RN 
$cidade foi criada dinamicamente a partir do
valor que continha e o uso de $$".'<br>'.'<br>';


$soma = ($valor1 = 4) + 5; 
$valor2 = 20;
$valor3 = 30;
$soma += 1; //$soma fica com 10
$soma += $valor2; //$soma fica com 10+20=30
$soma *= $valor3; //$soma fica com 30*30=900
$soma %= 100;
$saudacao = "Bom ";
$saudacao .= "Dia!"; // configura $saudacao para "Bom Dia!", como em
$saudacao = $saudacao . "Dia!";
echo $saudacao . "Hoje vai ter " .
 $soma . " % tristeza!";


?>