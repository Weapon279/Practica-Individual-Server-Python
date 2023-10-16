<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mostrar Datos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h1>Datos de la Base de Datos</h1>
  
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Departamento</th>
            <th>Grupo</th>
            <th>Carrera</th>
        </tr>
        {% for dato in datos %}
        {{dato}}
      </thead>
      <tbody>
        <tr>
            <td>{{ dato[0] }}</td>
            <td>{{ dato[1] }}</td>
            <td>{{ dato[2] }}</td>
            <td>{{ dato[3] }}</td>
            <td>{{ dato[4] }}</td>
        </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
</div>

</body>
</html>
