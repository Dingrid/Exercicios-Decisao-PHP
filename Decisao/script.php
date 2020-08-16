<html>
<head>
<title>Resultados</title>
<link rel="stylesheet" href="css.css">
<meta charset="utf-8">
</head>
<body>

<fieldset id="resp">
<legend>Respostas</legend>
<?php
	//FEITO POR INGRID DE ASSIS SOUZA
	
	//EXERCÍCIO 1
	
	echo"<p>1- A nota final de um estudante é calculada a partir de três notas atribuídas respectivamente a um trabalho de laboratório, 
		a uma avaliação semestral e a um exame final. A média das três notas mencionadas obedece aos pesos 2, 3 e 5, respectivamente. Elaborar 
		um programa em C que receba as três notas, calcule e mostre a média ponderada e o conceito sendo: 
		Conceito A – 10 a 8; 
		Conceito B – 8 a 7; 
		Conceito C – 7 a 6; 
		Conceito D – 6 a 5; 
		Conceito E – 5 a 0.</p>";
		
	$nota1= isset ($_GET["nota1"])?$_GET["nota1"]:"[não informado]";
	$nota2= isset ($_GET["nota2"])?$_GET["nota2"]:"[não informado]";
	$nota3= isset ($_GET["nota3"])?$_GET["nota3"]:"[não informado]";
	
	$peso1= 2;
	$peso2= 3;
	$peso3= 5;
	$somapeso= $peso1+$peso2+$peso3;
	$multi= ($nota1+$peso1)+($nota2*$peso2)+($nota3*$peso3);
	$mediap= $multi/$somapeso;
	echo"A sua média foi de $mediap <br /> ";
	if ($mediap>=8 && $mediap<=10)
	{
		echo"Conceito A<br />";
	}
	elseif ($mediap>=7 && $mediap<8)
	{
		echo"Conceito B<br />";
	}
	if ($mediap>=6 && $mediap<7)
	{
		echo"Conceito C<br />";
	}
	if ($mediap>=5 && $mediap<6)
	{
		echo"Conceito D<br />";
	}
	if ($mediap>=0 && $mediap<5)
	{
		echo"Conceito E<br />";
	}
	
	//EXERCÍCIO 2
	
	echo"<p>2- Faça um programa que receba três notas de um aluno, calcule e mostre a média aritmética 
		e a mensagem constante na tabela a seguir. Aos alunos que ficaram para 
		exame, calcule e mostra a nota que deverão tirar para serem aprovados, considerando que a média exigida é 6,0.</p>";
	
	$n1= isset ($_GET["n1"])?$_GET["n1"]:"[não informado]";
	$n2= isset ($_GET["n2"])?$_GET["n2"]:"[não informado]";
	$n3= isset ($_GET["n3"])?$_GET["n3"]:"[não informado]";
	
	$nota= ($n1 + $n2 + $n3)/3;
	echo "A média do aluno é: $nota e ele foi para ";
	if ($nota>=0 && $nota<3)
	{
		echo"Reprovado";
	}
	elseif ($nota>=3 && $nota<7)
	{
		echo"Exame <br />";
		 $mediaaprov= 6-$nota*3;
		 echo"O aluno deverá tirar a nota $mediaaprov para ser aprovado. <br />";
	}
	elseif ($nota>=7 && $nota<=10)
	{
		echo"Aprovado <br />";
	}
	
	//EXERCÍCIO 3
	echo"<p> 3- Faça um programa que receba dois números e mostre o maior. </p>";
	
	$a= isset ($_GET["l"])?$_GET["l"]:"[não informado]";
	$b= isset ($_GET["m"])?$_GET["m"]:"[não informado]";
	
	if ($a > $b)
	{
		echo "$a é maior que $b <br />";
	}
	else
	{
		echo" $b é maior que $a <br />";
	}
	
	
	//EXERCÍCIO 4
	echo"<p> 4- Faça um programa que receba três números e 
	mostre-os em ordem crescente. Suponha que o usuários digitará três números diferentes.</p>";
	
	$a= isset ($_GET["a"])?$_GET["a"]:"[não informado]";
	$b= isset ($_GET["b"])?$_GET["b"]:"[não informado]";
	$c= isset ($_GET["c"])?$_GET["c"]:"[não informado]";
	//coloca em ordem
	if ($a<$b && $a<$c && $b<$c){
         echo"$a , $b , $c <br />";
								}
   elseif ($a<$b && $a<$c && $b>$c) {
      echo"$a , $c , $b <br />";
									}
	elseif($b<$a && $b<$c && $a<$c) {
        echo"$b , $a , $c <br />";
									}
	elseif($b<$a && $b<$c && $a>$c) {
				echo"$b , $c , $a <br />";
									}
	elseif($c<$a && $c<$b && $a>$b) {
		echo"$c , $a , $b <br />";
									}
	elseif($c<$a && $c<$b && $a>$b) {
		echo"$c, $b, $a <br />";
									}
																							
		
		//EXERCÍCIO 5
	echo"<p>5- </p>";
	$a= isset ($_GET["num1"])?$_GET["num1"]:"[não informado]";
	$b= isset ($_GET["num2"])?$_GET["num2"]:"[não informado]";
	$c= isset ($_GET["num3"])?$_GET["num3"]:"[não informado]";
	$d= isset ($_GET["num4"])?$_GET["num4"]:"[não informado]";
				
				if ($d>$b && $d>$c && $d>$s ){
					echo "$c, $b, $a ,$d<br />";
				}
				elseif( $c>$d ){
					echo "$d, $c, $b, $a<br />";
				}
				elseif ($d>$b && $d<$a){ 
					echo "$c, $b, $d, $a<br />";
				}
					else
						echo "$c, $d, $b, $a<br />";

		
		
		//EXERCÍCIO 6
		echo"<p>6- Faça um programa que receba um número inteiro e verifique se é ímpar ou par.</p>";
		
	$num1= isset ($_GET["valor"])?$_GET["valor"]:"[não informado]";

		
		if (($num1%2)==1)  {
			echo"O número é ímpar <br />";
								}
		else {
			echo"O número é par <br />";
			}
			
		//EXERCÍCIO 7
	echo"<p>7- </p>";
	$a= isset ($_GET["num1"])?$_GET["num1"]:"[não informado]";
	$b= isset ($_GET["num2"])?$_GET["num2"]:"[não informado]";
	$c= isset ($_GET["num3"])?$_GET["num3"]:"[não informado]";
	$d= isset ($_GET["num4"])?$_GET["num4"]:"[não informado]";
				
					

		
		//EXERCÍCIO 8
		
		echo"<p>8- </p>";
		
		$num1= isset ($_GET["num1"])?$_GET["num1"]:"[não informado]";
		$num2= isset ($_GET["num2"])?$_GET["num1"]:"[não informado]";
		$opcao= isset ($_GET["calcula"])?$_GET["calcula"]:"[não informado]";
		
		if ($opcao=='soma')
		{
				$soma= $num1+ $num2;
				echo"A soma dos dois números é igual a $soma. <br />";
		}
				if ($opcao=='raizq')
		{
				$raiz1= sqrt($num1);
				$raiz2= sqrt($num2);
				echo"A raiz de $num1 é $raiz1. <br />";
				echo"A raiz de $num2 é $raiz2.<br />";
		}
		
		//EXERCÍCIO 9
		echo"<p>9- </p>";
		$data = date("j/F/Y H:i");
		echo "$data"; 

		
		//EXERCÍCIO 10
		echo"<p>10- </p>";
		
			$data1= isset ($_GET["data1"])?$_GET["data1"]:"[não informado]";
			$data2= isset ($_GET["data2"])?$_GET["data2"]:"[não informado]";

		
		if ($data1>$data2)  {
			echo"$data1 é maior que a $data2.<br />";
								}
		else {
			echo"$data2 é maior que a $data1.<br />";
			}
			
		
		//EXERCÍCIO 11
		
		//EXERCÍCIO 12
		echo"<p>12- </p>";
			$sal= isset ($_GET["salario"])?$_GET["salario"]:"[não informado]";
			$cargo= isset ($_GET["cargo"])?$_GET["cargo"]:"[não informado]";
				//CALCULA O AUMENTO DEPENDENDO DAS CONDIÇÕES DO SALARIO
				switch ($cargo) 
				{
					case 'Escrituario':
						$aumento = ($sal*50)/100;
						$salt= $sal+ $aumento;
						echo"O seu aumento vai ser de R$ $salt <br />";
						break;

					case 'Secretario':
						$aumento = ($sal*35)/100;
						$salt= $sal+ $aumento;
						echo"O seu aumento vai ser de R$ $salt <br />";
						break;

					case 'Caixa':
						$aumento = ($sal*20)/100;
						$salt= $sal+ $aumento;
						echo"O seu aumento vai ser de R$ $salt <br />";
						break;

					case 'Gerente':
						$aumento = ($sal*10)/100;
						$salt= $sal+ $aumento;
						echo"O seu aumento vai ser de R$ $salt <br />";
						break;	
					
					case 'Diretor':
						$aumento = 0; 
						$salt= $sal+ $aumento;
						echo"O seu aumento vai ser de R$ $salt <br />";
						break;
				}
				
			

