@extends('admin')
@section('title')
Mostrar buscaqueda completa
@endsection
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<table class="table table-responsive">
	<tr>
		<td>
			Nombre
		</td>
		<td>
			Apellido paterno
		</td>
		<td>
			Apellido materno
		</td>
		<td>
			Correo
		</td>
		<td>
			Área
		</td>
		<td>
			Empresas
		</td>
		<td>
			Usuario
		</td>
		<td>
			Llave
		</td>
		<td>
			Tipo dispoitivo
		</td>
		<td>
			Marca
		</td>
		<td>
			Modelo
		</td>
		<td>
			Serie
		</td>
		<td>
			Numero producto
		</td>
		<td>
			CT_cargador
		</td>
		<td>
			Ram
		</td>
		<td>
			Disco duro
		</td>
		<td>
			Marca procesador
		</td>
		<td>
			Tipo procesador
		</td>
		<td>
			Modelo procesador
		</td>
		<td>
			Velocidad
		</td>
		<td>
			Ip wlan 
		</td>
		<td>
			Mac wlan
		</td>
		<td>
			Ip lan
		</td>
		<td>
			Mac lan
		</td>
		<td>
			Plan celular
		</td>
		<td>
			Imei
		</td>
		<td>
			Extención
		</td>
		<td>
			Estado
		</td>
		<td>
			Programa
		</td>
		<td>
			Versión
		</td>
		<td>
			Fecha adquisición 
		</td>
		<td>
			Tipo adquisición
		</td>
		<td>
			Firma
		</td>
		<td>
			Numero factura
		</td>
		<td>
			Importe total
		</td>
		<td>
			Importe mensual
		</td>
		<td>
			Garantia
		</td>
		<td>
			Año de reemplazo
		</td>
		<td>
			Tipo adquisición
		</td>
	</tr>
	@foreach($busca as $b)
	<tr>
		<td>
			{{$b->nombre}}
		</td>
		<td>
			{{$b->apellido_paterno}}
		</td>
		<td>
			{{$b->apellido_materno}}
		</td>
		<td>
			{{$b->correo}}
		</td>
		<td>
			{{$b->area}}
		</td>
		<td>
			{{$b->empresa}}
		</td>
		<td>
			{{$b->usuario}}
		</td>
		<td>
			{{$b->llave}}
		</td>
		<td>
			{{$b->tipo_dispo}}
		</td>
		<td>
			{{$b->marca}}
		</td>
		<td>
			{{$b->modelo}}
		</td>
		<td>
			{{$b->serie}}
		</td>
		<td>
			{{$b->numero_producto}}
		</td>
		<td>
			{{$b->ct_cargador}}
		</td>
		<td>
			{{$b->ram}}
		</td>
		<td>
			{{$b->disco_duro}}
		</td>
		<td>
			{{$b->marca_procesador}}
		</td>
		<td>
			{{$b->tipo_procesador}}
		</td>
		<td>
			{{$b->modelo_procesador}}
		</td>
		<td>
			{{$b->velocidad}}
		</td>
		<td>
			{{$b->ip_wlan}}
		</td>
		<td>
			{{$b->mac_wlan}}
		</td>
		<td>
			{{$b->ip_lan}}
		</td>
		<td>
			{{$b->mac_lan}}
		</td>
		<td>
			{{$b->plan_celular}}
		</td>
		<td>
			{{$b->imei}}
		</td>
		<td>
			{{$b->extencion}}
		</td>
		<td>
			{{$b->estado}}
		</td>
		<td>
			{{$b->programa}}
		</td>
		<td>
			{{$b->vercion}}
		</td>
		<td>
			{{$b->fecha_adquisicion}}
		</td>
		<td>
			{{$b->tipo_adquisicion}}
		</td>
		<td>
			{{$b->firma}}
		</td>
		<td>
			{{$b->numero_factura}}
		</td>
		<td>
			{{$b->importe_total}}
		</td>
		<td>
			{{$b->importe_mensual}}
		</td>
		<td>
			{{$b->garantia}}
		</td>
		<td>
			{{$b->año_reemplazo}}
		</td>
		<td>
			{{$b->tipo_adquisicion}}
		</td>
	</tr>
	@endforeach
</table>
@endsection