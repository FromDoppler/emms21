<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Doppler EMMS21 Admin</title>
    <?PHP
    require_once('./../config.php');
    require_once('./../services/utils/ipAddress.php');

    if (isVPNUserAdmin()) {

        include "./../db.php";

        $db = new db($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);


        $result = $db->query('SELECT pais, medium_utm, count(*) as total FROM registrados GROUP BY pais, medium_utm');
        $registrados = $result->fetchAll();

        $paises = [];
        foreach ($registrados as $key => $registrado) {
            $paises[$registrado['pais']] = empty($paises[$registrado['pais']]) ? 0 : $paises[$registrado['pais']];
            $paises[$registrado['pais']] += $registrado['total'];
        }

        $pais = '';
        $primer_loop = true;

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