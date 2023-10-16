<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Datos</title>
</head>
<body>
    <h1>Datos de la Base de Datos</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <!-- Agrega más columnas según tu base de datos -->
        </tr>
        {% for dato in datos %}
        {{dato}}
        <tr>
            <td>{{ dato[0] }}</td>
            <td>{{ dato[1] }}</td>
            <!-- Agrega más celdas según tu base de datos -->
        </tr>
        {% endfor %}
    </table>
</body>
</html>
