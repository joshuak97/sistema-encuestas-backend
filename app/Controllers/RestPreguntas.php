<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\RespuestaModel;
use App\Models\PreguntaModel;

class RestPreguntas extends ResourceController
{
 protected $modelName = 'App\Models\PreguntaModel';
 protected $format = 'json';

 public function index()
 {
  $results = $this->model->findAll();
  if (!empty($results)) {
    return $this->respond(array(
        "status" => 200,
        "total_results" => count($results),
        "message" => $results     
        ));
  } else {
    return $this->respond(array(
        "status" => 404,
        "total_results" => 0,
        "message" => "No se encontraron resultados"     
        ));    
  }
 }

 public function create()
 {
  $cuestionario = new CuestionarioModel();   
  $pregunta = new PreguntaModel();

  
  
 }
 
}