//EXERCÍCIO 13
echo"<p>13- </p>";
		
$sal= isset ($_GET["salario13"])?$_GET["salario13"]:"[não informado]";
$opcao= isset ($_GET["opcao"])?$_GET["opcao"]:"[não informado]";

 if ($opcao == 'imposto')
 {  
 if ($sal< 500)
		{
$imposto= (5 * $sal)/100;
echo"O imposto é de R$ $imposto<br />";
		}
if ($sal>= 500 && $sal<=850);
{
$imposto= (10 * $sal)/100;
echo"O imposto é de R$ $imposto<br />";
}
if ($sal >850);
{
$imposto= (15 * $sal)/100;
echo"O imposto é de R$ $imposto<br />";
}
 }
 
     if ($opcao == 'novosal')
	 {
   if ($sal <450)
{
$aumento= 100+ $sal;
echo"O aumento é de R$ $aumento";
}
   if ($sal >1500)
{
$aumento= 25+ $sal;
echo"O aumento é de R$ $aumento";
}
  if ($sal >=750 && $sal<=1500)
{
$aumento= 50+ $sal;
echo"O aumento é de R$ $aumento";
}
  if ($sal >=450 && $sal<=750)
{
$aumento= 75+ $sal;
echo"O aumento é de R$ $aumento";
}
	 }
  if ($opcao == 'classificacao')
  {
   if ($sal <=700)
{
echo"Mal remunerado";
}
   if ($sal >700)
{
echo"Bem remunerado";
}
  }


		
		//EXERCÍCIO 14
		   echo "<p>14- </p>" ;
			$salarioa= isset ($_GET["salario"])?$_GET["salario"]:"[não informado]";
	//CALCULA O NOVO SALARIO SENDO BONIFICACAO=SALARIO TOTAL
             if ($salarioa<=500) {
     
				$bonificacao=((5 *$salarioa)/100)+150 + $salarioa;
				echo"Seu salário com a bonificação e auxílio escola é R$ $bonificacao "; 
					}
			elseif ($salarioa>=500 && $salarioa<=600){
                $bonificacao=((12 *$salarioa)/100)+150 + $salarioa;
                echo"Seu salário com a bonificação é R$ $bonificacao";
														}
			elseif ($salarioa>600 && $salarioa<=1200){
                $bonificacao=((12 *$salarioa)/100)+100 + $salarioa;
                echo"Seu salário com a bonificação é R$ $bonificacao";
														}
			elseif ($sal>1.200){
			echo"Sem bonificação";
			$bonificacao= $salarioa +100;
			echo"Seu novo salário é R$ $bonificacao";
								}
			
			
