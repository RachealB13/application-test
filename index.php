<!doctype html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<script src="//ajax.googleapis.com/ajax/libs/mootools/1.5.2/mootools.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
<script type="text/javascript">
        function alertData(x)
        {
			alert(x);
        }
</script>
<?php

$people = array(
0 => array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
1 => array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
2 => array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
3 => array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
4 => array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);

$table="<table border=1 cellspacing=0 cellpading=0>";
$table.='<tr> <td>ID</td> <td>First Name</td> <td>Last Name</td> <td>Email</td></tr> <td></td>';


$i=0;
foreach($people as $key=>$value) {
	$table.="<tr>";
	foreach($value as $key2=>$value2) {
		$table.="<td>".$value2.'</td>';
	}
	$name="Email: ".$people[$i]["email"]." Name: ".$people[$i]["first_name"]." ".$people[$i]["last_name"];
	$table.='<td><input type="button" class="btn" value="display" onclick="alertData(\''.$name.'\')"/></td></tr>';
	$i++;
}
$table.='</table>';
echo $table;
?>
