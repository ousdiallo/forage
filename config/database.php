<?php
/*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    POUR TOUTE MODIFICATION VISANT A AMELIORER
    CE DERNIER (GIT).
    VOUS ETES LIBRE DE TOUTE UTILISATION.
  ===================================================*/
    function connexion_params(){
        return array(
                    'host' => '127.0.0.1',
                    'user' => 'root',
                    'password' => '',
                    'database_name' => 'foragedb',//change le nom de la base
                    'etat' => 'on'//metter à on pour demarrer la base
                    );
    }
?>