<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function status()
    {
            return response()->json([
                'status' => 'ok',
                'message' => 'Api está ok!'
            ],
            200
        );
    }

    public function clientes()
    {
        $clientes = Cliente::paginate(10);
        return response()->json(
        [
            'status' => 'ok',
            'message' => 'Sucesso!',
            'data' => $clientes
        ],
        200
        );
    }

    public function clienteDeId($id)
    {
        $cliente = Cliente::find($id);

        return response()->json(
            [
                'status' => 'ok',
                'message' => 'Sucesso!',
                'data' => $cliente
            ],
            200
            );
    }

    public function cliente(Request $request)
    {
        //check o id
        if(! $request->id){
            return response()->json(
                [
                    'status' => 'error',
                    'message' => 'Id errado!'
                ],
         400
                ); 
        }

        $cliente = Cliente::find($request->id);
            return response()->json(
                [
                    'status' => 'ok',
                    'message' => 'Sucesso!',
                    'data' => $cliente
                ],
                200
                );
    }

    public function addCliente(Request $request)
    {
        //criando um novo cliente
        $cliente = new Cliente();
        $cliente->nome = $request->nome;
        $cliente->email = $request->email;
        $cliente->save();

        return response()->json(
            [
                'status' => 'ok',
                'message' => 'Sucesso!',
                'data' => $cliente
            ],
            200
            );
    }

    public function updateCliente(Request $request)
    {
       //verificando o id do cliente
       if(! $request->id){
        return response()->json(
            [
                'status' => 'error',
                'message' => 'Id errado!'
            ],
     400
            ); 
    }

    //update de cliente
    $cliente = Cliente::find($request->id);
    $cliente->nome = $request->nome;
    $cliente->email = $request->email;
    $cliente->save();

    return response()->json(
        [
            'status' => 'ok',
            'message' => 'Sucesso!',
            'data' => $cliente
        ],
        200
        );
    }

    public function deleteCliente($id) 
    {
        //buscar o cliente sem a necessidade de uma validação
        $cliente = Cliente::find($id);
        $cliente->delete();
         
        return response()->json(
            [
                'status' => 'ok',
                'message' => 'Sucesso!'
            ],
            200
            );
    }

}