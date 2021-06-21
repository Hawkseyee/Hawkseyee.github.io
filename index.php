<!DOCTYPE html5>
<html>
	<head>
		<meta charset="utf-8">
		
		<title>Hawkseyee's profile</title>
		
		<!--閃爍開頭\按鈕移動-->
		<style type="text/css">
			#user
			{
			  animation-duration: 1s;
			  animation-name: fadeIn;
			}
			
			#myprofile
			{
			  animation-delay: 1s;
			  animation-name: disappear;
			}
		
		    #aboutmebtn
			{
			  animation-duration: 3s;
			  animation-name: slidein;
		    }
			
			@keyframes fadeIn
			{
			  50% {
				visibility: hidden;
				opacity: 0.5;
			  }
			  
			  75% {
				opacity: 0.75;
			  }
			  100% {
				visibility: visible;
				opacity: 1;
			  }
			}
			
		    @keyframes slidein 
			{
			  from 
			  {
			    margin-left: 100%;
			  }

			  to 
			  {
			    margin-left: 0%;
			  }
		    }
			
			@keysframe disappear
			{
				display: none;
		    }
			

			#aboutmebtn
			{
				border: 0;
				line-height: 1.5;
				padding: 0 20px;
				font-size: 1rem;
				text-align: center;
				color: #fff;
				text-shadow: 1px 1px 1px #000;
				border-radius: 10px;
				background-color: #00008B;
				background-image: linear-gradient(to top left,
												  rgba(0, 0, 0, .2),
												  rgba(0, 0, 0, .2) 30%,
												  rgba(0, 0, 0, 0));
				box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
							inset -2px -2px 3px rgba(0, 0, 0, .6);
			}
			
			#aboutmebtn:hover 
			{
				background-color: #0000FF;
			}

			#aboutmebtn:active 
			{
				box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
							inset 2px 2px 3px rgba(0, 0, 0, .6);
			}
		</style>
	</head>
	<body style="font-family:Microsoft JhengHei">
		<center>
			<h1 id="myprofile">Here is my personal profile information</h1>
		</center>
		
		<div>
			<h2><p id = "user"></p></h2>
		</div>

<?php
		echo "Date:".date();
?>

		
		<div>
			<button id = "aboutmebtn" onclick="showmsg()">Click several times to Know me</button>
			<p id="aboutme1" style=""></p>
			<p id="aboutme2"></p>
			<p id="aboutme3"></p>
			<p id="aboutme4"></p>
		</div>
		<div>
			<figure>																
				<img id="mycat" src="https://images.pexels.com/photos/1170986/pexels-photo-1170986.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="15%" height="auto">
				<figcaption style="color:gray">This is my cat</figcaption>
			</figure>
		</div>
		
		<script>
		do
		{	
			var msg ;
			var user_name = prompt("Please enter your name:");
			
			if(user_name == null || user_name == "")
			{
				 msg = null;
			}
			else 
			{
				 msg = "Hi "+ user_name + ", welcome!";
			}
			
			document.getElementById("user").innerHTML = msg;
		}
		while(msg == null);
			
			document.getElementById("user").innerHTML = msg;
		</script>
		
		<script>
			var count = 0;
			var aboutme1 = 
			"<li>I am an experienced joiner with well developed skills and experience in groundwork, concrete finishing and steel fixing and have worked in the construction industry since 1982.</li>";
			var aboutme2 =
			"<li>I am also a skilled labourer who has supported many different trades over the years. </li>";
			var aboutme3 =
			"<li>I have a full clean UK driving licence with entitlement of up to 7.5 tonne. </li>";
			var aboutme4 =
			"<li>I am keen to return to work after a period of training and personal development which has broadened my skills and experiences.</li><br><br>";
			
				function showmsg()
				{
					count += 1;
					var aboutcount = "aboutme" + count;
					var aboutme;
					switch(count)
					{
						case 1:
							aboutme = aboutme1;
							break;
						case 2:
							aboutme = aboutme2;
							break;
						case 3:
							aboutme = aboutme3;
							break;
						case 4:
							aboutme = aboutme4;
							break;
						default:
							aboutme = "";
							break;
					}
					
					if(count <= 4)
					{
						document.getElementById(aboutcount).innerHTML = aboutme;
					}
				}	
		</script>
		
	</body>
</html>