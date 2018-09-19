<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="styles/StyleSheet.css"/>
        <link rel="stylesheet" type="text/css" href="styles/style.css"/>
        <script src="validate/phone.js"></script>
        <script src="validate/reload.js"></script>
    </head>
    <body>





    
        <?php
        //include 'validate/validate.php';
        ?>

        
    <div id="wrapper">
        <h2><u>Profile Update</u></h2>
        <form name="form1" action=''   method=GET class="responstable" >

                <table border="1"> 
                <tbody>
                    <tr>
                     <th>Initials</th>
                     <th>Surname</th>
                     <th>Address</th>
                     <th>Phone</th>
                     <th>Email</th>
                    </tr>
                    </tbody>

<?php 
foreach ($user as $user) {
    # code...
                    echo " <tr>
                            <td>".$user->initials."</td>
                            <td>".$user->surname."</td>
                            <td>".$user->address."</td>
                            <td>".$user->phone."</td>
                            <td>".$user->email."</td>
                        <tr>";
                    }

echo '</table>';

?>
                    <br>
  <input type=hidden name=controller value='Login'>
            <input type=hidden name=action value='updateProfile'>
            
            <label>Initials:</label><input type="text" name="initials" value="<?php echo $user->initials; ?>"><br>
            <label>Surname:</label><input type="text" name="surname" value="<?php echo $user->surname; ?>"><br>
            <label>Address:</label><input type="text" name="address" value="<?php echo $user->address; ?>"><br>
            <label>Phone:</label><input type="text" name="phone" value="<?php echo $user->phone; ?>"><br>
            <label>Email:</label><input type="text" name="email" value="<?php echo $user->email; ?>"><br><br>
            <input type="submit" name="submit" value="Update">

                
        </form>
            </div>
        
    </body>
</html>
