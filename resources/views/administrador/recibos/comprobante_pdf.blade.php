<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            font-family: "gothic";
        }
        .w-15{
            width: 15%;
        }
        .w-10{
            width: 10%;
        }
        .w-18{
            width: 18%;
        }

        .w-20{
            width: 20%;
        }

        .w-60 {
            width: 60%;
        }
        h1,h2,h3,h4,h5 {
            margin: 0px;
            font-weight: 500;
        }
        .color-naranja {
            color : #c65911;
        }
        .bg-naranja {
            color : #c65911;
        }
        .color-gris {
            color : #757171;
        }
        .color-white{
            color: white;
        }

        .color-azul {
            color : #2f75b5;
        }
        .color-azul-a {
            color : #1f4e78;
        }
        .color-rojo {
            color : #c00000;
        }

        .bg-gris {
            background-color: #757171;
        }
        .bg-gris-a {
            background-color: #c3b8b8b9;
        }
        .bg-gris-b {
            background-color: #b3abab59;
        }

        .bg-azul-a {
            background-color: #ddebf7;
        }
        .bg-azul-b {
            background-color: #bdd7ee;
        }
        .bg-azul {
            background-color : #2f75b5;
        }
        .text-right{
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .fw-500 {
            font-weight: 500;
        }
        .fw-300 {
            font-weight: 300;
        }
        .fw-900{
            font-weight: 900;
        }

        .align-middle {
            vertical-align: middle;
        }
        .p-2 {
            padding: 3px;
        }
        .mt-5{
            margin-top: 5px
        }
        table{
            border-collapse: collapse;
        }
        .border-1 {
            border: dotted 1px;
        }
        .border-s {
            border: solid 1px;
        }
        .border-s-azul {
            border: solid 1px #2f75b5;
        }
        .border-s-gris {
            border: solid 1px #757171;
        }
        .fs-28{
            font-size: 28px;
        }
        .fs-23{
            font-size: 23px;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr class="align-top">
                <th class="w-15"><img src="{{public_path('imagenes/logo.jpg')}}" alt="" width="100%"></th>
                <th>
                    <h1 class="color-naranja family-impact">ESPACIO ARQUITECTURA</h1>
                    <h3 class="color-gris family-impact">José Otoniel Calderón Avila, Nit: 3487448-8</h3>
                    <h5 class="color-gris">5a. Avenida y 1a. Calle 5-50, Zona 6, Huehuetenango</h5>
                    <h5 class="color-gris">Móvil : 4729 6758</h5>
                </th>
                <th class="w-15">
                    <div>
                    @if ($recibo->path_pdf)
                        {!! DNS2D::getBarcodeHTML(asset("storage/".$recibo->path_pdf), 'QRCODE',4.5,4.5) !!}
                    @endif
                     </div>
                    <div class="text-center color-naranja fw-900 fs-23 ">RECIBO</div>
                </th>
            </tr>
        </thead>
    </table>
    <table width="100%" class="mt-5">
        <tbody>
            <tr>
                <td class="bg-gris color-white p-2 fw-900">DATOS DEL CLIENTE</td>
                <td class="w-10 p-2"></td>
                <td class="w-20 bg-gris color-white p-2 fw-900 text-center">
                    @if ($recibo->tipo_comprobante == 1)
                    N° DE RECIBO
                    @elseif($recibo->tipo_comprobante == 2)
                    N° DE DEV
                    @endif
                </td>
                <td class="w-18 bg-gris color-white p-2 fw-900 text-center">FECHA</td>
            </tr>
            <tr>
                <td class="p-2 fw-900">{{$recibo->cliente->paterno." ".$recibo->cliente->materno." ".$recibo->cliente->name}}</td>
                <td class="w-10 p-2"></td>
                <td class="p-2 fw-900 text-center">{{$recibo->correlativo}}</td>
                <td class="p-2 fw-900 text-center">{{date("d-m-Y", strtotime($recibo->femision))}}</td>
            </tr>
            <tr class="p-2">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="mt-5">
                <td class="bg-gris color-white p-2 fw-900">DIRECCIÓN</td>
                <td class="w-10 p-2"></td>
                <td class="bg-gris color-white p-2 fw-900 text-center">ID.DEL CLIENTE</td>
                <td class="bg-gris color-white p-2 fw-900 text-center">TÉRMINOS</td>
            </tr>
            <tr>
                <td class="p-2 fw-300">{{Str::limit($recibo->cliente->direccion,45)}}</td>
                <td class="w-10 p-2"></td>
                <td class="p-2 fw-900 text-center">{{$recibo->cliente->identificacion}}</td>
                <td class="p-2 fw-900 text-center">{{$recibo->termino}}</td>
            </tr>
        </tbody>
    </table>

    <table class="mt-5" width="100%">
        <thead class="bg-gris">
            <tr class="bg-gris border-s-gris">
                <th class="bg-gris color-white p-2 fw-900 w-60">DESCRIPCIÓN</th>
                <th class="bg-gris color-white p-2 fw-900">CANT.</th>
                <th class="bg-gris color-white p-2 fw-900">P. UNITARIO</th>
                <th class="bg-gris color-white p-2 fw-900">T</th>
                <th class="bg-gris color-white p-2 fw-900">IMPORTE</th>
            </tr>
        </thead>
        <tbody>
            @php
                $subtotal = 0;
            @endphp
            @foreach ($recibo->detalles as $detalle)
            @php
            if($detalle->tipo == "+"){$subtotal = $subtotal + $detalle->precio*$detalle->cantidad;}
            elseif($detalle->tipo == "-") {$subtotal = $subtotal - $detalle->precio*$detalle->cantidad;}

            @endphp
            <tr>
                <td class="border-1">{{$detalle->descripcion}}</td>
                <td class="border-1 text-center">{{$detalle->cantidad}}</td>
                <td class="border-1 text-center">Q {{$detalle->precio}}</td>
                <td class="border-1 text-center">{{$detalle->tipo}}</td>
                <td class="border-1 text-center">Q {{$detalle->precio*$detalle->cantidad}}</td>
            </tr>
            @endforeach
            @php
                if($recibo->detalles->count() < 10)
                {
                    $nfilas = 10-$recibo->detalles->count();
                }
                elseif($recibo->detalles->count() >= 10)
                {
                    $nfilas = 0;
                }
            @endphp
            @for ($i = 0; $i < $nfilas; $i++)
            <tr>
                <td class="border-1"></td>
                <td class="border-1 text-center"></td>
                <td class="border-1 text-center"></td>
                <td class="border-1 text-center"></td>
                <td class="border-1 text-center">-</td>
            </tr>
            @endfor
            <tr>
                <td class="p-2 bg-gris-a color-rojo text-center">Estatus : Cancelado</td>
                <td class="p-2 bg-gris-b" colspan="3">SUBTOTAL</td>
                <td class="p-2 bg-gris-a text-center">Q {{$subtotal}}</td>
            </tr>
            <tr>
                <td class="p-2">Nota: Este no es un documento contable.</td>
                <td class="p-2 bg-gris-b text-center" colspan="3"></td>
                <td class="p-2 bg-gris-a text-center"></td>
            </tr>
            <tr>
                <td class="p-2"></td>
                <td class="p-2 bg-gris-b" colspan="3">IMPUESTOS</td>
                <td class="p-2 bg-gris-a text-center">-</td>
            </tr>
            <tr>
                <td class="p-2"></td>
                <td class="p-2 bg-gris-b color-gris" colspan="3">TOTAL</td>
                <td class="p-2 bg-gris-a text-center">Q {{$subtotal}}</td>
            </tr>
            <tr>
                <td colspan="5" class="">Total en Letras :</td>
            </tr>
            <tr>
                <td colspan="5" class="text-center p-2 border-s">{{ $total_letra }}</td>
            </tr>
            <tr>
                <td colspan="5" class="text-center p-2">Si tiene alguna duda sobre este recibo, póngase en contacto con</td>
            </tr>
            <tr>
                <td colspan="5" class="text-center p-2">Admin Mad Mid, Móvil: 999 999 999, aprendiendo@hotmail.es</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
