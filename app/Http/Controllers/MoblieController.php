<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moble;
use Mail;
use PDF;
class MoblieController extends Controller
{

    
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index() 
    {
        $moblies =   Moble::orderBy('id', 'DESC')->get();
        return view('moble.index' , compact('moblies'));
    }  


    public function create() 
    {
        return view('moble.create');
    }  


    public function store(Request $request) 
    {
        $moblie =  new Moble();
        $moblie->nameperson =  $request->nameperson;
        $moblie->numberperson =  $request->numberperson;
        $moblie->typedev =  $request->typedev;
        $moblie->colordev =  $request->colordev;
        $moblie->typedisply =  $request->typedisply;
        $moblie->priscall =  $request->priscall;
        $moblie->stutstype =  $request->stutstype;
        $moblie->cassdev =  $request->cassdev;
        $moblie->namegiv =  $request->namegiv;
        $moblie->timegiv =  $request->timegiv;
        $moblie->note =  $request->note;
        $moblie->status =  0 ;

   

        $request->validate([
            'nameperson' =>   ['required', 'max:255'],
            'numberperson' => ['required'],
            'typedev' =>      ['required'],
            'colordev' =>     ['required'],
            'typedisply' =>   ['required'],
            'priscall' =>     ['required'],
            'stutstype' =>    ['required'],
            'cassdev' =>      ['required'],
            'namegiv' =>      ['required'],
            'timegiv' =>      ['required'],
            'note' =>         ['required'],
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
    }




    public function edit($id) {
        $moblie =   Moble::find($id);
        return  view('moble.edit' , compact('moblie'));
    }


    public function update(Request $request, $id) 
    {
        $moblie =   Moble::find($id);
        $moblie->nameperson =  $request->nameperson;
        $moblie->numberperson =  $request->numberperson;
        $moblie->typedev =  $request->typedev;
        $moblie->colordev =  $request->colordev;
        $moblie->typedisply =  $request->typedisply;
        $moblie->priscall =  $request->priscall;
        $moblie->stutstype =  $request->stutstype;
        $moblie->cassdev =  $request->cassdev;
        $moblie->namegiv =  $request->namegiv;
        $moblie->timegiv =  $request->timegiv;
        $moblie->note =  $request->note;
        $moblie->status = $request->status ;
        $moblie->save();
        return   view('moble.show' , compact('moblie'));

    }
}