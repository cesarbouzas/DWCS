<?php
echo "<table>";
foreach($_SERVER as $key=>$valor){
    echo "<tr>";
    printf("<td> %s</td><td>%s</td></tr>",$key,$valor);
}
echo "</table>";

?>