//EXERCÍCIO 15
echo"<p>15- </p>";

$salmin= isset ($_GET["salmin"])?$_GET["salmin"]:"[não informado]";
$horatrab= isset ($_GET["horatrab"])?$_GET["horatrab"]:"[não informado]";
$horae= isset ($_GET["horae"])?$_GET["horae"]:"[não informado]";
$depen= isset ($_GET["depen"])?$_GET["depen"]:"[não informado]";


$valorht = $salmin/5;
$salmes = $horatrab * $valorht; 
$valordepen = $depen*32; 
$valorhe = $horae*((($valorht * 50)/100) + $valorht); 

$salb = $salmes+ $valordepen+ $valorhe; 

  if($salb<200){
  echo "Isento<br /> ";
    }
  elseif($salb>=200 && $salb<=500){
  $imposto = ($salb*10)/100; 
  echo "O imposto é de R$ $imposto <br /> ";
  } 

  elseif($salb>500) {
  $imposto= ($salb*20)/100; 
  echo "O imposto é de R$ $imposto <br /> ";
  }
   
 $sall = $salb - $imposto; 

  if($sall<=350){
  $gratificacao = 100; 
  echo "A Gratificação é de R$ $gratificacao <br />";
  }  
  elseif($sall>350) {
  $gratificacao = 50;  
  echo "A Gratificação é de R$ $gratificacao <br />";  
  }
  
  $salf = $sall + $gratificacao; 
      echo "O salário final é de R$ $salf"; 	
	  
