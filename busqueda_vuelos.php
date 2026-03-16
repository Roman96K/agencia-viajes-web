<?php
function buscarVuelos($origen, $destino, $fecha){
    echo "Buscando vuelos desde " . $origen . " hacia " . $destino . " para la fecha " . $fecha;
}
buscarVuelos("Santiago", "Lima", "2026-04-10");
?>
