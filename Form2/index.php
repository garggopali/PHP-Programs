<html>   
   <head>
      <title>Hello World</title>
   </head>
   <body>
   
      <?php 
      // This is a single-line comment
# This is also a single-line comment
/* This is a multiple-lines comment block
that spans over multiple
*/
// super global variables using $globals it means it can be use any where
function addition() { 
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
}
addition(); 
echo $z;  

 define("MINSIZE", 50); // it means varaible neme is MINSIZE and its value = 50 ie $MINSIZE=50;
   echo MINSIZE;  //will print 50
   
  define("MINSIZE", 50,true); // it means varaible neme is MINSIZE and its value = 50 & true means case insestive ie $MINSIZE=50; 
   echo Minsize;  //will print 50   
   
      $number =10;
      $test_String='gopali';
      print($test_String);  // will print gopali
     echo $number;  // will print 10
	   echo "this is ". $number; // will print "this is 10"
$direct_text = '  My variable contains the value of ';
print($direct_text . $number); // My variable contains the value of 10
print ("<IMG SRC =images/image1.jpg>"); // print downloaded image
print ("<IMG SRC =http://wallpaper-gallery.net/images/natural-picture/natural-picture-2.jpg>"); // pring online image 

      ?>
   </body>
</html>