//EXERCÍCIO 16
echo"<p>16- </p>";

$produto= isset ($_GET["produto"])?$_GET["produto"]:"[não informado]";
$venda= isset ($_GET["media"])?$_GET["media"]:"[não informado]";
		

if (($venda < 500) && ($produto < 30)) {
$aumento = ($produto * 10)/100;
echo "Aumento de R$ $aumento";
}
elseif (($venda >= 500) && ($venda < 1.200) && ($produto >= 30) && ($produto < 80)) {
$aumento = (($produto*15)/100);
echo "Aumento de R$ $aumento";
}
elseif (($venda >= 1200) && ($produto >= 80)) {
$dimiuicao = ($produto*20)/100 ;
echo "Redução de R$ $diminuicao";;
}
else {
echo "O preço segue constante";
}

 //EXERCÍCIO 17
 echo"<p>17- </p>";
$a= isset ($_GET["a"])?$_GET["a"]:"[não informado]";
$b= isset ($_GET["b"])?$_GET["b"]:"[não informado]";
$pc= isset ($_GET["c"])?$_GET["c"]:"[não informado]";
//CALCULA O DELTA
$delta= pow($b,2)-4*$a*$c;
//VERIFICA SE A É POSITIVO
if ($a!=0){
	if ($delta>0){
		echo "A equação  tem duas raízes <br />"; 
		$x1= (-$b+sqrt($delta))/(2*$a);
		$x2= (-$b-sqrt($delta))/(2*$a);
		echo "Primeira raíz: $x1 <br />"; 
		echo "Segunda raíz: $x2<br />"; 
	}
		else{
			if ($delta=0){
				echo "A equação tem uma raiz. <br/> "; 
				$x1= -$b/(2*$a);
				echo "Raíz: .$x1 <br />"; 
			}
		}
}
else{
	echo "Não existe uma raiz dentro do conjunto dos números reais.";
}
 
//EXERCÍCIO 18
echo"<p>18- </p>";
$A= isset ($_GET["x"])?$_GET["x"]:"[não informado]";
$B= isset ($_GET["y"])?$_GET["y"]:"[não informado]";
$C= isset ($_GET["z"])?$_GET["z"]:"[não informado]";


if($C<($A+$B) && $B<($C+$A) && $A<($B+$C)) {
   $T= true;
}
else {
   $T=false;
}
if ($T==true && $A==$B && $B==$C && $A==$C){
   echo"O triângulo é equilátero.<br />";
}
elseif ($T==true && $A==$B){
      echo "O triângulo é isóceles.<br />";
}
   elseif($T==true && $A!=$C && $A!=$B && $B!=$C) 
   {
         echo"O triângulo é escaleno. <br />";
   }
         else{ echo"Os números digitados não compõe um triângulo.<br />"; }


//EXERCÍCIO 19
echo("<p>19- </p>");
 $peso= isset ($_GET["peso"])?$_GET["peso"]:"[não informado]";
 $altura= isset ($_GET["altura"])?$_GET["altura"]:"[não informado]";
 
 //MOSTRA A CATEGORIA DA PESSOA
 if($altura<1.20 && $peso<=60)
 {
 echo"Categoria A";
 }
 elseif ($altura<1.20 && $peso>=60 && $peso<=90)
 {
 echo"Categoria D";
 }
 elseif($altura<1.20 && $peso>=90)
 {
 echo"Categoria G";
 }
 elseif ($altura<=1.20 && $altura<=1.70 && $peso<=60)
 {
 echo"Categoria B";
 }
 elseif ($altura<=1.20 && $altura<=1.70 && $peso>=60 && $peso<=90)
 {
 echo"Categoria E";
 }
 elseif($altura<=1.20 && $altura<=1.70 && $peso>90)
 {
 echo"Categoria H";
 }
 elseif ($altura>1.70 && $peso<=60)
 {
 echo"Categoria C";
 }
 elseif($altura>1.70 && $peso>=60 && $peso<=90)
 {	 
 echo"Categoria F";
 }
 elseif($altura>1.70 && $peso>90)
 {
 echo"Categoria I";
 }
 

