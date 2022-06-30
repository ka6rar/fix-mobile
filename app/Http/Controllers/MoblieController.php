<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moble;
use Mail;
use PDF;
class MoblieController extends Controller
{



    public function index() 
    {
        $moblies =   Moble::get();
        return view('moble.index' , compact('moblies'));
    }  


    public function create() 
    {
        return view('moble.create');
    }  


    public function store(Request $request) 
    {
        $moblie =  new Moble();



        $request->validate([
            'nameperson' => ['required', 'max:255'],
            'numberperson' => ['required'],
            'typedev' => ['required'],
            'colordev' => ['required'],
            'typedisply' => ['required'],
            'priscall' => ['required'],
            'stutstype' => ['required'],
            'cassdev' => ['required'],
            'namegiv' => ['required'],
            'timegiv' => ['required'],
            'note' => ['required'],
        ]);



   
            // $data =  [
            //     'name' => $request->name,
            //     'email' => $request->email,
            //     'messages' => $request->messages,
            // ];

            // Mail::send('SendMail.sendmoblenotfix', $data, function ($message) use ($data) {
            //     $message->from('karar3931@gmail.com');
            //     $message->to('karar3931@gmail.com');
            //     $message->replyTo($data['email']);
            //     $message->subject($data['name']);
            // });



        $moblie->save();
        return  view('moble.show' , compact('moblie'));
    }




    public  function show($id) 
    {
     $moblie =   Moble::find($id);
     return  view('moble.show' , compact('moblie'));
     
    }


    
    public function print($id) 
    {
        $moblie =   Moble::find($id);
        $data = [
            'moblie'         => $moblie->nameperson,
            'numberperson'   => $moblie->numberperson,
            'typedev'        => $moblie->typedev   ,
            'colordev'       => $moblie->colordev  , 
            'typedisply'     =>  $moblie->typedisply   ,
            'priscall'       =>  $moblie->priscall   ,
            'stutstype'      =>  $moblie->stutstype   ,
            'cassdev'        =>   $moblie->cassdev   ,
            'namegiv'        =>   $moblie->namegiv   ,
            'timegiv'        =>   $moblie->timegiv   ,
            'id'             =>  $moblie->id   ,
            'note'           =>  $moblie->note   ,

        ];

        return $pdf = PDF::loadView('moble.pdf', $data)
        ->stream();
        // stream
    }




    

}