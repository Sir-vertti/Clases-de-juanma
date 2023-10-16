<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Datos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1>Datos de la Base de Datos</h1>
    <table class="table table-dark">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Numero</th>
            <th>Ocupación</th>
           
            <!-- Agrega más columnas según tu base de datos -->
        </tr>
        <tbody
        {% for dato in datos %}
        <tr>
            <td>{{ dato[0] }}</td>
            <td>{{ dato[1] }}</td>
            <td>{{ dato[2] }}</td>
            <td>{{ dato[3] }}</td>
            <td>{{ dato[4] }}</td>
            <td>{{ dato[5] }}</td>
            <td>{{ dato[6] }}</td>
            <td>{{ dato[7] }}</td>
            <td>{{ dato[8] }}</td>
            <td>{{ dato[9] }}</td>
            <td>{{ dato[10] }}</td>
            <!-- Agrega más celdas según tu base de datos -->
        </tr>
        </tbody>
        {% endfor %}
        </table>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
