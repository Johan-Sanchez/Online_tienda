<?php session_start();
    require '../functions.php';
    require_once '../models/post_model.php';
    require_once '../models/user_model.php';
    require '../admin/config.php';

if (!isset($_SESSION['usuario'])) {
    header('Location: user_controller.php');
    die();
}

$user= new UserModel();
$email = $_SESSION['usuario'];
$resultado = $user->validate_user($email);

if($resultado['subscription_id'] === NULL){
    header('Location: ../payment/index.php');
    die();
}

 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file_upload_message = '';
    $title               = $_POST['titulo'];
    $description         = $_POST['descripcion'];
    $price               = $_POST['precio'];
    $quantity            = $_POST['cantidad'];
    $category            = $_POST['categoria'];
    $product_type        = $_POST['tipo_prod'];
    $product_status      = $_POST['condicion'];
    $email               = $_SESSION['usuario'];

    

    $file_name              = $_FILES['thumb']['name'];
        $file_size          = $_FILES['thumb']['size'];
        $temp_file_location = $_FILES['thumb']['tmp_name'];
        $valid_file_formats = [
            'jpg',
            'png',
            'gif',
            'bmp',
            'jpeg',
            'PNG',
            'JPG',
            'JPEG',
            'GIF',
            'BMP',
        ];
        $file_extension     = getFileExtension($file_name);

        if ($file_name) {
            if (in_array($file_extension, $valid_file_formats)) {
                if ($file_size < (1024 * 1024)) {
                    include '../admin/config_aws.php';
                    $new_image_name = time().'.'.$file_extension;
                    $response = $s3->putObject(
                        [
                            'Bucket'     => $bucket,
                            'Key'        => $new_image_name,
                            'SourceFile' => $temp_file_location,
                        ]
                    );


                    if ($response) {
                        
                        $uploaded_file_path   = 'http://'.$bucket.'.s3.amazonaws.com/'.$new_image_name;

                        $post   = new PostModel();
                        $result = $post->create_post($title, $description, $price, $quantity,$category,$product_type, $product_status, $uploaded_file_path, $email);
                    } 
                } 
            } 
        } 
}//end if

require '../views/post_form.view.php';
