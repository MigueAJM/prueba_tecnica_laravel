<?php

namespace App\Models\Mayorista;

use App\Http\Controllers\Controller;
use App\Models\DBModel;

class Mayorista extends DBModel
{
    public function getUsers(int $id = 0)
    {
        $query = 'SELECT ';
        $query .= 'idUser, Name, LastName, (Name || '."' '".' || CAST(LastName AS CHAR)) fullname, Company, u.Email, u.Phone, Discount, BusinessName, ';
        $query .= 'IdAddress, a.ContactName, a.Address, a.PostalCode, a.Neighborhood, a.City, a.State, a.Email email_address, a.Phone phone_address, ';
        $query .= 'IdBillingdata, b.IqualAddress, b.ContactName iqual_name, b.Address iqual_address, b.PostalCode iqual_cp, b.Neighborhood iqual_neighborhood,';
        $query .= 'b.City iqual_city, b.State iqual_state, b.Email iqual_email, b.Phone iqual_phone';
        $query .= ' FROM users u';
        $query .= ' INNER JOIN Addresses a ON (u.idUser=a.FK_idUser)';
        $query .= ' INNER JOIN Billingsdatas b ON (u.idUser=b.FK_idUser)';
        if($id)
            $query .= ' WHERE idUser=' .$id;
        return $this->exec_query($query);
    }

    public function getDataPostalCode(int $postal_code)
    {
        $query = 'SELECT';
        $query .= ' CCp PostalCode, NombreEstado "state", Descripcion city, CNombreAsentamiento neighborhood';
        $query .= ' FROM colonias co';
        $query .= ' INNER JOIN codigos_postales cp ON (cp.CCp=co.CCodigoPostal)';
        $query .= ' INNER JOIN estados e ON (cp.CEstado=e.CEstado)';
        $query .= ' INNER JOIN ciudades c ON (cp.CMunicipio=c.CMunicipio)';
        $query .= ' WHERE CAST(CCp AS CHAR) like'."'{$postal_code}%'".'  AND e.CEstado=c.CEstado';
        return $this->exec_query($query);
    }

    public function buildInsert(string $table,array $data, int $foreing_id = 0)
    {
        $query = 'INSERT INTO ' . $table .'(';
        $columns = "";
        $values = "";
        $length = count($data) - 1;
        foreach($data as $key => $value){
            
            if(!empty($value)){
                $columns .= $key;
                $values .= ($key === 'Phone' || $key === 'PostalCode' || $key === 'Discount') ? $value : "'{$value}'";
                if($length){
                    $columns .= ',';
                    $values .= ',';
                    $length--;
                }
            }else{
                $length--;
            }
        }
        $columns = trim($columns, ',');
        $columns .= ",Status, Type";
        $values = trim($values, ',');
        $values .= ", 1, 'Usuario'";
        $query .= "{$columns}) VALUES({$values})";
        if($foreing_id){
            if($table === 'billingsdatas' || $table === 'addresses'){
                $columns .= ", FK_IdUser";
                $value .= ",{$foreing_id}";
            }
        }
        if($table === 'users'){
            $columns .= ", Role";
            $values .= ", 'Mayorista'";
        }
        return $this->exec_query($query);
    }

    public function getlastInsertId(string $table, string $column_id)
    {
        $query = "SELECT {$column_id} id_ FROM {$table} ORDER BY {$column_id} desc limit 1";
        return $this->exec_query($query);
    } 
}