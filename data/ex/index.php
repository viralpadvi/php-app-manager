<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set("Asia/Kolkata");
header('Access-Control-Allow-Origin: *');  //I have also tried the * wildcard and get the same response
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
/*if(!isset($_SESSION["admin_id"])) {
  header("location:login.php");
}*/
include_once '/../lib/dao.php';
include_once '/../lib/model.php';
// create a is_object
$d = new dao();
$m = new model();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>GET DATA | APPDEVINC</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
			
		<div class="container">

			<div class="row">
				<div class="col-lg-6">
				<h2 align="center"><a href="#" title="Dynamically Add or Remove input fields in PHP with JQuery">Add or Remove input fields</a></h2><br />
			<div class="form-group">
				<form action="" method="POST">
					<div class="col-sm-3">
					<h4>Enter Url: </h4>
				</div>
					
					<input type="text" name="url" placeholder="Enter your url" class="form-control name_list" />
					</div>
					
					<div class="table-responsive">
						<table class="table table" id="dynamic_field">
							<tr>
								<td><input type="text" name="token" placeholder="Enter your token" class="form-control name_list" /></td>
								<td><input type="text" name="link" placeholder="Enter your url" class="form-control name_list" /></td>
								<!-- <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td> -->
							</tr>
						</table>
						<input type="submit" name="notification" class="btn btn-info" value="Submit" />
					</div>
				
				</form>
			</div>
		</div>
				</div>
	

				<div class="col-lg-6">

<?php


class Curl
{
    /** @var resource cURL handle */
    private $ch;

    /** @var mixed The response */
    private $response = false;

    /**
     * @param string $url
     * @param array  $options
     */
    public function __construct($url, array $options = array())
    {
        $this->ch = curl_init($url);

        foreach ($options as $key => $val) {
            curl_setopt($this->ch, $key, $val);
        }

        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
    }

    /**
     * Get the response
     * @return string
     * @throws \RuntimeException On cURL error
     */
    public function getResponse()
    {
         if ($this->response) {
             return $this->response;
         }

        $response = curl_exec($this->ch);
        $error    = curl_error($this->ch);
        $errno    = curl_errno($this->ch);

        if (is_resource($this->ch)) {
            curl_close($this->ch);
        }

        if (0 !== $errno) {
            throw new \RuntimeException($error, $errno);
        }

        return $this->response = $response;
    }

    /**
     * Let echo out the response
     * @return string
     */
    public function __toString()
    {
        return $this->getResponse();
    }
}


  $app_id=$_POST['url'];
   $q=$d->select('tbl_api_fetch_url',"id='$app_id'");
   $data=mysqli_fetch_array($q);
  
    $url=$data['link'];
  
$token=isset($_POST['token'])?$_POST['token']:'';
$link=isset($_POST['link'])?$_POST['link']:'';

$curl = new Curl($url, array(
    CURLOPT_POSTFIELDS => array('token' => $token,
'link' => $link)
));

try {
	echo '<hr/><h3>Request </h3><p><pre>';
    echo $curl;
	 echo '</pre></p>';
} catch (\RuntimeException $ex) {
	
    die(sprintf('Http error %s with code %d', $ex->getMessage(), $ex->getCode()));
}

?>	
</div>
				</div>
		</div>
	</body>
</html>

