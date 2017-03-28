<!DOCTYPE html>
<html>
<title>
	files</title>
	<head></head>
	<body>
		<?php
		if (isset($_POST['submitted'])) 
		{
			if (!empty($_POST['quote']) && ($_POST['quote'] !='enter quote here') ) 
			{
				if($fp=fopen('../quotes.txt', 'ab' ))
				{
					stream_encoding($fb , 'utf-8');
		 			flock($fp, LOCK_EX);
					fwrite($fb,"{$_POST['quote']}");
	                flock($fp, LOCK_UN);
					fclose($fb);
					print "<p> your quote has been stored</p>"; 
				}
				else
				{
					print'<p style="color:red;"> your quote could not be stored due to to a system error.</p>';
				}
			}
              else
              {
              	print '<p style="color:red;">please enter a quote';
              }	
		}
		?>
		    <form action = "file.php" method="post">
			<textarea name="quote" rows="5" cols="30">enter a quotation here</textarea>
	<input type ="submit" name="submit" value="calc"/>
		<input type ="hidden" name="submitted" value ="true" />
	</form>
	</body>
</html>