	<?php 
	if (isset($_REQUEST['ra']) && isset($_REQUEST['ha']))
{

			function volume($r,$h)
					{
						$pi = 3.14;
						$v = $pi * $r*$r*$h;
						echo "Volume is $v";	
					}

				$ra= $_REQUEST['ra'];
				$ha= $_REQUEST['ha'];
				volume($ra,$ha);
		
}
		
	?>