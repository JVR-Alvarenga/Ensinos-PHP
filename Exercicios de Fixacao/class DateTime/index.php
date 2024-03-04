<?php
$date1 = new DateTime();    //pegando a data atual
$date2 = new DateTime('2024-12-25 00:00');  //pegando a data do natal

$diff = $date1->diff($date2);   //pegando a diferenca

echo 'Natal 25/12/2024 - '.$diff->format('%m meses, %d dias, %h horas, %i minutos, %s segundos');
//mostrando essa diferenca ja formatada para entendermos