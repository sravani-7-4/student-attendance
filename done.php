<?php 
include 'connect.php';

if(isset($_GET['sec']))
{
    $YR = $_GET['year'];
    $BR = $_GET['branch'];
    $SEC = $_GET['sec'];
    $SUB = $_GET['sub'];
    $HRS = $_GET['hrs'];
    $C = 'CONDUCT';
    $ID = 'ID';
    $A = 'ATTEND';
    $P = 'PERCENTAGE';
    $alldet = $YR.$BR.$SEC;
    // adding to the conduct //
    $sqlc = "select $ID,$C from $alldet where ID!=1";
    $resc = mysqli_query($con,$sqlc);
    while($rowc = mysqli_fetch_assoc($resc))
    {
        $sql9 = "update $alldet set $C = ($rowc[$C]+1) where ID=$rowc[$ID]";
        $res9 = mysqli_query($con,$sql9);
    }


    echo $SEC;
    $sqlt = "select count(ID) as 'ct' from $alldet";
    $rest = mysqli_query($con,$sqlt);
    $rowt = mysqli_fetch_assoc($rest);
    echo $rowt['ct'];
    $i=1;
    while($i<=$rowt['ct'])
    {
        if(isset($_REQUEST['b'.$i]))
        {
            $id = $_REQUEST['b'.$i];
            $sql1 = "select $SUB , $A from $alldet where ID = $id";
            $res1 = mysqli_query($con,$sql1);
            $row1 = mysqli_fetch_assoc($res1);
            $sql2 = "update $alldet set $SUB = ($row1[$SUB]+1), $A = ($row1[$A]+1) where ID = $id ";
            $res2 = mysqli_query($con,$sql2);

        }
        $i=($i+1);
    }

    $sql5 = "select $ID,$C,$A,$P from $alldet where ID!=1";
    $res5 = mysqli_query($con,$sql5);
    while($row5 = mysqli_fetch_assoc($res5))
    {
        $sql4 = "update $alldet set $P = ((((3*$row5[$A])-(2*$row5[$C]))/$row5[$C])*100) where ID=$row5[$ID]";
        $res4 = mysqli_query($con,$sql4);
    }


    $sql8 = "select $SUB,$C from $alldet where ID=1";
    $res8 = mysqli_query($con,$sql8);
    $row8 = mysqli_fetch_assoc($res8);
    // echo $row2[$SUB]; 
    $sql3 = "update $alldet set $SUB = ($row8[$SUB]+1),$C = ($row8[$C]+1) where ID=1";
    $res3 = mysqli_query($con,$sql3);
    header("location:main.php");

}
?>