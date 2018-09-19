
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id = wrapper>
		<fieldset>
			<legend>Service Details</legend>
			<div <?php echo $state ?>>For Sunday service click 
		<a href='?action=AddSunday&controller=services'> here</a></div>
		<br/>
		<form action='' method='get'>
			<input type="hidden" name="action" value="<?php echo $act ?>">
			<input type="hidden" name="controller" value="<?php echo $cont ?>">
			<label for=sermon>Select Sermon</label>
				
				<select name='sermon'> 
					<option value=''> Select Sermon</option>
						<?php 	 
							foreach ($sermon as $sermon) {
								echo "<option value='$sermon->sermonID'>
								$sermon->sermTitle</option>";
						}
						?>
                                </select><br><br>
			<div <?php echo $state ?>><label for=Date>Date Of Service</label>
                            <input type=Date name="Date" min="<?php echo date('Y-m-d') ?>"><br><br>
			<label for=time>Time</label>
                        <input type="time" name="time" value="08:00"></div><br>
			<input type="submit" name="Submit" value="Add To Schedule">
		</form>
		</fieldset>
	</div>
</body>
</html>