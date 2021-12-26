<?php

namespace App\Controllers;

use codeIgniter\Controller;
use App\Models\PreguntaModel;

class Preguntas extends BaseController
{
/****************Consultar todos los registros******************** */
    public function index()
    {
        $request = \Config\Services::request();
        $headers = $request -> getHeaders();

        if (array_key_exists('Authorization',$headers) && !empty($headers['Authorization'])) {
            if ($request->getHeader('Authorization') == "Authorization: 123abc") {
                $db = new PreguntaModel();
                $results = $db -> findAll();
                
                if(!empty($results)) {
                 $json = array(
                 "status" => 200,
                 "total_results" => count($results),
                 "message" => $results     
                 );
                } else {
                    $json = array(
                        "status" => 404,
                        "total_results" => 0,
                        "message" => "No se encontraron resultados"     
                        ); 
                }
        
               
            } else {
                $json = array(
                    "status" => 500,
                    "total_results" => 0,
                    "message" => "El token es invalido"     
                    );  
            }
        } else {
            $json = array(
                "status" => 500,
                "total_results" => 0,
                "message" => "Acceso denegado"     
                );  
        }

        echo json_encode($json,true);

    }
/****************Consultar por id******************** */
    public function show($id)
    {
        $db = new PreguntaModel();
        $row = $db -> find($id);
        
        if(!empty($row)) {
         $json = array(
         "status" => 200,
         "total_results" => 1,
         "message" => $row     
         );
        } else {
            $json = array(
                "status" => 404,
                "total_results" => 0,
                "message" => "No se encontraron resultados"     
                ); 
        }

        echo json_encode($json,true);

    }
}