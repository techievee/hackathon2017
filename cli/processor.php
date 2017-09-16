<?php
	ob_start();
	error_reporting(E_ALL);

	try {
		require_once 'pest/PestJSON.php';
		require_once 'config.php';
		require_once 'resources.php';
		require_once 'helperFunctions.php';

		$pest = new PestJSON('http://'.MultichainParams::HOST_NAME.':'.MultichainParams::RPC_PORT);
		$pest->curl_opts[CURLOPT_FOLLOWLOCATION] = false; // Not supported on hosts running safe_mode!
		$command = explode(' ', trim($_POST['command']));
		$method = $command[0];
		if (!in_array($method, Literals::MULTICHAIN_COMMANDS)) {
			throw new Exception("Invalid command", 1);
		}

		$params = array_splice($command, 1);
		$paramsNew = array();

		foreach ($params as $index => $param) {

			if (is_numeric($param)) {
				$paramsNew[] = floatval($param);
			} 
			else if ($param=="true") {
				$paramsNew[] = true;
			} 
			else if ($param=="false") {
				$paramsNew[] = false;
			}
			else {
				$paramsNew[] = $param;
			}
		}

		$json = array(
					"jsonrpc"=>"1.0",
					"id"=>"curltest",
					"method"=>$method,
					"params"=>$paramsNew
				);

		$userName = MultichainParams::RPC_USER;
		$password = MultichainParams::RPC_PASSWORD;

		$header= array("Authorization: Basic ".base64_encode($userName.":".$password));
		// echo json_encode($json)."<br>";
		$responsearray = $pest->post('/', $json, $header);
		
		if (is_null($responsearray['error'])) {
			$output_str = json_encode($responsearray['result']);
			$output_str = str_replace('\\n', '<br>', $output_str);
			$output_str = str_ireplace('multichain', '', $output_str);
			$output_str = str_ireplace('\\"', '"', $output_str);
			$output_str = preg_split('/examples/i', $output_str)[0];
			$output_str = indent($output_str);
			$output_str = trim($output_str,'"');
			print_r($output_str);
		}
		else
			throw new Exception($responsearray['error']['message'], 1);
		
	    
	}
	catch (exception $ex)
	{
		header("HTTP/1.0 500");
		echo "<font color='red'><b>".$ex->getMessage()."</b></font>";
	}
		
	ob_end_flush();
?>