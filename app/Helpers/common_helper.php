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
function vaild_youtube( $header )
{
    $headers = get_headers($header);
    switch($headers[0]) {
	    case 'HTTP/1.0 200 OK':
	    // video valid
	    return $header = 'video valid';
	    break;

	    case '403':
	    // private video
	    return $header =  'private video';
	    break;

	    case 'HTTP/1.0 404 Not Found':
	    // video not found
	    return $header =  'video not found';
	    break;

	    default:
	    // nothing  above
	    return $header =  'nothing  above';
	    break;
    }

}


?>

