<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use PDO;

class DBModel extends Model
{
    /**
     * Get connection of DB
     * @author Miguel Angel Jimenez
     */
    public function connection(): PDO
    {
        $params = [
            'dbname' => $_ENV['DB_DATABASE'],
            'user' => $_ENV['DB_USERNAME'],
            'password' => $_ENV['DB_PASSWORD'],
            'host' => $_ENV['DB_HOST'],
            'port' => $_ENV['DB_PORT'],
        ];
        try {
            $connection = new PDO(
                'mysql:host=' . $params['host'] . ';dbname=' . $params['dbname'],
                $params['user'],
                $params['password']
            );
        } catch (Exception  $e) {
            $message = 'Error: ' . $e->getMessage();
            die($message);
        }
        return $connection;
    }

    /**
     * Execute query.
     * @param String $query
     * @return status and data|message
     */
    public function exec_query($query): array
    {
        $response = $this->connection()->query($query);
        if (!$response) {
            $time = date("Y-m-d H:i:s");
            $error = $this->connection()->errorInfo();
            print_r($error);
            print_r($query);
            die('Error: Internal server error.');
        }
        $data = [];
        while ($row = $this->fetchAssoc($response)) {
            $data[] = $row;
        }
        if(!count($data)){
            $id = $this->connection()->lastInsertId();
            if($id)
                $data[] = $id;
        }
        return [
            'status' => true,
            'data' => $data
        ];
    }

    public function fetchAssoc($query)
    {
        $response = $query ? $query->fetch(PDO::FETCH_ASSOC) : 0;
        return $response;
    }
}