<?php
include('DB.php');
include('Assets.php');

$output='';
$table=null;
if(isset($_POST['search'])){
	$searchq = $_POST['search'];
	if (empty($searchq)){
		$output = '<div class="container"><h4>You must type a name of index number to search!</h4></div>';
	} else {
	$searchq = preg_replace("#[^0-9a-z] #i", "", $searchq);

	$sql = "SELECT * FROM package WHERE packageName LIKE '%$searchq%'";

	$query = mysqli_query($con,$sql) or die("could not search!");
	$count = mysqli_num_rows($query);
	if ($count == 0){
		$output = 'No result found !';
		$table = '';
	}else{
		$table .= '<div class="container"><table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Packages</th>
        <th></th>
      </tr>
    </thead>' ;
		while ($row = mysqli_fetch_array($query)) {

			$output .= '
    <tbody>
      <tr>
        <td>'. $row['packageName'] .'</td>
        <td align="right"><a href="Rooms.php"><button class="btn btn-outline-info">View</button></a></button>
      </tr>
    </tbody>
' ;
		}
'</table></div>';
	}
 }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Search Results</title>
</head>
<body>
<!-- Header -->
<?php include('Header.php'); ?>
<br><br>
<?php print("$table");?>
<?php print("$output");; mysqli_close($con);?>
</body>
</html>
