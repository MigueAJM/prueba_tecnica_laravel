<?php

namespace App\Http\Controllers\Mayorista;

use App\Http\Controllers\Controller;
use App\Models\Mayorista\Mayorista as MayoristaMayorista;
use Illuminate\Http\Request;

class Mayorista extends Controller
{
    public function __construct()
    {
        $this->model = new MayoristaMayorista();
    }

    /**
     * Retorna un usuario por $id o todos los usuarios.
     */
    public function getUsers(int $id = 0)
    {
        return response()->json($this->model->getUsers($id));
    }

    /**
     * Retorna informacion de acuerdo al codigo postal
     */
    public function getDataPostalCode(int $postal_code = 0)
    {
        if(!$postal_code)
            throw new \Exception('Invalid Postal code.', 404);
        return response()->json($this->model->getDataPostalCode($postal_code));
    }

    /**
     * Retorna informacion de acuerdo al codigo postal
     */
    public function addUser(Request $request)
    {
        $params = $request->all();
        $id = 0;
        $this->model->buildInsert('users', $params['users']);
        $response = $this->model->getlastInsertId('users', 'IdUser');
        $id = $response['data'][0]['id_'];
        $params['addresses']['FK_IdUser'] = $id;
        $this->model->buildInsert('addresses', $params['addresses']);
        $response = $this->model->getlastInsertId('addresses', 'IdAddress');
        $id_address = $response['data'][0]['id_'];
        $params['billingsdatas']['FK_IdUser'] = $id;
        unset($params['billingsdatas']['Cfdi']);
        unset($params['billingsdatas']['Rfc']);
        unset($params['billingsdatas']['Razon']);
        $this->model->buildInsert('billingsdatas', $params['billingsdatas']);
        $response = $this->model->getlastInsertId('billingsdatas', 'IdBillingdata');
        $id_billing = $response['data'][0]['id_'];
        return response()->json(['data' => [
            'user' => $id,
            'address' => $id_address,
            'billing' => $id_billing
        ]]);
    }
}