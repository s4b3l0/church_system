<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles/StyleSheet.css"/>
</head>
<body>
 <div id="wrapper">
	<fieldset>
		<legend>Request Information</legend>
		<form name="form1" action='' method='GET' >
			<input type="hidden" name="controller" value="request">
			<input type="hidden" name="action" value="makeRequest">
			<label for='date'>Date</label>
                        <input type='date' name="date" ><br><br>
			<label for='subject'>About:</label>
                        <input type='text' name="subject" ><br><br>
                        <label for='desc'>Describe Briefly</label>
                        <textarea rows="3" cols="50" name="desc"></textarea><br></t>
			<input type="submit" value="Accept Request">



		</form>

</fieldset>
</div>
</body>
</html>