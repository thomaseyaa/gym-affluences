<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Request;
use App\Mail\Confirmation;
use Config\Informations;

class Reservation extends Controller
{
    public function reservation(Request $request){
        $data = $request->all();
        $data['token'] = md5(uniqid(true));

        $Informations = new Informations;
        $Infos = $Informations->Restrictions();

        foreach($Infos['offDays'] as $offDays){
            if(date('D', strtotime($data['date'])) == $offDays) {
                return redirect('reservation')->with('error', "Désolé, notre salle de sport est fermée le weekend.")->withInput();
            }
        }

        if($data['time'] < "0".$Infos['openingHour'].":00"){
            return redirect('reservation')->with('error', "Désolé, notre salle de sport n'ouvre pas avant 9h.")->withInput();
        }

        if($data['time'] > $Infos['closingHour'].":00"){
           return redirect('reservation')->with('error', "Désolé, notre salle de sport est fermée après 18h.")->withInput();
        }

        DB::table('reservations')->insert([
            'token'=>$data['token'],
            'email'=>$data['email'],
            'date'=>$data['date'],
            'time'=>$data['time'],
        ]);

        Mail::to($data['email'])->send(new Confirmation($data));
        return redirect('/')->with('reserved', "Félicitation, votre réservation a été éffectué avec succès!");
    }

    public function cancel($token){
        DB::table('reservations')->where('token', $token)->delete();
        return redirect('/')->with('deleted', "Félicitation, votre réservation a été annulé!");
    }
}
