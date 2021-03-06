<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Paises</title>
</head>
<body>
    <h1>Paises de la regiòn</h1>

    <table class="table table-bordered table-stripped">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Capital</th>
                <th>Moneda</th>
                <th>Poblaciòn</th>
                <th>Ciudades</th>
            </tr>
        </thead>

        <tbody>
            @foreach($paises as $pais=> $infopais)
                <tr>
                    <td rowspan= '{{ count($infopais["ciudades"]) }}' class="table-primary">
                        {{ $pais}}
                    </td>

                    <td rowspan='{{ count($infopais["ciudades"]) }}' class="table-secondary">
                        {{ $infopais["capital"] }}
                    </td>

                    <td rowspan='{{ count($infopais["ciudades"]) }}' class="table-success">
                        {{ $infopais["moneda"] }}
                    </td>

                    <td rowspan='{{ count($infopais["ciudades"]) }}' class="table-danger">
                        {{ $infopais["población"] }}
                    </td class="table-warning">

                    @foreach( $infopais["ciudades"] as $ciudad)
                        <th class="table-info">
                            {{ $ciudad }}
                        </th>
                    </tr>
                    
                    @endforeach

            @endforeach
        </tbody>

        <tfoot></tfoot>
    </table>

</body>
</html>