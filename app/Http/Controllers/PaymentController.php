<?php

namespace App\Http\Controllers;

use App\Payment;
use Socialgest\Instapago\Instapago;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::all();
        return view('payments.consult',compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('payments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  
    {
        
        $request->validate([
            'amount' => 'required',
            'description' => 'required',
            'cedula' => 'required',
            'cardName' => 'required',
            'cvv' => 'required',
            'cardNumber' => 'required',
        ]);
              
        $validateDate = $this->dateValidate($request->mes, $request->anual);
        $cardNumber = $this->limpia_espacios($request->cardNumber);
        $cardName = strtoupper($request->cardName);
        $expirationDate = $request->mes.'/'.$request->anual;


    
        if($validateDate){

            /*
            *    Enviando datos a API a de Instapago
            *
            */

            $paymentData = [
                'amount' => $request->amount,
                'description' => $request->description,
                'cardHolder' => $cardName,
                'cardHolderId' => $request->cedula,
                'cardNumber' => $cardNumber,
                'cvc' => $request->cvv,
                'expirationDate' => $expirationDate,
                'IP' => $_SERVER['SERVER_ADDR'],
            ];
    
            try{
                $instapago = new Instapago();
                $respuesta = $instapago->directPayment($paymentData);
                $monto = $this->quitarComa($respuesta['amount']);

                // hacer algo con la respuesta           
                
            /* -------------------------------------------------- 
            *                 Registrar Pago 
            *
            ------------------------------------------------------*/


                         $Payment = new Payment([
                         'reference' => $respuesta['reference'],
                          'amount'=> $monto,
                          'msg_banco'=> $respuesta['msg_banco'],
                          'date_bank'=> $respuesta['datetime']
                         ]);
            
                        $Payment->save();
              


                                if($Payment){
                                return redirect('/')->with('success','Se he registrado el pago correctamente');
                                }else{
                                return back()->with('error','Error al cargar los datos');
                                }

            
               
    
                } catch(\Socialgest\Instapago\Instapago\Exceptions\InstapagoException $e){
                        // manejar el error
                        
                          
                          
                } catch(\Socialgest\Instapago\Instapago\Exceptions\TimeoutException $e){
                
                        // manejar el error
                        
                          
    
                }     
    

   
           

        }else{

                    return back()->with('error','Tarjeta vencida');

        }


        
       
 
 

       



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }

    /*
    *    Funcion para limpiar espacios para 
    *    los números de las tarjetas
    *
    */
    public function limpia_espacios($cadena){
        $cadena = str_replace(' ', '', $cadena);
        return $cadena;
    }

    
    /*
    *    Funcion para quitar la coma 
    *    del monto
    *
    */
    public function quitarComa($monto){
        $monto = str_replace(',', '', $monto);
        return $monto;
    }

    /*
    *    Funcion para validar fecha de tarjeta vencidas 
    *    
    *
    */
    public function dateValidate($mesTarjeta, $anualTarjeta){
        
        $mesActual = date('m');
        $anualActual = date('Y');

                if($anualTarjeta > $anualActual){
                   
                        return true;


                }else if($anualTarjeta == $anualActual){

                        if($mesTarjeta >= $mesActual){

                            return true;

                        }else{

                            return false;

                        }
                
               
                }else{

                        return false;

                }

        
    }
}
