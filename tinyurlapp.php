<!DOCTYPE html> 
<html>
    
    <head>
    <style>
   <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
        
* {
  box-sizing: border-box;
    background-color: aquamarine;
}
        
   
        .formContainer{
            
            background-color: aliceblue;
            width: 500px;
          
            
            
        }

        #lnamefive{
            
           
        }
input[type=text], select, textarea {
   
  margin: auto;
  width: 50%;
    
   
    
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
    
  padding: 12px 12px 12px 0;
  display: inline-block;
    
}

input[type=submit] {
  background-color: aquamarine;
  margin: auto;
  width: 50%;
    
 
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
 
   
}

input[type=submit]:hover {
  background-color:darkturquoise;
}

.container {
  border-radius: 5px;
  background-color: aquamarine;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
    
    <body>
    
        <div class="formContainer">
            
             <form action="http://localhost/tinyurldocss/tinyurlapp.php" method="get">
    
    <label for="lname">URL One:</label><br>
   <input type="text" id="lnamefive" name="link"><br><br>
    
    <label for="lname">URL Two:</label><br>
   <input type="text" id="lnamefive" name="linkTwo"><br><br>
        
     <label for="lname">URL Three:</label><br>
   <input type="text" id="lnamefive" name="linkThree"><br><br>
        
         <label for="lname">URL Four:</label><br>
   <input type="text" id="lnamefive" name="linkFour"><br><br>
        
             <label for="lname">URL Five:</label><br>
   <input type="text" id="lnamefive" name="linkFive"><br><br>
            
   <input type="submit" value="Submit">
    
</form>
        </div>
   
           
    </body>
</html>


<?php
//$hey="Hello!";
//echo $hey;
//Remember to validate the link!

$urlTransform=$_GET['link'];
$urlTransformTwo=$_GET['linkTwo'];
$urlTransformThree=$_GET['linkThree'];
$urlTransformFour=$_GET['linkFour'];
$urlTransformFive= $_GET['linkFive'];

//echo $urlTransform;
function tinyUrl($url){
    
    if (!filter_var($url, FILTER_VALIDATE_URL)) {
    
    echo("$url The URL you entered is not a valid URL");
    echo "<br />\n";
    }
     
    $tiny = 'http://tinyurl.com/api-create.php?url=';
    
    
    return file_get_contents($tiny.urlencode(trim($url)));
    

}
//echo tinyUrl($urlTransform). " " . tinyUrl($urlTransformTwo);

echo "Url One: ";
echo tinyUrl($urlTransform);
echo "<br />\n";
echo "Url Two: ";
echo tinyUrl($urlTransformTwo);
echo "<br />\n";
echo "Url Three: ";
echo tinyUrl($urlTransformThree);
echo "<br />\n";
echo "Url Four: ";
echo tinyUrl($urlTransformFour);
echo "<br />\n";
echo "Url Five: ";
echo tinyUrl($urlTransformFive);


?>

