<?php
$action = @filter_var($_GET['action'], FILTER_SANITIZE_STRING);

switch($action)
{
	default:
		echo "Enter an IP Address and press enter to scan.";
		die;
	break;

	case "scan":
		if(filter_var($_GET['ip'], FILTER_VALIDATE_IP))
		{
			$ip = $_GET['ip'];
		} else {
			$ip = gethostbyname($_GET['ip']);
		}

		$port = @filter_var($_GET['port'], FILTER_SANITIZE_STRING);
		$conn = @fsockopen($ip, $port);

		if(is_resource($conn))
		{
			$res = "<li class=\"list-group-item list-group-item-success\">Open <span class=\"badge\">".$port."</span></li>";
		} else {
			$res = "<li class=\"list-group-item list-group-item-danger\">Closed <span class=\"badge\">".$port."</span></li>";
		}

		die($res);
	break;
}
?>
