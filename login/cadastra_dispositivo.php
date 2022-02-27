
<?php
// inclui o arquivo de configura��o do sistema
include "Config/config_sistema.php";

    $sql ="select codigo, status from dispositivo_status";
    $result = mysql_query($sql);
    $row = array();
    while($resultado = mysql_fetch_assoc($result)){
        $row[] = $resultado;
    }
    echo json_encode($row, JSON_NUMERIC_CHECK);
?>