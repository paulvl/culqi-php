<?php
    require 'culqi.php';
    
   Culqi::$codigoComercio = "demo";
    Culqi::$llaveSecreta = "JlhLlpOB5s1aS6upiioJkmdQ0OYZ6HLS2+/o4iYO2MQ=";
    Culqi::$servidorBase = 'https://integ-pago.culqi.com';
    
    try {
        
        $inputJSON = file_get_contents('php://input');
        
        $input= json_decode( $inputJSON, TRUE );
        
        $data = json_decode(Culqi::decifrar($input['respuesta']), TRUE);
        
        echo json_encode($data);
        
    } catch (InvalidParamsException $e) {
        
        echo $e->getMessage()."\n";
        
    }
    ?>
