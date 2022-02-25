<?php

namespace App\Models;

use CodeIgniter\Model;

class GymModel extends Model
{
    protected $table = 'gym';
    protected $primaryKey = 'id_gym';
    protected $allowedFields = ['nombre_gym','nombre_fiscal_gym','rfc_gym','correo_electronico_gym','telefono_gym',
    'zona_horaria_gym','direccion_gym','codigo_postal_gym','ciudad_gym','estado_gym','pais_gym','website_gym','facebook_page_gym',
    'logo_gym'];
}