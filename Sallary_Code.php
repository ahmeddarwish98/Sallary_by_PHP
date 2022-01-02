<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SallaryCode</title>
</head>

<body>
<?php

$Hours=$_REQUEST["Hours"];

		  if($Hours == "")
             {
			    echo("<table border=2 width=250 height=50 align=center>");
	            echo("<tr>");
				echo("<td>"); echo("<h2 align=center >"); echo("Please Enter Data"); echo("</td>"); 
				echo("</tr>");
             }

          else if($Hours < 0)
             {
				echo("<table border=2 width=250 height=50 align=center>");
	            echo("<tr>");
				echo("<td>"); echo("<h2 align=center >"); echo("Invaild Data"); echo("</td>");
				echo("</tr>");
	         }
			 
		  else if($Hours > 168 )
             {
				echo("<table border=2 width=250 height=50 align=center>");
	            echo("<tr>");
				echo("<td>"); echo("<h2 align=center >"); echo("Invaild Data"); echo("</td>");
				echo("</tr>");
	         } 
	
	      
		  else if($Hours <= 40)
		      {
			  $Sallary = $Hours * 5 ;
			  
			  echo("<table border=2 width=250 height=50 align=center>");
			  echo("<tr>");
			  echo("<td>"); echo( "Sallary Is ") ; echo("</td>"); 
			  echo("<td>"); echo( $Sallary . " Pounds" ); echo("</td>");
			  echo("</tr>");
			  echo("</table>");
			  }
	    
		   else
		      { 
			    $Sallary = 40* 5 ;
			    $OverTime = $Hours - 40 ;
				$SallaryOverTime = $OverTime * 10 ;
				$TotalSallary = $Sallary + $SallaryOverTime  ;
			    
				echo("<table border=2 width=250 height=200 align=center>");
			   
			    echo("<tr>");
				echo("<td>"); echo( "Sallary Is  " ); echo("</td>");
				echo("<td>"); echo( $Sallary . " Pounds" ); echo("</td>");
			    echo("</tr>");
				
				echo("<tr>");
				echo("<td>"); echo("Over Time Is  "); echo("</td>");
				echo("<td>"); echo($OverTime . " hr"); echo("</td>");
				echo("</tr>");
				
				
				
				echo("<tr>");
			    echo("<td>"); echo("Sallary Over Time Is  "  ); echo("</td>");
				echo("<td>"); echo($SallaryOverTime . " Ponds"); echo("</td>");
				echo("</tr>");
				
				
				
				
				echo("<tr>");
			    echo("<td>"); echo("Total Sallary Is " ); echo("</td>");
				echo("<td>"); echo( $TotalSallary . " Pounds"); echo("</td>");
				echo("</tr>");
			    echo("</table>");
			  }
 
?>
</body>
</html>