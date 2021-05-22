<?php session_start();
	include('../functions.php');
    require_once("../models/post_model.php");
    require "../admin/config.php";

    if (!isset($_SESSION['usuario'])) {
        header('Location: user_controller.php');
        die();
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$file_upload_message = '';
        $title = $_POST['titulo'];
        $description = $_POST['descripcion'];
        $price = $_POST['precio'];
        $quantity = $_POST['cantidad'];
        $product_status = $_POST['condicion'];
        $email = $_SESSION['usuario'] ;

        $file_name = $_FILES['thumb']['name'];
		$file_size = $_FILES['thumb']['size'];
		$temp_file_location = $_FILES['thumb']['tmp_name']; 
		$valid_file_formats = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
		$file_extension = getFileExtension($file_name);
				
			if($file_name) {
				if(in_array($file_extension,$valid_file_formats)) { 
					if($file_size < (1024*1024)) {	
						include('../admin/config_aws.php');				
						$new_image_name = time().".".$file_extension;
						$response = $s3->putObject([
							'Bucket' => $bucket,
							'Key' => $new_image_name,
							'SourceFile' => $temp_file_location
						]);
						
						
						if($response) {
							$file_upload_message = "File Uploaded Successfully to amazon S3.<br><br>";	
							$uploaded_file_path='http://'.$bucket.'.s3.amazonaws.com/'.$new_image_name;
							$file_upload_message .= '<b>Upload File URL:</b>'.$uploaded_file_path."<br/>";
							$file_upload_message .= "<img src='$uploaded_file_path'/>";

							$post = new PostModel();
							$result = $post->create_post($title,$description,$price,$quantity,$product_status,$uploaded_file_path,$email);
								
						} else { 
							$file_upload_message = "<br>File upload to amazon s3 failed!. Please try again.";				
						} 	
					} else {
						$file_upload_message = "<br>Maximum allowed image upload size is 1 MB.";
					}
				} else {
					$file_upload_message = "<br>This file format is not allowed, please upload only image file.";
				}
			} else {
				$file_upload_message = "<br>Please select image file to upload.";
			}
		}
    require '../views/post_form.view.php';
?>
