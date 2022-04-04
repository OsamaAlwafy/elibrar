<?php 
namespace coding\app\system;
class Config{
    private $database_name;
    private $database_host;
    private $database_driver;
    private $database_username;
    private $database_password;
    private static $instance;
    public  $_pdo;
private function __construct($dbConfig ) {
            $this->database_name =$dbConfig['dbname'];
           
            $this->database_host = $dbConfig['servername'];
            $this->database_driver = 'mysql';
            $this->database_username = $dbConfig["username"];
            $this->database_password = $dbConfig["dbpass"];;
            
            // $this->database_names = Config::get('database/names');
            try {
                $this->_dns = '' . $this->database_driver . ':host=' . $this->database_host . ';dbname=' . $this->database_name . '';
                $this->_pdo = new \PDO($this->_dns, $this->database_username, $this->database_password);
                $this->_pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
                $this->_pdo->setAttribute(\PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES " . $this->database_name . " ");
                $this->_pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
               
            } catch (\PDOException $e) {
                die($e->getMessage());
            }
        }

        public static function getInstance($config) {
            if (!isset(self::$instance)) {
                self::$instance = new Config( $config);
            }
            return self::$instance;
        }
    }
    ?>