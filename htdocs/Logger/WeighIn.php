<?php 
    $WI_ClientNameText = $_POST["WI_ClientNameText"];
    $WI_LocationFromText = $_POST["WI_LocationFromText"];
    $WI_DriverNameText = $_POST["WI_DriverNameText"];
    $WI_TransacTypeName = $_POST["WI_TransacTypeName"];
    $WI_LocationToText = $_POST["WI_LocationToText"];
    $WI_PlateNumberText = $_POST["WI_PlateNumberText"];
    $WI_WeightText = $_POST["WI_WeightText"];
    $WeighInUIDtext = $_POST["WeighInUIDtext"];

    echo($WI_PlateNumberText);

    include("Scripts/DBHandler.php");

    $TransNumberIncrementSQL = "
    DECLARE @TransNumber varchar(20);

    IF ((SELECT COUNT(*) FROM dbo.Transaction_Information WHERE TransactionNumber = '$WI_PlateNumberText-1') >0)
    
        BEGIN
    
            DECLARE @LastTransNumber varchar(20);
            DECLARE @LastNumberVarChar varchar(20);
            DECLARE @LastNumber int;
    
            SET @LastTransNumber = (SELECT TOP 1 TransactionNumber FROM dbo.Transaction_Information WHERE PlateNumber = '$WI_PlateNumberText' ORDER BY TransactionNumber DESC);
            SET @LastNumberVarChar = (SELECT TOP 1 * FROM string_split(@LastTransNumber, '-') ORDER BY value ASC);
            
            SET @LastNumber = CONVERT(int, @LastNumberVarChar) +1;
    
            SET @TransNumber = CONCAT('$WI_PlateNumberText-',@LastNumber);
        END
    
    ELSE
        BEGIN 
            
            SET @TransNumber = CONCAT('$WI_PlateNumberText','-1')
        END
    
    ";

    $Price_Per_KgSQL = "
    DECLARE @PricePerKG NUMERIC(20,3);
    SET @PricePerKG = (SELECT [Price_Per_Kg] FROM dbo.Client_Information WHERE ClientName = 'ABAR RICE MILL')
    ";

    $GetDateSQl = "
    DECLARE @TodayDate datetime;
    SET @TodayDate = getDate();";

    $sql = "INSERT INTO dbo.Transaction_Information(
        TransactionNumber, 
        PlateNumber,
        ClientName,
        Driver,
        TransactionType,
        LocationFrom,
        LocationTo,
        Price_Per_Kg,
        WeighIn,
        Weigh_In_Date,
        Status,
        WeighInUID)
        VALUES
        (
            @TransNumber,?,?,?,?,?,?,@PricePerKG,?,@TodayDate,'IN',?
        )
    ";

    $params = array($WI_PlateNumberText,
    $WI_ClientNameText,
    $WI_DriverNameText,
    $WI_TransacTypeName,
    $WI_LocationFromText,
    $WI_LocationToText,
    $WI_WeightText,
    $WeighInUIDtext);

    $sql = $Price_Per_KgSQL . $TransNumberIncrementSQL . $GetDateSQl .$sql;

    $query = sqlsrv_prepare($Con, $sql, $params);

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
    
?>