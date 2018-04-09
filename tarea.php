<?php 

Class ElPadre{


	public function metodoDelPadre(){
		echo "desde el padre<br>";
	}
}

Class ElHijo extends Elpadre{

	public function metodoDelPadre(){
		echo "desde el hijo<br>";
	}
	public function otroMetodo(){

		parent::metodoDelPadre();

	}
}


//$objeto = new ElHijo();
//$objeto->otroMetodo();


class otraClase{
	public static function MetodoSinObjeto(){
		echo "Sin  objeto";
	}
}

//otraClase::MetodoSinObjeto();

class operacionesAritmeticas {
	public function suma($Valor1,$valor2){
		$resultado=$Valor1 + $valor2;
		return $resultado;
	}//end of suma
	public function resta($valor1,$valor2,$valor3,$valor4,$valor5){
		$res=$valor1-$valor2-$valor3-$valor4-$valor5;
		return $res
	}//end if resta
	public function multiplicar($valor1,$valor2,$valor3,$valor4,$valor5){
		$res=$valor1*$valor2*$valor3*$valor4*$valor5;
		return $res
	}//end if resta
	public function dividir($valor1,$valor2,$valor3,$valor4,$valor5){
		$res=$valor1/$valor2/$valor3/$valor4/$valor5;
		return $res
	}//end if resta
	
}

$ObjetooperacionesAritmeticas = new operacionesAritmeticas();
$ObjetooperacionesAritmeticas ->suma();
echo $ObjetooperacionesAritmeticas->suma();

// tarea hacer lo metodos de operaciones basicas Suma resta multi div 

//recibir hasta 5 elementos 



?>
