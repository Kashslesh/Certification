<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ChatModel;
use Illuminate\Support\Facades\DB;



class MessagerieController extends Controller
{
    public function envoyerMessage(Request $request)
    {   
        if(Auth::user()){
            
            $textMessage = new ChatModel();
            $textMessage->user_id = Auth::user()->id;
            $textMessage->message = $request["messagerie"];
            $textMessage->save();
            
            return back();
        }else {
            return back('/login')->with('success','Pour démarrer la communication connectez-vous');
        }
    }
    public function messageListjson(){
        $messagesBdd = DB::table('users')
        ->join('chat_models','users.id','=', 'chat_models.user_id')
        ->select('users.*','chat_models.message')
        ->get();
        return response()->json($messagesBdd);
    }
}   
