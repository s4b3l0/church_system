<!DOCTYPE html>
<html>
<head>
	<title>View requests</title>
        <link rel="stylesheet" type="text/css" href="styles/StyleSheet.css"/>
        <link rel="stylesheet" type="text/css" href="styles/style.css"/>
</head>
<body>
	<div id="wrapper">
	<fieldset>
		<form action='<?php echo $_SERVER['PHP_SELF'];?>' method='GET'>
                    <h2><u>My Requests</u></h2>
		<table border="1" class = "responstable">
			<tbody>
			<tr>
				<th>Request Date</th>
				<th>Request Subject</th>
				<th>Request Description</th>
				<th>Options</th>
			</tr></tbody>
			<input type="hidden" name="controller" value="request">
			<input type="hidden" name="action" value="showRequest">

<?php 
	foreach ($request as $request) {
		echo '<tr>
				<td>'.$request->reqDate.'</td>
				<td>'.$request->reqSubject.'</td>
				<td>'.$request->reqDesc.'</td>
				<td><button name="reqid" value='.$request->reqID.'>Cancel Request</button></td>
			</tr>';
	}
	echo "</table>";

?>





 
		</table>
	</form>
		</fieldset>
</div>

</body>
</html>