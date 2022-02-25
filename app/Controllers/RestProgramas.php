<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ProgramasModel;
class RestProgramas extends ResourceController
{
  
 protected $modelName = 'App\Models\ProgramasModel';
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
  $programas = new ProgramasModel;
  $data = $this->request->getVar('data');
  $response = $programas->insertBatch($data);
  return $this->respond($response,200);

}

public function editar()
 {
  $programas = new ProgramasModel();
  $data = $this->request->getVar('data');
  $response = $programas->updateBatch($data,'id_usuario');
  print_r($response);
}
 
}
