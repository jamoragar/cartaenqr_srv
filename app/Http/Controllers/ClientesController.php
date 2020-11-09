<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;
use App\Models\User;

class ClientesController extends Controller
{
    public function infoCliente(Request $request){
        $param = $request->only('id_cliente');
        if($param && $info_cliente = User::where('cod_cliente', $request->id_cliente)->first()){
            $categoria = Categorias::where('id_cliente', $param)->get();
            $logo = asset($info_cliente->ruta_logo);
            foreach($categoria as $key => $cat){
                if($categoria[$key]['ruta_archivo'])
                    $categoria[$key]['ruta_archivo'] = asset($cat['ruta_archivo']);
                else
                    $categoria[$key]['ruta_archivo'] = null;
            };  
            $respuesta = new Class{};
            $respuesta->categorias   = $categoria;
            $respuesta->logo = $logo;
            $respuesta->info_cliente = $info_cliente;

            return json_encode($respuesta);

            // return ($categoria);
        }else{
            return ('not_found');
        }
        return ('not_found');
    }

    public function crearCliente(Request $request){
        return json_encode(bcrypt('password'));
    }

    public function modificarCliente(Request $request){

    }
    public function inhabilitarCliente(Request $request){

    }
}
