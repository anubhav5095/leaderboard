<?php
    class Database
    {	//BY  USING THIS CLASS OF CONNECTION WE CAN AVOID CONNECTION OF DATABASE ON EACH PAGE this will only return the ongoing connection's instance
            // Store the single instance of Database
            private static $m_pInstance;

            private $db_host="localhost";
            private $db_user = "root";
            private $db_pass = "";
            private $db_name = 'task';
			      private $conn;

            // Private constructor to limit object instantiation to within the class
            private function __construct()
            {
                $this->conn = mysqli_connect($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
                //mysql_select_db($this->db_name);
            }

            // Getter method for creating/returning the single instance of this class
            public static function getInstance()
            {
                if (!self::$m_pInstance)
                {
                    self::$m_pInstance = new Database();
                }
                return self::$m_pInstance;
            }

//THIS IS A FUNCTION TO EXECUTE QUERY
            public function query($query)
            {
               return mysqli_query($this->conn,$query);
            }

         }
?>
