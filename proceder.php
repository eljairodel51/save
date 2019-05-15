

class operacion{
	public function Debito($costo, $cantidad){
		$descuento= ($costo * $cantidad)*0.05
		$resultado= ($costo*$cantidad)-$descuento;
		return $resultado;
	}
	public function Credito($costo, $cantidad){
		$resultado= ($costo*$cantidad)-$descuento;
		return $resultado;
	}
}
if (isset($_REQUEST['guardar'])) {
	extract($_REQUEST);

 $obj = new operacion();
 $r = $obj-> $operacion($costo,$cantidad);
 echo "su precio total es =".$r;

}
?>