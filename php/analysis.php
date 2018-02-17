<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = 'forceofnature'; // Password
$db_name = 'analysis'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$sql = 'SELECT *
		FROM analysis';

$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title>Speed Analysis</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>



<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
          <title>FasTag</title>
          <link rel="icon" href="../images/logo1.png" type="image/png" sizes="16x16">

          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
          <!--Import materialize.css-->
          <link type="text/css" rel="stylesheet" href="../materialize_css/css/materialize.min.css"  media="screen,projection"/>
          <link rel="stylesheet" href="../mdl_css/material.min.css">
          <script src="../mdl_css/material.min.js"></script>

          <meta charset="utf-8" />
          <meta name="format-detection" content="telephone=no" />
          <meta name="msapplication-tap-highlight" content="no" />
          <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <!-- This is a wide open CSP declaration. To lock this down for production, see below. -->
        <!--  <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline'; style-src 'self' 'unsafe-inline'; media-src *" /> -->
          <!--Import jQuery before materialize.js-->

      <script type="text/javascript" src="../materialize_css/js/materialize.min.js"></script>




</head>
<body>
  <div class="well container">

    <center><h2 class="text-danger">Speed Analysis</h2></center>
  <br>
    <table class="table">
      <thead>
        <tr class="info">
          <th>ID</th>
          <th>Registration No</th>
          <th>Speed</th>
          <th>Speed Limit</th>
        </tr>
      </thead>
		<tbody>
		<?php
		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			// $amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['Registation_No'].'</td>
					<td>'.$row['Speed'].'</td>
					<td>'.$row['Speed Limit'].'</td>

				</tr>';

			$no++;
		}?>
		</tbody>

	</table>


</body>
</html>