// EXERCÍCIO 20
echo"<p>20- </p>";
$produto= isset ($_GET["codpro"])?$_GET["codpro"]:"[não informado]";
$peso= isset ($_GET["peso"])?$_GET["peso"]:"[não informado]";
$pais= isset ($_GET["pais"])?$_GET["pais"]:"[não informado]";

$grama= 1000/$peso; //CONVERTE O PESO PARA GRAMAS
echo"O peso é de $grama gramas. <br />";

//CALCULA O PRECO DO PRODUTO
if ($produto>=1 && $produto<=4)
{
$preco=10*$grama;
echo"O preço da carga é R$ $preco <br />";
}
elseif ($produto>=5 && $produto<=7)
{
$preco=25*$grama;
echo"O preço da carga é R$ $preco <br />";;
}
elseif ($produto>=8 && $produto<=10)
{
$preco=35*$grama;
echo"O preço da carga é R$ $preco <br />";
}

//CALCULA O IMPOSTO
if($pais==1)
{
echo"Isento de imposto <br />";
}

elseif($pais==2)
{
$imposto=($preco*15)/100;
echo"O valor do imposto é de R$ $imposto <br />";
}

elseif($pais==3)
{
$imposto=($preco*25)/100;
echo"O valor do imposto é de R$ $imposto <br />";
}
//CALCULA O VALOR TOTAL DO PRODUTO
$precototal=$preco+$imposto;
echo"O preço total do produto é de  R$ $precototal <br />";


//EXERCÍCIO 21

echo"<p>21- </p>";
$codcarga= isset ($_GET["codcarga"])?$_GET["codcarga"]:"[não informado]";
$estado= isset ($_GET["estado"])?$_GET["estado"]:"[não informado]";
$pesot= isset ($_GET["pesocarga"])?$_GET["pesocarga"]:"[não informado]";

$quilo = 1000 / $pesot; //CONVERTE TONALEADA EM QUILOS
echo"O peso da carga é de $quilo quilos<br />";

//PRECO DA CARGA
if ($codcarga>=10 && $codcarga<=20)
{
$preco=100*$quilo;
echo"O preço da carga é de R$ $preco <br />";
}
elseif ($carga>=21 && $carga<=30)
{
$preco=250*$quilo;
echo"O preço da carga é de R$ $preco <br />";
}
elseif ($carga>=31 && $carga<=40)
{
$preco=340*$quilo;
echo"O preço da carga é de R$ $preco <br />";
}
//IMPOSTO DA CARGA
if($estado==1)
{
$imposto=($preco*35)/100;
echo"O imposto é de R$ $imposto <br />";
}
elseif($estado==2)
{
$imposto=($preco*25)/100;
echo"O imposto é de R$ $imposto <br />";
}
elseif($estado==3)
{
$imposto=($preco*15)/100;
echo"O imposto é de R$ $imposto <br />";
}
elseif($estado==4)
{
$imposto=($precocarga*5)/100;
echo"O imposto é de R$ $imposto <br />";
}
elseif($estado==5)
{
$imposto=0;
echo"Isento do imposto <br />";
}

$precototal=$preco+$imposto;
echo"O preço total da carga é de  R$ $precototal";
			
		
		
		//EXERCÍCIO 22
		
		echo"<p>22- </p>";
		
		$salariobase= isset ($_GET["salbase"])?$_GET["salbase"]:"[não informado]";
		$tempo= isset ($_GET["tempo"])?$_GET["tempo"]:"[não informado]";
		
		//CALCULA O IMPOSTO
		
		if ($salariobase < 200)
		{
			echo"isento";
		}
		elseif ($salariobase >= 200 && $salariobase <=450)
		{
			$imposto= (3 * $salariobase)/100;
			echo"O imposto é de R$ $imposto <br />";
		}
		elseif ($salariobase > 450 && $salariobase < 700)
		{
			$imposto= (8 * $salariobase)/100;
			echo"O imposto é de R$ $imposto <br />";
		}
		elseif ($salariobase >= 700)
		{
			$imposto= (12 * $salariobase)/100;
			echo"O imposto é de R$ $imposto <br />";
		}
		
		//CALCULA A GRATIFICAÇÃO
		
		if ($salariobase > 500 && $tempo<= 3)
		{
			$gratificacao= 20 + $salariobase;
			echo"A gratificação é de R$ $gratificacao <br />";
		}
		
		elseif ($salariobase > 500 && $tempo> 3)
		{
			$gratificacao= 30 + $salariobase;
			echo"A gratificação é de R$ $gratificacao <br />";
		}
		
		elseif ($salariobase <= 500 && $tempo<= 3)
		{
			$gratificacao= 23 + $salariobase;
			echo"A gratificação é de R$ $gratificacao <br />";
		}
		
		elseif ($salariobase <= 500 && $tempo>3 && $tempo<6)
		{
			$gratificacao= 35 + $salariobase;
			echo"A gratificação é de R$ $gratificacao <br />";
		}
		
		elseif ($salariobase <= 500 && $tempo>= 6)
		{
			$gratificacao= 33 + $salariobase;
			echo"A gratificação é de R$ $gratificacao <br />";
		}
		
		//CALCULA O SALÁRIO LÍQUIDO
		$salarioliquido= $salariobase - $imposto + $gratificacao;
		echo"O salário líquido é R$ $salarioliquido.<br />";
		
		//MOSTRA A CATEGORIA DO FUNCIONÁRIO
		
		if($salarioliquido <= 350)
		{
			echo" Categoria A <br />";
		}
		elseif($salarioliquido > 350  && $salarioliquido < 600)
		{
			echo" Categoria B <br />";
		}
		elseif($salarioliquido >= 600)
		{
			echo" Categoria C <br />";
		}
		
		
		



