<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use App\Cuenta;

use Illuminate\Http\Request;

class MercadoLibreApiController extends Controller
{    

    //Get the code from mercado libre api autorizator
    public function RegisterNewUser(Request $request){
        
        $code = $request->query('code');
        return view('NewMercadoUser.register', ['code' => $code]);
        
    }

    public function GetAccessToken(String $code, String $client_id, String $client_secret){
        
        $REDIRECT_URI = ENV('REDIRECT_URI_DEV');        

        $url = 'https://api.mercadolibre.com/oauth/token';
        $response = Http::post($url, [
            'grant_type' => 'authorization_code',
            'client_id' => $client_id,
            'client_secret' => $client_secret,
            'code' => $code,
            'redirect_uri' => $REDIRECT_URI,
        ]);
        return $response->json();

    }

    //save 
    public function StoreNewUser(Request $request){

        $client_id = $request->client_id;
        $client_secret = $request->client_secret;
        $code = $request->code;
        $name = $request->name;

        //get access token
        $response = $this->GetAccessToken($code, $client_id, $client_secret);    
        if(isset($response['error'])){            
            //TODO: mostrar mensaje de error
            dd($response);
            return;
        }        
        
        $access_token = $response['access_token'];    
        $scope = $response['scope'];    

        //new cuenta mercado
        $cuenta_mercado = new Cuenta();
        $cuenta_mercado->id_super_cuenta = 1;
        $cuenta_mercado->client_id = $client_id;
        $cuenta_mercado->client_secret = $client_secret;
        $cuenta_mercado->authorization_code = $scope;
        $cuenta_mercado->name = $name;
        $cuenta_mercado->access_token = $access_token;
        $cuenta_mercado->save();

        dd($response);
        
    }

}
