<?php
error_reporting(E_ERROR | E_PARSE);

function read(){
    $myfile = fopen("fqdn.txt", "a+") or die("No fue posible crear el archivo");
    $num = 0;
    while (($line = fgets($myfile)) !== false) {
        $line = trim($line);
        $ip = get_ip($line);
        $cname = get_cname($line);
        generar_fila($line,$ip,$cname,$num);
        $num = $num + 1;
    }
    fclose($myfile);
}

function generar_fila($fqdn, $ip, $cname, $num) {
       echo "<tr>";
       echo "<td>$fqdn</td>";
       echo "<td>$ip</td>";
       echo "<td>$cname</td>";
       echo "<td><form action=\"/borrar.php\" method=\"post\"><input type=\"hidden\" name=\"direccion\" value=\"$num\"><button type=\"submit\" onclick=\"return confirmar('$fqdn');\" class=\"btn btn-danger\">Borrar</button></td></form>";
       echo "</tr>";
}

function get_ip($fqdn) {
    try {
        $res = dns_get_record($fqdn, DNS_A);
    } catch (Exception $e) {
        
    }
    return $res[0]['ip'] ?? null;
}


function get_cname($fqdn) {
    try {
        $res = dns_get_record($fqdn, DNS_CNAME);
    } catch (Exception $e) {
    }
    return $res[0]['target'] ?? null;
}


?>
