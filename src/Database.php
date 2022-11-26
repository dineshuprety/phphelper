<?php

namespace Nepo\Helper;

class Database
{
    private string $host;

    private string $database;

    private string $username;

    private string $password;

    private int $port;

    protected $con;

    /**
     * It's a constructor for a class that connects to a database.
     * 
     * @param host The hostname of the database server.
     * @param database The name of the database you want to connect to.
     * @param username The username for the database
     * @param password The password for the database user.
     * @param port The port number to use when connecting to the database.
     */
    public function __construct($host, $database, $username, $password, $port = null)
    {
        try {
            $this->con = new PDO("mysql:host=" . $this->host . "; port=" . (string)($this->$port) ? '3306' : $port . "; dbname=" . $this->database, $this->username, $this->password);
        } catch (\Exception $e) {
            echo "Database Connection Problems" . $e->getMessage();
        }
    }
}
