<!DOCTYPE html>
<html lang="en">
<head>


</head>
<body>

<?php 
// Type of command 
# (hash) use in short notes (single line)
// two forward slashes      (single line)
/* multi comments use in longer notes (multi lines) */ 



#this is the first practice
//Practice(01)
/*
header('Content-Type:text/html; charset = UTF-8');
echo '<title> My First PHP Page  </title>';
echo '<div> We Love </div>';
echo '<div> Elzero Channel</div>';
echo '<div> Elzero Channel</div>';
*/
?>


<?php 
// Practice(02)
// echo 'Prevent Me From Running Please';
#echo 'Prevent Me From Running Please';
/* echo 'Prevent Me From Running Please';*/



// Practice(03)
/* My Application
  Version 1.0
 Created By Elzero */



// Practice(04)
 // ## First Comment  
# // # Second Comment
/* /* /* Third Comment */
////// Fourth Comment  T



  /*
  ============================================
  = Data Types
  = ----------
  = bool  => Boolean
  = int   => Integer
  = float => Floating Point Number | double
  = string
  = array
  = Other Types
  = gettype()
  ============================================
  */



  echo gettype(true);
  echo '<br>';
  echo gettype(false);
  echo '<br>';
  echo gettype(1);
  echo '<br>';
  echo gettype(1.2);
  echo '<br>';
  echo gettype(0.0000002);
  echo '<br>';
  echo gettype('test');
  echo '<br>';
  echo gettype(array('test1' , 'test2'));
  echo '<br>';
  echo gettype(['test1' , 'test2']);
  echo '<br>';
 /*
  ============================================
  = Data Types
  = ----------
  = Type Juggling + Automatic Type Conversion
  ============================================
  */

  echo 1 +'8';
  echo '<br>';
  echo gettype(1 +'8');
  echo '<br>';
  echo True;
  echo '<br>';
  echo gettype(True);
  echo false;
  echo '<br>';
  echo gettype(false);
  echo '<br>';
  echo true + true;
  echo '<br>';
  echo gettype(true + true);
  echo '<br>';
  echo false + false;
  echo '<br>';
  echo gettype(false + true);
  echo 5 + '8 test';
  echo '<br>';
  echo gettype(5 + '8 test');
  echo '<br>';
  echo 1 + 56.52;
  echo '<br>';
  echo gettype( 1 + 56.52);

?>

</body>
</html>