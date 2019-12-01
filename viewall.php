<?php   session_start();?>

<?php include('header.php');?>

<head>
	<title>All Info</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Table/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================Table/================================================-->
	<link rel="stylesheet" type="text/css" href="Table/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table/css/util.css">
	<link rel="stylesheet" type="text/css" href="Table/css/main.css">
<!--===============================================================================================-->
</head>

<?php
   //To initiate connection db.php contains connection to nursery details
   include("db.php");

      $sql = "SELECT * FROM transaction";
 
      $result = mysqli_query($conn,$sql);
      $num = mysqli_num_rows($result);
      if($num > 0)
      {
		echo "<div class='limiter'>
		<div class='container-table100'>
			<div class='wrap-table100'>
				<div class='table100'>
					<span class='contact100-table-title'>
          			TRANSACTION DETAILS
        			</span>
					<table>
						<thead>
							<tr class='table100-head'>
								<th class='column1'>TRANSACTION ID</th>
								<th class='column1'>CUSTOMER ID</th>
								<th class='column1'>PLANT ID</th>
								<th class='column1'>QUANTITY</th>
								<th class='column1'>DATE OF TRANSACTION</th>
								<th class='column1'>AMOUNT</th>
							</tr>
						</thead>
						<tbody>";

	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>
					<td class='column1'>".$row['TID']."</td>
					<td class='column1'>".$row['CID']."</td>
					<td class='column1'>".$row['PID'] ."</td>
					<td class='column1'>".$row['Qty']."</td>
					<td class='column1'>".$row['Dateoftrans'] ."</td>
					<td class='column1'>".$row['Amount'] ."</td>
				</tr>";
			}

		echo "	</tbody>
				</table>
				</div>
				</div>
				</div>";
	}

	else {
		$message = "Error!!\\n No Entires Exist!!" ;
		echo "<script type='text/javascript'>alert('$message');</script>";
	}

?>
<form method='GET' action='Transaction.html'>
	<input type='submit' value = 'BACK'>
</form>
<?php include('footer.php'); ?>