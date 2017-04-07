<?php
include_once(AS_PATH.'/adodb/adodb.inc.php');
include_once (AS_PATH.'/classes/dbConfig.php');

/**
 * Description of dbItem
 *
 * @author oswald
 * @modified by Alex
 */
class dbAdmin {
    private $_adoconn;
    static private $instancia = NULL;
    
    
    function __construct() {
        date_default_timezone_set("America/Costa_Rica");
    }

    function getConnection() {
        $this->_adoconn = ADONewConnection(dbConfig::$db_driver);
        $this->_adoconn->PConnect(dbConfig::$db_conn_server,
                dbConfig::$db_conn_user,dbConfig::$db_conn_pass,
                dbConfig::$db_conn_database);
        $this->_adoconn->SetFetchMode(ADODB_FETCH_ASSOC);
    }

    function closeConnection() {
        try {
            $this->_adoconn->Close();
        }catch(Exception $e) {
        }
    }

    static public function getInstancia() {
        if (self::$instancia == NULL) {
            self::$instancia = new dbAdmin ();
        }
        return self::$instancia;
    }

   
    protected function getQryYMDFormat($date) {
        // order is month day year
        list($m, $d, $y) = explode('/', $date);
        return trim($y) . "-" . trim($m) . "-" . trim($d);
    }

    
    public function doLogin($email, $password) {
        $passToMd5 = md5($password);
        try {
            $this->getConnection();
            //$serialized = Compresser::Set($dta);
           // echo $email . ' '. $password;
            $query ="select * FROM users WHERE username= ? AND password=?;";
            $this->_adoconn->SetFetchMode(ADODB_FETCH_ASSOC);
            $result = array();
            $rs = $this->_adoconn->Execute($query,array($email, $password));
            if(!$rs->EOF){
                $result = $rs->getAll();
                $rs->close();
            }
            $this->closeConnection();
            
            
            return $result;
            
            $this->closeConnection();
           
        } catch (Exception $e) {
            
            $this->closeConnection();
        }
        return -1;
    }

}
?>
