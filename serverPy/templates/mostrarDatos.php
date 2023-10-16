<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Datos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1>Datos de la Base de Datos</h1>
    <div class="row">
  {% for dato in datos %}
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">{{ dato[1] }} {{ dato[2] }}</h5>
          <p class="card-text">
            <strong>ID:</strong> {{ dato[0] }}<br>
            <strong>Nombre:</strong> {{ dato[1] }}<br>
            <strong>Apellido:</strong> {{ dato[2] }}<br>
            <strong>Numero:</strong> {{ dato[3] }}<br>
            <strong>Ocupación:</strong> {{ dato[4] }}<br>
          </p>
          <a href="#" class="btn btn-primary">Ver detalles</a>
        </div>
      </div>
    </div>
    {% if loop.index % 4 == 0 %}
      </div><div class="row">
    {% endif %}
  {% endfor %}
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
