<?php
define("INFERIOR",1);
define("SUPERIOR",100);

$numero = rand(INFERIOR, SUPERIOR);
echo "Meu numero da sorte: <br>";
echo $numero."<br>";
?>
<?php
$x = 5; //Ambito global

function meuTeste () {
    echo "<p>A variavel x dentro da função é: $x</p><br>";
    }
    //Ambito local
         meuTeste ();
    echo "<p>A variavel x dentro da função é: $x</p><br>";
   
?>

<?php
$x = 5;
$y = 10;
function numero(){
    global $x, $y;
    $y= $x + $y;
    }
numero();
echo $y;
?>

<?php
//ambito estatico
function teste(){
        static $x = 0;
        echo $x;
        $x++;
    }
echo "<br>";
echo "<br>";
teste();
echo "<br>";
teste();
echo "<br>";
teste();

?>
<?php
echo "<br>Geovane da Costa";
print "<br>Geovane da Costa<br><br>";
?>
<?php
$x = 5;
var_dump($x);
echo "<br>";
?>
<?php
$x = 'Minha string';
$y = "Minha string 2!";
var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";
?>
<?php
$x = 3.14;
var_dump($x);
echo "<br>";
?>
<?php
$x = true;
var_dump($x);
echo "<br>";
?>
<?php
$cars =array("BMW","BYD","AUDI");
var_dump($cars);
echo "<br>";
?>
<?php
$x="Meu Teste";
echo "<br>";
echo substr($x, 3);
?>
 <?php
//<----*Caracteres de escape*---->
 //\' Single Quote
 //\" Double Quote 
 //\$ PhP variables
 //\n New Line
 //\r Carriage Return
 //\t Tab
 //\f Form Feed
 //\ooo Octal Valve
 //\xhh Hex Value
 
$x="Somos os chamados \"Viking\"do norte";
echo $x;
echo"<br>";
?> 

<?PhP
$a=5;
$b=5.34;
$c="25";
var_dump($a);
echo"<br>";
var_dump($b);
echo"<br>";
var_dump($c);
echo"<br>";
var_dump($y);
echo"<br>";
?>
<?PHP
//verifique se o tipo de uma variavel é inteiro
$x=5985;
var_dump(is_int($x));
echo"<br>";
//verificar novamente
$x=3.14;
var_dump(is_int($x));
echo"<br>";
$x=10.123;
var_dump(is_float($x));
echo"<br>";
$x=1.9e411;
var_dump(is_infinite($x));
echo"<br>";
?>

<?PHP
echo"<br>";
$a=25.232;
$b=5489;
$c=12.5e896;
$y="Meu teste";
var_dump(is_string($a));
echo"<br>";
var_dump(is_string($b));
echo"<br>";
var_dump(is_string($c));
echo"<br>";
var_dump(is_string($y));
?>

<?PHP
echo"<br>";
//Converter Float
echo"<br>";
$x=777.45075;
$int_cast=(int)$x;
echo $int_cast;
?>

<?PHP
$octeto=172;
$mascara=248;
$valor= $octeto & $mascara;
echo"<br> Aplicando a operação AAND entre a máscara  e octeto com valor $valor ";
?>
<?PHP
echo"<br>";
$valor = 10;
if ($valor == 15){
 echo "<br> Valor é 15";
}
elseif ($valor >= 10){ 
	echo "Valor é maior ou igual a 10";
}
else {
	echo "Valor é menor que 10";
}
?>
<?PHP
echo"<br>";
$v = "Fabio";
$nome = $v."dos reis";
	echo $nome;

?>	
<?PHP
echo"<br>";
if ($valor === "10"){
echo "Valor é string";
}
else {
echo "Valor não é string";
}
echo"<br><br>";
echo "Agora fazendo cast  no valor atribuido a variavel: <br>";
$valor = (string)10;
if ($valor === "10"){
echo "Valor não é string";
}	 
?>
<?PHP
$a = 10;
$b = 20;
echo($a == 10) && ($b == 20);
echo "<br>";
if (($a == 10) && ($b == 20)){
echo"Ambos os valores estão corretos:<br>";
}
if (($a == 20) && ($b == 20)){
echo"os valores estão corretos:<br>";
}
if (($a == 10) && ($b == 10)){
echo"os valores estão errado:<br>";
}
?>
<?PHP
$a= 3+5 * 4;
$b=(3+5)* 4;
echo "O resultado do calculo é $a";
echo"<br>";
echo "O resultado do calculo é $b";
?>
<?PHP 
$a=10;
$b=9;
$c=5;
$resultado = ($a+$b+$c)/3;
echo"<br> A média é : $resultado";
?>
<?PHP
$a = 10;
$b = 9;
$c = 5;
$resultado = ($a+$b+$c)/3;
echo "<br>A média é : $resultado";

$mensagem ='';
if ($resultado >= 7){
    $mensagem = ' O Aluno foi Aprovado';
}
else {
    $mensagem = ' O Aluno foi Reprovado';
    }
echo "<br>";
echo $resultado . $mensagem;    
?>
<?PHP
echo"<br>";
$nota1=10;
$nota2=10;
$nota3=10;
$nota4=10;
$resultado = ($nota1+$nota2+$nota3+$nota4)/4;
echo "<br>A média é : $resultado";
if ($resultado >= 7){
    echo'O Aluno foi Aprovado';
}
else {
    echo $mensagem = ' O Aluno foi Reprovado';
    }
echo "<br>";
if ($resultado == 0){
	echo' Estude mais para melhorar, cê é louco cria nota mó ruim '; 
}
if ($resultado ==10){
	echo "O Aluno foi Aprovado parabéns já vai para o enem cria";
}
echo"<br>";
?>
<?PHP
echo"<br>";
$num=30; 
if ($num >=20){
 echo"O numero é maior que 20.";	
}
else{
 echo"O numero é menor que 20.";
}
echo "<br>";
?> 
<?PHP
echo "<br>";
$num=22;
$mensagem = '';
if ($num < 20){
	echo $mensagem = "O numero é menor que 20.";
}
elseif ($num > 20 ){
	echo $mensagem = "o numero é maior que 20.";
}
elseif ($num = 20 ){
	echo $mensagem = "o numero é igual a 20.";
}
else
?>
<?PHP
echo"<br>";
$idade=66;
$mensagem='';
if ($idade >= 16 && $idade <= 65) {
	echo $mensagem = 'Ele poderá utilizar o medicamento';
}
elseif ($idade < 10){
	echo $mensagem ='Ele não poderá utilizar o medicamento';
}	
elseif ($idade >= 65){
	echo $mensagem = 'Ele poderá utilizar o medicamento, mas com algumas restrições.';
}
else

?>
<?PHP	
echo"<br>"; 
echo"<br>";             
$a= 5;					//Inter
$b= 3.14;				//Float
$c= "hoje";				//String
$d= True;				//Boleano
$e= NULL;				//NULL

						//Conversão para string	
$a =(string) $a;
$b =(string) $b;
$c =(string) $c;
$d =(string) $d;
$e =(string) $e;

						// Mostrar ao usuario
var_dump ($a);	echo"<br>";	
var_dump ($b);	echo"<br>";	
var_dump ($c);	echo"<br>";
var_dump ($d);	echo"<br>";
var_dump ($e);	echo"<br>";
?>





