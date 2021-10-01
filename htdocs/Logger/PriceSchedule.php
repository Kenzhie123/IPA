<?php
    if(isset($_POST['PriceScheduleSelected']))
    {

        include("Scripts/DBHandler.php");
        $PostArray = $_POST['PriceScheduleSelected'];
        $PricePerKG = $_POST['PricePerKgText'];
        $PriceStart = $_POST['PriceStartText'];

        $IDArray = array();
        
        
        foreach(explode(",", $PostArray) as $a)
        {
            
            if(isset($_POST["$a"]))
            {
                if($_POST["$a"] =="Checked")
                {
                    array_push($IDArray,explode("B",$a)[1]);
                }
            }
        }
       
        $sql = "UPDATE dbo.Client_Information SET Price_Per_Kg = ?, Price_Start_Date = CAST('$PriceStart' as date) 
        WHERE ClientID = 0 ";

        $params = array($PricePerKG);

        foreach($IDArray as $i)
        {
            $sql =$sql . " OR " . "ClientID = '" . (int)$i."'";
        }

        $query = sqlsrv_prepare($Con,$sql,$params);

        if( !$query ) {
            die( print_r( sqlsrv_errors(), true));
        }
        else
        {
            if( sqlsrv_execute( $query ) === false ) {
                die( print_r( sqlsrv_errors(), true));
          }
        }
        
        header("Location: index.php");
    }
?>