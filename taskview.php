<?php

session_start();

/*if(!isset($_SESSION['username']))
{
    header("location:index.php");
}*/

$username = $_SESSION['username'];

?>
<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

        <!--Navbar-->
        <nav>
            <div class="nav-wrapper green">
                <?php echo"<a href='#' class='brand-logo'>{$username}'s Planner</a>"; ?>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="confirmdel.php">Delete Account</a></li>
                    <li><a href="endsession.php">Logout</a></li>
                </ul>
            </div>
        </nav>
        
        <div class="container center aligned">
            <br>
            <br>
            <div class="row">
                <form method="POST" action="addtask.php">
                    <div class="input-field col s10">
                        <input id="newtask" type="text" class="validate" name="newtask">
                        <label for="newtask">New Task</label>
                    </div>
                    <button class="btn-floating btn-large waves-effect waves-light green" type="submit" name="action"><i class="material-icons">add</i>
                    </button>
                </form>
            </div>
            
            <br>
            <br>
            
            <h3>Tasks</h3>
            <?php	$con = mysqli_connect('localhost','root','admin');
				if(!$con)	{		echo 'Not Connected To Server';	}		
				if(!mysqli_select_db($con,'basictasks'))	
				{		
					echo 'Database Not Selected';	
					}		
					$query = "SELECT * FROM {$username}";	
					$data = mysqli_query($con, $query);	
					$total = mysqli_num_rows($data);		
					if($total != 0)	{		
					while($result = mysqli_fetch_assoc($data))		
					{			
						echo "<div class='row center aligned'>";
                        echo "<h5 class='col s10'>".$result['name']."</h5>";
                        echo "<form action='deltask.php' method='post'>";
                        echo "<input type='hidden' name='name' value='{$result['name']}' />";
                        echo "<button class='btn waves-effect waves-light' type='submit' name='action'>Remove<i class='material-icons right'>remove</i></button>";
                        echo "</form>";
                        echo "</div>";
					}	
				}
				else
				{
					echo "<h5>You Don't Have Any Tasks!</h5>";
				}
				?>
            
        </div>

        <!--JavaScript at end of body for optimized loading-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>