<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialgest\Instapago\Instapago;


class InstapagoController extends Controller
{
   
public function pay()
{
    $paymentData = [
        'amount' => '200',
        'description' => 'test',
        'cardHolder' => 'jon doe',
        'cardHolderId' => '11111111',
        'cardNumber' => '4111111111111111',
        'cvc' => '123',
        'expirationDate' => '12/2019',
        'IP' => '127.0.0.1',
    ];

    try{
            $instapago = new Instapago();
            $respuesta = $instapago->directPayment($paymentData);
            // hacer algo con la respuesta

            echo "Paso la Tarjeta";
            echo '</BR>';
            echo 'Número de referencia del pago: ' . $respuesta['reference'];
            echo '</BR>';
            echo 'ID del Pago' . $respuesta['id_pago'];
            echo '</BR>';
            echo 'Mensaje' . $respuesta['msg_banco'];
            echo '</BR>';
            echo 'Fecha Operacion' . $respuesta['datetime'];
            echo '</BR>';
            echo 'Monto' . $respuesta['amount'];
           

            //return response()->json($respuesta);



    } catch(\Socialgest\Instapago\Instapago\Exceptions\InstapagoException $e){
        // manejar el error

        echo "No Paso la Tarjeta";
    } catch(\Socialgest\Instapago\Instapago\Exceptions\TimeoutException $e){
        // manejar el error
    		   echo "Tiempo Excedido";


    }     
}















}
