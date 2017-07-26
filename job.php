<?php
	
	$example=array(
		array('gbutton'.'google'),
		array('ybutton'.'yahoo'),
	);
	
	for($r=0;$r<count($example);$r++)
	{
		$a=$example[$r][0];
		$b=$example[$r][1];

		echo "<script>\n";
			echo "$(\'button#{$a}\').click(\n";
				echo "function(){\n";
					echo "window.open(\'http://{$b}.com\');\n";
				echo "}\n";
			echo ");\n";
		echo "</script>\n";
	}
?>

<button id="gbutton">click</button>

<br><br>

As you can see (if you are capable), this is about inserting javascript into a php array.<br>
Job description is very simple, just make it work.<br><br>
Financial part:<br>
We will certainly not stay here on freelancer and chat with everyone. This project is open to everybody and will under no circumstance be awarded to anyone. The first who solves it, gets the promised amount of $500.<br>
Contact us at danmartin78@yahoo.com in case you have any real solid prove that you got it done, we will check your work, and the minute after in case everything turns out to be well, you will get your salary transferred to your paypal account or any other method of your choosing.<br>
Good luck!