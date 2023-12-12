<?php

class Connection {
    private const SERVER = "mysql:host=localhost;dbname=localizate";
    private const USERNAME = "ttn1014";
    private const PASSWORD = "Ton1014taf";
    private const OPTIONS = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    protected $conn;

    public function open() {
        return $this->conn;
    }

    public function close() {
        $this->conn = null;
    }
    
    public function __construct() {
        try {
            $this->conn = new PDO(self::SERVER, self::USERNAME, self::PASSWORD, self::OPTIONS);
        } catch (PDOException $e) {
            $this->handleError($e);
        }
    }

    public function __destruct() {
        $this->conn = null;
    }

    private function handleError(PDOException $e) {
        echo "Actualmente existe un problema en la conexión. Contacte al administrador.";
    }
}

?>
