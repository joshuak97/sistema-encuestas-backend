<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class RestPreguntas extends ResourceController
{
 protected $modelName = 'App\Models\PreguntaModel';
 protected $format = 'json';

 public function index()
 {
  return $this->respond($this->model->findAll());
 }
 
 private function genericResponse($data,$msj,$code)
 {
    
 }
}