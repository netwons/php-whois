<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<table>
			<tr>
				<td>Enter Domain Name</td>
				<td><input type="text" name="domain_name"></td>
				<td>
					<select name="suffix" id="">
						<option value=".com">.com</option>
						<option value=".ir">.ir</option>
						<option value=".in">.in</option>
						<option value=".co.in">.co</option>
						<option value=".net">.net</option>
						<option value=".org">.org</option>
						<option value=".biz">.biz</option>
						<option value=".info">.info</option>
						<option value=".tv">.tv</option>
						<option value=".ca">.tv</option>
					</select>
				</td>
				<tr align="right" colspan="3">
					<td><input type="submit" name="check" value="Check"></td>
					
				</tr>
			</tr>
		</table>
	</form>
	<?php
		if(isset($_POST['check'])){
			if (!empty($_POST['domain_name'])) {
				$name_domain=trim($_POST['domain_name']).$_POST['suffix'];
				$response=@dns_get_record($name_domain,DNS_ALL);
				if (empty($response)) {
					echo "<h2 style='color:green;' >Domain ".$name_domain." is available.</h2>";
				}else{
					echo "<h2 style='color:red;' >Domain ".$name_domain." is taken.</h2>";
				
				}
			}else{
				echo "<h2 style='color:red;' >Error Domain name can not be left empty.</h2>";
				
			}
		}
	?>
</body>
</html>


?>
