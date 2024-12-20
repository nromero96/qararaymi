<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            background-color: #f5f5f5;
        }

        h2 {
            color: #000000;
        }

        h3 {
            color: #000000;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #dbdbdb;
            color: #000000;
        }

        td {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .signature {
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>INSCRIPCIÓN # {{ $datainscription->id }}: En Proceso</h2>
        <p>Estimado(a) <b>{{ $userinfo->name }} {{ $userinfo->lastname }} {{ $userinfo->second_lastname }}</b>,</p>
        <p>Le informamos que su preinscripción para el <b>23º Congreso Peruano de Cirugía Plástica</b> ha sido recibida. El congreso se celebrará del 06 al 09 de noviembre del 2024, en el Swissôtel Lima.</p>

        <!-- Título "Detalle de tu Inscripción" -->
        <h3>Detalle de su inscripción</h3>

        <!-- Tabla de resumen de inscripción con bordes -->
        <table>
            <tr>
                <th>Descripción</th>
                <th>Información</th>
            </tr>
            <tr>
                <td>Nombre Completo</td>
                <td>{{ $userinfo->name }} {{ $userinfo->lastname }} {{ $userinfo->second_lastname }}</td>
            </tr>
            <tr>
                <td>Categoría</td>
                <td>{{ $datainscription->category_inscription_name }}</td>
            </tr>
            <tr>
                <td>Precio</td>
                <td>US$ {{ $datainscription->price_category }}</td>
            </tr>
            <tr>
                <td>Acompañante</td>
                <td>US$ {{ $datainscription->price_accompanist }}</td>
            </tr>
            <tr>
                <td><b>Monto Total</b></td>
                <td>US$ {{ $datainscription->total }}</td>
            </tr>
            <tr>
                <td>Método de Pago</td>
                <td>{{ $datainscription->payment_method }}</td>
            </tr>
        </table>
        <!-- Fin de la tabla -->

        <!-- Recordatorio para ver el proceso de inscripción -->
        <p>Recuerda que puedes ver el proceso de tu inscripción en el siguiente enlace:</p>
        <p><a href="https://spcp2024.rosmarasociados.com/">Ver Proceso de Inscripción</a></p>

        <!-- Mensaje de validación de pago e información -->
        <p>Antes de aprobar su inscripción, validaremos el pago y la información proporcionada.</p>

        <!-- Contacto de soporte -->
        <p>Estamos aquí para ayudarle en caso de cualquier consulta o aclaración adicional. Para mayores detalles, puede contactarse con nosotros a través del e-mail <b>inscripciones@rosmarasociados.com</b></p><br>

        <!-- Firma y contacto del Comité Organizador -->
        <p class="signature">Atentamente,<br>Comité Organizador<br><b>Congreso Cirugía Plástica 2024</b><br>+51 983 481 269<br>inscripciones@rosmarasociados.com</p>
    </div>
</body>
</html>