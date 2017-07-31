<?php
// class Download {

// 	const URL_MAX_LENGTH = 2050;

// 	// clean url
// 	protected function cleanUrl($url) {
// 		if (isset($url)) {
// 			if (!empty($url)) {
// 				if (strlen($url) < self::URL_MAX_LENGTH) {
// 					return strip_tags($url);
// 				}
// 			}
// 		}
// 	}

// 	// is url
// 	protected function isUrl($url) {
// 		$url = $this->cleanUrl($url);
// 		if (isset($url)) {
// 			if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)) {
// 				return $url;
// 			}
// 		}
// 	}

// 	// return extension
// 	protected function returnExtention($url) {
// 		if ($this->isUrl($url)) {
// 			$end = end(preg_split("/[.]+/", $url));
// 			if(isset($end)) {
// 				return $end;
// 			}
// 		}
// 	}

// 	// Download file
// 	public function downloadFile($url) {
// 		if($this->isUrl($url)) {
// 			$extension = $this->returnExtention($url);
// 			if ($extension) {
// 				$ch = curl_init();
// 				curl_setopt($ch, CURLOPT_URL, $url);
// 				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// 				$return = curl_exec($ch);
// 				curl_close($ch);

// 				$destination = "downloads/file.$extension";
// 				$file = fopen($destination, "w+");
// 				fputs($file, $return);
// 				if (fclose($file)) {
// 					echo "File Download";
// 				}
// 			}
// 		}
// 	}
// }

// $obj = new Download();
// if (isset($_POST['url'])) {
// 	$url = $_POST['url'];
// }


?>
<!-- <form action="http://memcrab/curl.php" method="post">
<input type="text" name="url" maxlength="2000">
<input type="submit" value="Download">
</form> -->
<?php
// if (isset($url)) {
// 	$obj->downloadFile($url);
// }

# 1 data.php

$data = array("name"=>"john", "age"=>31);
$string = http_build_query($data);

$ch = curl_init("http://memcrab/data.php");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
echo "Result: " . $result;
curl_close($ch);

#2 uploads.php
?>
<!-- <form action="http://memcrab/curl.php" method="post" enctype="multipart/form-data">
	<input type="file" name="image">
	<input type="submit" value="Post">
</form> -->
<?php

// if (isset($_FILES['image']['tmp_name'])) {
// 	$ch = curl_init();
	
// 	$cfile = new CURLFile($_FILES['image']['tmp_name'], $_FILES['image']['type'], $_FILES['image']['name']);
// 	$data = array("myimage"=>$cfile);

// 	curl_setopt($ch, CURLOPT_URL, "http://memcrab/uploads.php");
// 	curl_setopt($ch, CURLOPT_POST, true);
// 	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// 	$response = curl_exec($ch);

// 	if ($response == true) {
// 		echo "File posted";
// 	} else {
// 		echo "Error: " . curl_error($ch);
// 	}

// }

