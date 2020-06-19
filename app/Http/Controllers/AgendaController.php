<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Agenda;

use App\TiempoCitas;

class AgendaController extends Controller
{
    public function mostrar_agenda()
    {
    	$m1 = TiempoCitas::all();
    	return view("citas_w.citas",['m1'=>$m1]);
    }

    public function guardar_agenda(Request $request)
    {
    	$correo_cita = $request->correo_cita;
        $telefono_cita = $request->telefono_cita;
    	$fecha_hora_cita = $request->fecha_hora_cita;
    	$comentarios_cita = $request->comentarios_cita;

    	$datos = "Se agendo tu cita para el dia $fecha_hora_cita. Nos pondremos en breve a $telefono_cita. --Mensaje: [$comentarios_cita].";
    	$subject = "Cita Agendada";
        $for = "$correo_cita";
        Mail::raw($datos, function($msj) use($subject,$for){
            $msj->from("grupo_tensa_toluca@grupotensatoluca.com","Grupo Tensa Toluca");
            $msj->subject($subject);
            $msj->to($for);
        });

        $guardar = new Agenda;
        $guardar->correo_cita = $request->correo_cita;
        $guardar->telefono_cita = $request->telefono_cita;
        $guardar->fecha_hora_cita = $request->fecha_hora_cita;
        $guardar->comentarios_cita = $request->comentarios_cita;
        $guardar->save();

        return back();
    }

    public function mostrar_tiempo()
    {
    	return view("citas_w.agenda");
    }

    public function guardar_tiempo(Request $request)
    {
    	$dia_semana = $request->dia_semana;
    	$hora_inicial = $request->hora_inicial;
    	$tiempo_inicial = $request->tiempo_inicial;
    	$hora_final = $request->hora_final;
    	$tiempo_final = $request->tiempo_final;

    	$guardar = new TiempoCitas;
    	$guardar->dia_tiempo = $dia_semana;
    	$guardar->hora_tiempo = "$hora_inicial $tiempo_inicial a $hora_final $tiempo_final";
    	$guardar->save();

    	return back();
    }
}
