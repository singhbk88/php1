<?php
$army=$_POST{'an'};
$rank=$_POST{'rn'};

$password=$_POST{'ps'};
$mobile=$_POST{'mn'};
$course=$_POST{'course'};
$int1=$_POST{'ai'};
$int2=$_POST{'wa'};
$int3=$_POST{'mp'};
$con=mysqli_connect("localhost","root","","project_ims");// in new wampserver version
if (!$con) { die("could not connect".mysql_error());
	# code...
}
// in old version mysql_select_db("project_ims",$con);
$sql="insert into user (Army_no,rank,password,mobile_no,course,int_1,int_2,int_3)values('$army','$rank',
'$password','$mobile','$course','$int1','$int2','$int3')";
if (mysqli_query($con, $sql)==1) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

//mysqli_query($con,$sql);
mysqli_close($con);
// my sql_close($con) use in older version
?>