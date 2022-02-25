<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre_completo','nickname','correo_electronico','password','telefono_usuario','genero','fecha_nacimiento',
    'estatura','peso','direccion','codigo_postal','ciudad','estado','pais','rfc','idioma','permisos','estatus','token','id_gym'];

    public function loginUser($correo,$password) { 
        return $this->where("correo_electronico='". $correo."'")->where("password='".$password."'")->find(); 
      } 
}