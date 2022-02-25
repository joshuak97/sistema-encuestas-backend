<?php

namespace App\Models;

use CodeIgniter\Model;

class HorariosModel extends Model
{
    protected $table = 'horarios';
    protected $primaryKey = 'id_horario';
    protected $allowedFields = ['limite_reservas','id_programa','id_usuario','contar_reservas','hora_inicio','hora_fin',
    'lunes','martes','miercoles','jueves','viernes','sabado','domingo','id_sala','restringir_disponibilidad','fecha_inicio_disponibilidad',
    'fecha_fin_disponibilidad','es_live','enlace_clase_live','cambiar_configuracion_horario','reservar_desde_horario','reservar_hasta_horario',
    'unidad_tiempo_desde','unidad_tiempo_hasta','cancelar_reserva_desde','unidad_tiempo_cancelar_reserva','id_gym'];
}