//EXERCÍCIO 23

echo"<p>23- </p>"; 
$salmin= isset ($_GET["salminimo"])?$_GET["salminimo"]:"[não informado]";
$horat= isset ($_GET["horatrabalhadas"])?$_GET["horatrabalhadas"]:"[não informado]";
$turno= isset ($_GET["turno"])?$_GET["turno"]:"[não informado]";
$categoria= isset ($_GET["categoria"])?$_GET["categoria"]:"[não informado]";
		
//SALARIO BASE PELO TURNO
if($turno=='matutino'){
	$coeficiente= ($salmin*10)/100;
	$salab= $horat * $coeficiente;
}
	else{
		if($turno=='vespertino'){
			$coeficiente= ($salmin*15)/100;
			$salb= $horat * $coeficiente;
		}
		else{
			if($turno=='noturno'){
				$coeficiente= ($salmin*12)/100;
				$salb= $horat * $coeficiente;
			}
		}
	}
//SALARIO PELA CATEGORIA
if($categoria=='operario'){
	if($salb<300){
		$imposto= ($imposto * 3)/100; 
		echo"O imposto é de R$ $imposto<br />";
	}
	else{
		if($salb>=300){
			$imposto= ($imposto * 5)/100; 
			echo"O imposto é de R$ $imposto<br />";
		}
	}
}
else{
	if($categoria=='gerente'){
			if($salb>=400){
				$imposto= ($imposto * 6)/100; 
				echo"O imposto é de R$ $imposto<br />";
			}
			else{
				if($salb<400){
					$imposto= ($imposto * 4)/100; 
					echo"O imposto é de R$ $imposto<br />";
				}
			}
	}
}
 //GRATIFICACAO PELO TURNO
 if($turno=='noturno' && $horat>80){
	 $salb= $salb+30;
	 echo"O salário base é de R$ $salb<br />";
 }
 if($categoria=='operario' && $coeficiente<=25){
	 $aux= $salb/3;
	 	 echo"O auxílio é de R$ $aux<br />";
 }
	 else{
		 $aux= $salb/2;
		  echo"O auxílio é de R$ $aux<br />";
	 } 
 //SALARIO LIQUIDO
 $sall= $salb-$imposto+$aux;
 
 if($sall<300){
	 echo "Mal remunerado";
 }
 else{
	 if($sall>=350 && $sall<=600){
		 echo "Normal";
	 }
	 else{
		 echo "Bem remunerado";
	 }
 }

//EXERCÍCIO 24

//EXERCÍCIO 25
echo"<p> 25- </p>";
$angulo= isset ($_GET["angulo"])?$_GET["angulo"]:"[não informado]";
  
    if($angulo < 90){
    printf("Está no primeiro quadrante<br />");
 }
    elseif($angulo > 90 &&  $angulo< 180){
    printf("Está no segundo quadrante<br />");
 }
    if($angulo > 180 && $angulo < 270){
    printf("Está no terceiro quadrante<br />");
 }
    if($angulo> 270 && $angulo< 360){
    printf("Está no quarto quadrante<br />");
    }
  
  $volta =$angulo/360;
  echo"O número de voltas é de :$volta ";


?>
</fieldset>
</body>
</html>