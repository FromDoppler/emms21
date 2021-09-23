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

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $insert = $db->query('INSERT INTO admin21 (eventStatus) VALUES (?)', $_POST['eventStatus']);
  ?>
      <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Well done!</h4>
        <p>Datos actualizados correctamente!.</p>
      </div>
    <?PHP
    }

    $data = $db->query('SELECT * FROM admin21 ORDER BY id DESC LIMIT 1')->fetchArray();
    ?>

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
      <form method="POST">

        <h2>Instancia Actual</h2>

        <fieldset class="row mb-3">
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="eventStatus" value="preevento" <?= ($data['eventStatus'] == "preevento") ? "checked" : "" ?>>
              <label class="form-check-label">
                Pre Evento
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="eventStatus" value="postinicial" <?= ($data['eventStatus'] == "postinicial") ? "checked" : "" ?>>
              <label class="form-check-label">
                Post Dia Inicial
              </label>
            </div>
          </div>
        </fieldset>
        <button type="submit" class="btn btn-primary">Publicar</button>
      </form>
    </div>
  </div>
</body>

</html>

<?PHP
  } else {
?>
  <div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Error!</h4>
    <p>No tienes permisos para estar aqui!.</p>
  </div>
<?PHP
  }
?>