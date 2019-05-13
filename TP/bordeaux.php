<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Météo Bordeaux</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
  <a href="index.php">Accueil</a>
  <br>
  <?php $json = file_get_contents('https://www.prevision-meteo.ch/services/json/bordeaux'); ?>
  <?php $json = json_decode($json); ?>
  <div class="container">
    <h2>Météo <?php echo $json->city_info->name; ?></h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th></th>
          <th>Température minimale</th>
          <th>Température maximale</th>
          <th>Temps</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>J+0</td>
          <td>
            <p><?php echo $json->fcst_day_0->tmin; ?>°C</p>
          </td>
          <td><p><?php echo $json->fcst_day_0->tmax; ?>°C</td>
          <td><img src="<?php echo $json->fcst_day_0->icon; ?>" /></td>
        </tr>
        <tr>
          <td>J+1</td>
          <td>
            <p><?php echo $json->fcst_day_1->tmin; ?>°C</p>
          </td>
          <td><p><?php echo $json->fcst_day_1->tmax; ?>°C</td>
          <td><img src="<?php echo $json->fcst_day_1->icon; ?>" /></td>
        </tr>
        <tr>
          <td>J+2</td>
          <td>
            <p><?php echo $json->fcst_day_2->tmin; ?>°C</p>
          </td>
          <td><p><?php echo $json->fcst_day_2->tmax; ?>°C</td>
          <td><img src="<?php echo $json->fcst_day_2->icon; ?>" /></td>
        </tr>
        <tr>
          <td>J+3</td>
          <td>
            <p><?php echo $json->fcst_day_3->tmin; ?>°C</p>
          </td>
          <td><p><?php echo $json->fcst_day_3->tmax; ?>°C</td>
          <td><img src="<?php echo $json->fcst_day_3->icon; ?>" /></td>
        </tr>
        <tr>
          <td>J+4</td>
          <td>
            <p><?php echo $json->fcst_day_4->tmin; ?>°C</p>
          </td>
          <td><p><?php echo $json->fcst_day_4->tmax; ?>°C</td>
          <td><img src="<?php echo $json->fcst_day_4->icon; ?>" /></td>
        </tr>
      </tbody>
    </table>
  </div>
</body>

</html>