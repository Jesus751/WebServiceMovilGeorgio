<?php
 
class PDODB
{
 
    private $host;
    private $usuario;
    private $pass;
    private $db;
    private $port;
 
    private $connection;
 
    function __construct($host, $usuario, $pass, $db,$port)
    {
        $this->host = $host;
        $this->usuario = $usuario;
        $this->pass = $pass;
        $this->db = $db;
        $this->$port = $port;
    }
 
    function connect()
    {
 
        $opciones = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::MYSQL_ATTR_FOUND_ROWS => true
        );
 
        $this->connection = new PDO(
            'mysql:host= localhost' . $this->host . 
            ';dbname= georgio' . $this->db . 
            ';user= root' . $this->usuario. 
            ';pas= admin2'. $this->pass .
            ';por= 3307'. $this->port .
            $opciones
        );
    }
 
 
    function getData($sql)
    {
 
        $data = array();
        $result = $this->connection->query($sql);
 
        $error = $this->connection->errorInfo();
        if ($error[0] === "00000") {
            $result->execute();
            if ($result->rowCount() > 0) {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    array_push($data, $row);
                }
            }
        } else {
            throw new Exception($error[2]);
        }
        return $data;
    }
 
    function numRows($sql)
    {
        $result = $this->connection->query($sql);
        $error = $this->connection->errorInfo();
 
        if ($error[0] === "00000") {
            $result->execute();
            return $result->rowCount();
        } else {
            throw new Exception($error[2]);
        }
    }
 
    function getDataSingle($sql)
    {
 
        $result = $this->connection->query($sql);
 
        $error = $this->connection->errorInfo();
 
        if ($error[0] === "00000") {
            $result->execute();
            if ($result->rowCount() > 0) {
                return $result->fetch(PDO::FETCH_ASSOC);
            }
        } else {
            throw new Exception($error[2]);
        }
        return null;
    }
 
 
    function getDataSingleProp($sql, $prop)
    {
 
        $result = $this->connection->query($sql);
        $error = $this->connection->errorInfo();
 
        if ($error[0] === "00000") {
            $result->execute();
            if ($result->rowCount() > 0) {
                $data = $result->fetch(PDO::FETCH_ASSOC);
                return $data[$prop];
            }
        } else {
            throw new Exception($error[2]);
        }
        return null;
    }
 
    function executeInstruction($sql)
    {
 
        $result = $this->connection->query($sql);
        $error = $this->connection->errorInfo();
 
        if ($error[0] === "00000") {
            $result->execute();
            return $result->rowCount() > 0;
        } else {
            throw new Exception($error[2]);
        }
    }
 
    function close()
    {
        $this->connection = null;
    }
 
    function getLastId()
    {
        return $this->connection->lastInsertId();
    }
}