<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Doppler EMMS21 Admin</title>
    <style>
      .container {

        margin: 40px;

      }

      .left {
        float: left;
        margin-right: 50px;

      }
    </style>
</head>

<body style="background:rgb(246 246 246 / 23%)">

  <div class="container">
    <img src="https://d9hhrg4mnvzow.cloudfront.net/comercial.fromdoppler.com/demoday/735e243c-logo-doppler.png" with="100">
    <p>
    <h4>EMMS21 ADMIN.</h4>
    </p>
    <br>
    <div>
<?PHP
    require_once('./../config.php');
    require_once('./../services/utils/ipAddress.php');

    if (isVPNUserAdmin()) {

        include "./../db.php";

        $db = new db($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

        $result = $db->query('SELECT pais, medium_utm, count(*) as total FROM registrados GROUP BY pais, medium_utm');
        $registrados = $result->fetchAll();

        $paises = [];
        $total_registrados = 0;
        foreach ($registrados as $key => $registrado) {
            $paises[$registrado['pais']] = empty($paises[$registrado['pais']]) ? 0 : $paises[$registrado['pais']];
            $paises[$registrado['pais']] += $registrado['total'];
            $total_registrados += $registrado['total'];
        }

        $pais = '';
        $primer_loop = true;

        if(!$registrados) {
            echo '<h6>No hay usuarios registrados.</h6>';
        }

        echo '<h6>Total registrados: ' . $total_registrados .'</h6>';
        echo '<ul>';
        foreach ($registrados as $key => $registrado) {
            if ($pais !== $registrado['pais']) { // Encabezado
                $pais = $registrado['pais'];

                if (!$primer_loop) {
                    echo '</ul>';
                    echo '</li>';
                }

                echo '<li>';
                echo '<div>' . $registrado['pais'] . ': ' . $paises[$registrado['pais']] . '</div>';

                echo '<ul>';
            }

            echo '<li>' . $registrado['medium_utm'] . ': ' . $registrado['total'];
            $primer_loop = false;
        }
        echo '</ul>';
    } else {
    ?>
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Error!</h4>
            <p>No tienes permisos para estar aqui!.</p>
        </div>
    <?PHP
    }
    ?>
    </div>
  </div>
</body>
</html>
