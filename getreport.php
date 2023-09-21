<?php

$conn = mysqli_connect("localhost","root","","stock") or die("connection failed");
$V1 = 0;
$V2 = 0;
$V3 = 0;
$V4 = 0;
// $Year = "";
// $Category= "";
// $Period="";
// $PCode="";
if($_POST["Year"]!=""){
    $Year = $_POST["Year"];
    $V1 = 1;
}

if($_POST["Period"]){
    $Period = $_POST["Period"];
    $V2 = 1;
}
if($_POST["Category"]){
    $Category = $_POST["Category"];
    $V3 = 1;
}
if($_POST["PCode"]){
    $PCode = $_POST["PCode"];
    $V4 = 1;
}

//V1 , v2 v3 , v4 result found 
if($V1==0)
{
    if($V2==1)
    {

    }
    else
    {
        if($V3==1){

        }
        else
        {
            if($V4==1)
            {

            }
            else
            {
                $current_year = date("Y");
                $current_month = date("M");
      
                if($current_month<4)
                {
                    $current_year-=1;
                    $START_DATE = ("$current_year"-"04"-"01");
                    $current_year+=1;
                    $END_DATE = ("$current_year"-"03"-"31");
                }
                else
                {
                
                    $START_DATE = ("$current_year"-"04"-"01");
                    $current_year+=1;
                    $END_DATE = ("$current_year"-"03"-"31");
                }


            }
        }
        
    }
}
else
{

}



// $sql = "SELECT sum(NoOfItems) as count,Code , ProductName, MONTH(Date) as month FROM issue GROUP BY Code,MONTH(Date) ORDER BY Code ";

// $result = mysqli_query($conn , $sql ) or die("SQL Query Failed");
// $output = "";
// $J = date('Y-m-d');
// $map = array("1" => "January", 
// "2" => "February",
// "3" => "March",
// "4" => "April",
// "5" => "May",
// "6" => "June",
// "7" => "July",
// "8" => "August",
// "9" => "September",
// "10" => "October",
// "11" => "November",
// "12" => "December"

// );

// if(mysqli_num_rows($result)>0)
// {
//     $output = '<table>';

// $CodeTemp ="";
// $total = 0;
// while($row = mysqli_fetch_assoc($result)){
//     if($row["Code"]!=$CodeTemp)
//     {
//         $CodeTemp = $row["Code"];
//         if($total!=0)
//         {
//             $output .= "<tr class='total'><td>Total</td><td>{$total}</td></tr>";
//         }
//         $total = 0;
//         $output .= "<tr> <th>{$row["Code"]} : {$row["ProductName"]}</th><th></th></tr>";
        
//     }
    
//     $total += $row["count"];
//     $output .= "<tr>

//     <td>{$map[$row["month"]]}</td>
//     <td>{$row["count"]}</td>

//     </tr>";
// }

// $output .= "<tr class='total'><td >Total</td><td>{$total}</td></tr>";
// $output .="
// <tr class='footer'>
// <th>SYSTEM GENERATED REPORT ON {$J}</th>
// <th></th>
// </tr>
// ";
// $output .= "</table>";

// mysqli_close($conn);

// echo ($output);




// }
// echo($Year." ".$Period." " .$Category." ".$PCode );
// echo($V1." ".$V2." " .$V3." ".$V4 );

echo($current_month);

?>
