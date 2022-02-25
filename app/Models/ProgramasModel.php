<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramasModel extends Model
{
    protected $table = 'programas';
    protected $primaryKey = 'id_programa';
    protected $allowedFields = ['nombre_programa','permitir_reserva_multiple','permitir_cancelar_destiempo','ocultar_numero_reservas',
    'reservar_desde','tiempo_reservar_desde','reservar_hasta','tiempo_reservar_hasta','cancelar_desde','tiempo_cancelar_desde',
    'penalizacion_por_ausencia','para_las_proximas','unidad_tiempo_penalizacion','cambiar_reservar_desde','tiempo_cambiar_reservar_desde',
    'color_identificacion_programa','estatus','id_gym'];
}