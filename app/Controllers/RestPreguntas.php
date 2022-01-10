<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\CuestionarioModel;
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
  $pregunta = new PreguntaModel();
  $data = $this->request->getVar('data');
  $response = $pregunta->insertBatch($data);
  return $this->respond($response,200);

}

public function editar()
 {
  $pregunta = new PreguntaModel();
  $data = $this->request->getVar('data');
  $response = $pregunta->updateBatch($data,'id_pregunta');
  print_r($response);
}
 
}
