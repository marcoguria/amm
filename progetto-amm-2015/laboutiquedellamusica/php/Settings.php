<?php

/**
* Classe che contiene una lista di variabili di configurazione
*/
class Settings {

    // variabili di accesso per il database
    public static $db_host = 'localhost';
    public static $db_user = 'guriaMarco';
    public static $db_password = 'vipera5741';
    public static $db_name='amm15_guriaMarco';
    
    private static $appPath;

    /**
* Restituisce il path relativo nel server corrente dell'applicazione
* Lo uso perche' la mia configurazione locale e' ovviamente diversa da quella
* pubblica. Gestisco il problema una volta per tutte in questo script
*/
    public static function getApplicationPath() {
        if (!isset(self::$appPath)) {
            // restituisce il server corrente
            switch ($_SERVER['HTTP_HOST']) {
                case 'localhost':
                    // configurazione locale
                    self::$appPath = 'http://' . $_SERVER['HTTP_HOST'] . '/progetto-amm-2015-container/progetto-amm-2015/laboutiquedellamusica/';
                    break;
                case 'spano.sc.unica.it':
                    // configurazione pubblica
                    self::$appPath = 'http://' . $_SERVER['HTTP_HOST'] . '/amm2015/guriaMarco/progetto-amm-2015/laboutiquedellamusica/';
                    break;

                default:
                    self::$appPath = '';
                    break;
            }
        }
        
        return self::$appPath;
    }

}

?>
