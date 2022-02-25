<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UsuariosModel;
class RestUsuarios extends ResourceController
{
  
 protected $modelName = 'App\Models\UsuariosModel';
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
  $usuarios = new UsuariosModel();
  $data = $this->request->getVar('data');
  $response = $usuarios->insertBatch($data);
  return $this->respond($response,200);

}

public function login()
 {
  $usuarios = new UsuariosModel();
  $correo = $this->request->getVar('correo');
  $password = md5($this->request->getVar('password'));
  $response = $usuarios->loginUser($correo,$password);
  
  if (!empty($response)) {
    return $this->respond(array(
        "status" => 200,
        "total_results" => count($response),
        "message" => $response,
        "token" => md5($correo.$password)     
        ));
  } else {
    return $this->respond(array(
        "status" => 404,
        "total_results" => 0,
        "message" => "El email o contraseña no invalido"     
        ));    
  }

}

public function editar()
 {
  $usuarios = new UsuariosModel();
  $data = $this->request->getVar('data');
  $response = $usuarios->updateBatch($data,'id_usuario');
  print_r($response);
}
 
}
