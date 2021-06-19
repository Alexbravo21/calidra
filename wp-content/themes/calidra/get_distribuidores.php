
<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-type: application/json');
    
    $response["success"] = false;
    $servername = "localhost";
    $username = "my14dev";
    $password = "mytow7vn45rap";
    $dbname = "calidra_db";
    
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $txt_search = $_GET["txt_search"];
    $sql = '
        SELECT * FROM cal_distribuidor
        WHERE 
        (
            (cp = "'.$txt_search.'" and cp!=0  ) OR
            ciudad LIKE "%'.$txt_search.'%" OR
            estado LIKE "%'.$txt_search.'%"
        )
        AND
        lat != "-"  
    ';
    $result = $conn->query($sql);
    $response["distribuidores"] = [];
    
    if ($result->num_rows > 0) {
        $response["success"]=true;
        while ($fila = $result->fetch_assoc()) {
            array_push($response["distribuidores"],$fila );   
        }
    } else {
        $response["error_desc"]="sin resultados";
        
    }

    echo json_encode($response);
    $conn->close();
?>  