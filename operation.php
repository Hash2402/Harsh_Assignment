<?php 
include 'con_db.php'; 
$key=$_GET['source'];


$oper="SELECT table_name , column_name FROM  keyword WHERE keyword_val='$key'";
$res=mysqli_query($con,$oper);


    $row=mysqli_fetch_assoc($res);
    echo "\nTable name :".$row['table_name'];
    echo "\n\n";
    $row_val=$row['table_name'];
    $sep=explode(",",$row['column_name']);
for($i=0;$i<count($sep);$i++)
{
    
    $oper="SELECT $sep[$i] FROM $row_val ";
    $res=mysqli_query($con,$oper);
   echo'
    <table class="table table-bordered" border="1px">
            <thead>
            <tr>
            <th scope="row">'.$sep[$i].'</th>
            </tr>
            </thead>
        </table>';
    while($row=mysqli_fetch_assoc($res))
    {
        $col=$row[$sep[$i]];
        echo '
        <table> 
        <tbody>
        <tr>
        <th scope="row"></th>
        <td>'.$col.'</td>
        </tr>
        </tbody>
        </table>';
    }

   if(!$res)
   {
       die(mysqli_error($res));
   }
}


?>
