<?php
function gerarCalendario($mes, $ano)
  {
    // Obter o numero do mês e o numero dde dias no mês
$nomeMes = date("F", mktime(0, 0, 0, $mes,1 , $ano));
    $diasNoMes = cal_days_in_month(call_GREGORIAN, $mes, $ano);
