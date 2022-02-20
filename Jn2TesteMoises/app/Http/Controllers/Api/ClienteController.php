<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of all resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

      $clientes = Cliente::all();

      return response()->json($clientes);
    }


    /**
     * Display a listing of all resources with the same final placa number.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function consulta($num) {

      $consulta = Cliente::where('placa','like',"%$num%")->get();

      return response()->json($consulta);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

      $validate = Validator::make($request->all(), [
        'nome'      => 'required',
        'telefone'  => 'required',
        'cpf'       => 'required|max:14',
        'placa'     => 'required|max:8',
      ]);

      if($validate->fails()){
        return response()->json([
          'error'=>'Todos os campos precisam ser preenchidos adequadamente',
        ]);
      }

      $cpf = $request->cpf;
      $placa = $request->placa;

      $clienteExiste = Cliente::where([
        'cpf'=>$cpf,
        'placa'=>$placa
      ])->get();


      if(count($clienteExiste) > 0){
        return response()->json([
          'error'=>'não podemos realizar o cadastro, pois já existe um cliente com essa placa',
        ]);
      }

      $table = new Cliente;
      $table->nome = $request->nome;
      $table->telefone = $request->telefone;
      $table->cpf = $cpf;
      $table->placa = $placa;
      if($table->save()){
        return response()->json([
          'success'=>'Cliente cadastrado com sucesso!',
        ]);
      } else {
        return response()->json([
          'error'=>'Erro ao tentar cadastrar cliente',
        ]);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

      if(!$user = Cliente::find($id)){
        return response()->json([
          'error'=>'Cliente Inexistente',
        ]);
      }

      $cliente = Cliente::find($id);

      return response()->json($cliente);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

      $validate = Validator::make($request->all(), [
        'cpf'       => 'max:14',
        'placa'     => 'max:8',
      ]);

      if($validate->fails()){
        return response()->json([
          'error'=>'Todos os campos precisam ser preenchidos adequadamente',
        ]);
      }

      if(!$user = Cliente::find($id)){
        return response()->json([
          'error'=>'Cliente Inexistente',
        ]);
      }

      $placa = $request->placa;

      $placaExiste = Cliente::where('id','!=',$id)
                            ->where('placa','=',$placa)->get();

      if(count($placaExiste) > 0){
        return response()->json([
          'error'=>'Placa informada já está vinculada a outro usuário',
        ]);
      }

      $update = Cliente::find($id)->update([
        'nome'      =>  $request->nome,
        'telefone'  =>  $request->telefone,
        'cpf'       =>  $request->cpf,
        'placa'     =>  $placa,
      ]);

      if($update === true){
        return response()->json([
          'success'=>'Os Dados do Clientes Foram atualizados com Sucesso!',
        ]);
      } else {
        return response()->json([
          'error'=>'Erro ao atualizar dados do cliente',
        ]);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

      if(!$user = Cliente::find($id)){
        return response()->json([
          'error'=>'Cliente Inexistente',
        ]);
      }

      $delete = Cliente::find($id)->delete();

      if($delete === true){
        return response()->json([
          'success'=>'Cliente deletado com sucesso!',
        ]);
      } else {
        return response()->json([
          'error'=>'Infelizmente, correu um erro ao tentar deletar cliente!',
        ]);
      }
    }
}
