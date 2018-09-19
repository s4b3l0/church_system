<html>
    <head>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" type="text/css" href="styles/StyleSheet.css"/>
    </head>
    <body>

<?php
//error_reporting(0);
$rank=$_SESSION['rank'];
switch ($rank) {
    case 1:
           echo 
             "<nav id='navigation'  class='screen'>
                <ul id='nav'><li><a href='?controller=pages&action=home'>Home</a></li>
                    <li><a href ='#'>Requests &#8711</a>
                    <ul><a href='?controller=request&action=makeRequest'>Make Request </a>
                    <a href='?controller=request&action=showRequest'>View requests</a></ul>
                    </li>
                    <li><a href='?controller=announcements&action=viewAnnouncements'> View Anouncements </a></li>
                    <li><a href='?controller=Login&action=updateProfile'>Profile</a></li>
                    <li><a href='?controller=Login&action=logOut'>Logout</a></li>
                </ul>
            </nav>";
        break;
	 case 2:
           echo 
             "<nav id='navigation'  class='screen'>
                <ul id='nav'><li><a href='?controller=pages&action=home'>Home</a></li>
                    <li><a href ='#'>Services &#8711</a>
                    <ul><a href='?controller=services&action=showService'>View Services</a>
                    <a href='?controller=services&action=AddService'>Add Service</a></ul>
                    </li>
                    <li><a href='?controller=announcements&action=viewAnnouncements'>Anouncements </a></li>
                    <li><a href='?controller=Login&action=updateProfile'>Profile</a></li>
                    <li><a href='?controller=Login&action=logOut'>Logout</a></li>
                </ul>
            </nav>";
        break;
     case 3:
           echo 
             "<nav id='navigation' class='screen'>
                <ul id='nav'><li><a href='?controller=pages&action=home'>Home</a></li>
                    <li><a href='?controller=Login&action=updateProfile'>Update Profile </a></li>
                    <li><a href='?controller=memberRank&action=memberRank'>Assign Rank</a></li>
                    <li><a href = '#'>Members &#8711</a>
                    <ul><a href='?controller=Member&action=MemberList'>View Members </a>
                    <a href='?controller=Member&action=deleteMember'>delete Member</a></ul></li>
                    <li><a href='#'>Announcements </a>
                    <ul><a href='?controller=announcements&action=addAnnouncement'>Make</a>
                    <a href='?controller=announcements&action=viewAnnouncements'> View </a></ul></li>
                   <li> <a href='?controller=Login&action=logOut'>Logout</a></li>
                </ul>
            </nav>";
        break;
     case 4:
         echo "<nav id='navigation'  class='screen'>
                <ul id='nav'><li><a href='?controller=pages&action=home'>Home</a></li>
                    <li><a href='?controller=Login&action=updateProfile'>Update Profile </a></li>
                    <li><a href ='#'>Offering &#8711</a>
                        <ul><a href='?controller=offering&action=offering'>Record Offerings </a>
                        <a href='?controller=offering&action=offeringRecord'>View Offering</a></ul>
                        </li>
                    <li><a href='?controller=announcements&action=viewAnnouncements'>Anouncements </a></li>
                    <li><a href='?controller=Login&action=logOut'>Logout</a></li>
					
                </ul>
            </nav>";
    
     break;
    default:
         echo "<nav id='navigation' class='screen'>
                 <ul id='nav'><li><a href='?controller=pages&action=home'>Home</a></li>
                 <li><a href='?controller=Member&action=InsertMember'>Sign up</a></li>
				 <li><a href='?controller=announcements&action=viewAnnouncements'>Anouncements</a></li>
                 <li><a href='?controller=Login&action=login'>Login </a></li>
            </ul> </nav>";
     break;
}?>
    </body>
</html>