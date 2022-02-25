<?php

namespace App\Models;

use CodeIgniter\Model;

class EmailsModel extends Model
{
    protected $table = 'emails';
    protected $primaryKey = 'id_email';
    protected $allowedFields = ['de','para','programas','total_destinatarios','asunto','mensaje','id_gym'];
}