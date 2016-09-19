    <?php require_once("db_const.php");  ?> 
    <html>
    <!doctype html> 
    
    
<head>
    
        <meta charset="utf-8">    
         <title>Chuck Norris Facts</title> 
         <link rel="stylesheet" type="text/css" href="css/styles.css">
     
     	
    
</head>  
     
     
<body>     	 
      
     <header> 
     
         <h1>Chuck Norris Facts</h1>
     
             <?php 
		 
                if ($conn->connect_error) {
			     die('Connect Error: ' . $conn->connect_error);
			     } else {
			 echo '<span class="hint">[Successful connection to MySQL database!]</span>';
			}
		 
		 ?>
         </header>
         
         <?php 
		 $jokedata = $conn->query("SELECT * FROM jokes ORDER BY id DESC"); 
		 while($joke = $jokedata->fetch_assoc()){
           
             print_r($jokes);
			echo '<!-- single Chuck Norris joke start -->
			<div class="joke">
					<img src="' . $joke['img'] . '" class="norris_pic" alt="Chuck Norris caricature"/>
					<h2>' . $joke['joke'] .  '</h2>	       
            </div>';
			echo '<!-- single joke end -->';   
             
             
         }
		 ###############################################################################################
		 # Oh my god - I need a way to render ALL records from the database, not only the last one :-( #
		 # This makes me sick...                                                                       # 
		 ###############################################################################################
		
		 ?>  
</body> 


    </html>