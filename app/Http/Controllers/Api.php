<?php

namespace App\Http\Controllers;

use App\Mail\Confirmation;
use Config\Informations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class Api extends Controller
{
    public function reservation(\App\Http\Requests\Request $request){
        $data = $request->all();
        $data['token'] = md5(uniqid(true));

        $Informations = new Informations;
        $Infos = $Informations->Restrictions();

        foreach($Infos['offDays'] as $offDays){
            if(date('D', strtotime($data['date'])) == $offDays) {
                return response()->json(['error' => "Désolé, notre salle de sport est fermée le weekend."], 400);
            }
        }

        if($data['time'] < "0".$Infos['openingHour'].":00"){
            return response()->json(['error' => "Désolé, notre salle de sport n'ouvre pas avant 9h."], 400);
        }

        if($data['time'] > $Infos['closingHour'].":00"){
            return response()->json(['error' => "Désolé, notre salle de sport est fermée après 18h."], 400);
        }

        DB::table('reservations')->insert([
            'token'=>$data['token'],
            'email'=>$data['email'],
            'date'=>$data['date'],
            'time'=>$data['time'],
        ]);

        Mail::to($data['email'])->send(new Confirmation($data));
        return response()->json(['error' => "Félicitation, votre réservation a été éffectué avec succès!"], 200);
    }

    public function cancel($token){
        DB::table('reservations')->where('token', $token)->delete();
        return response()->json(['error' => "Félicitation, votre réservation a été annulé!"], 200);
    }
}
