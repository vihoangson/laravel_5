<?php 
if ( ! function_exists( 'd' ) ) {
	function d( $data )
	{
		if(!isset($_SERVER["REMOTE_ADDR"])){
			print_r($data);
		}else{
			ob_start();
			new dBug($data);
			$output = ob_get_contents(); 
			ob_end_clean();
			echo $output;
		}
	}
}
if ( ! function_exists( 'dd' ) ) {
	function dd( $data )
	{
		if(!isset($_SERVER["REMOTE_ADDR"])){
			print_r($data);
		}else{
			ob_start();
			new dBug($data);
			$output = ob_get_contents(); 
			ob_end_clean();
			echo $output;
			die;
		}
	}
}
?>

