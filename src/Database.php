<?php

namespace Nepo\Helper;

class Database
{
    protected string $host;

    protected string $database;

    protected string $username;

    protected string $password;

    protected int $port;

    public function __construct($host, $database, $username, $password, $port = null)
    {
    }
}
