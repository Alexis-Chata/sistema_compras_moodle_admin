<table>
    <thead>
        <tr>
            <th>Cliente</th>
            <th>{{$cliente->paterno." ".$cliente->materno." ".$cliente->name}}</th>
        </tr>
        <tr>
            <th>Email</th>
            <th>{{$cliente->email}}</th>
        </tr>
        <tr>
            <th>Celular</th>
            <th>{{$cliente->celular}}</th>
        </tr>
        <tr>
            <th scope="col" class="text-center">Recibo</th>
            <th scope="col" class="text-center">F. Emisión</th>
            <th scope="col" class="text-center">Termino</th>
            <th scope="col" class="text-center">Total</th>
            <th scope="col" class="text-center">Detalles</th>
            <th scope="col" class="text-center">Estado</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cliente->comprobantes->sortByDesc('correlativo')->sortByDesc('femision') as $recibo)
            <tr>
                <td>
                    @if ($recibo->tipo_comprobante == 1)
                    REC - {{ $recibo->correlativo }}
                    @elseif($recibo->tipo_comprobante == 2)
                    DEV - {{ $recibo->correlativo }}
                    @endif
                </td>
                <td>{{ date('d-m-Y',strtotime($recibo->femision)) }}</td>
                <td>{{ $recibo->termino}}</td>
                <td>Q.{{ $recibo->total}}</td>
                <td>{{ $recibo->detalles->count()}}</td>
                <td>Cancelado</td>
            </tr>
        @endforeach
    </tbody>
</table>
