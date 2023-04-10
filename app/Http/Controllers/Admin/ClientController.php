<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


class ClientController extends Controller
{

    public function index(){
        $clients = Client::all();
        return view('clients.index',compact('clients'));
    }


    public function create(){
        return view('clients.create');
    }


    public function store(Request $request)
    {
        dd($request->all());
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'company' => 'required',
            'tele' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'fax' => 'required',
            'website' => 'required',
            'position' => 'required',
            'postcode' => 'required',
            'address' => 'required',
            'question1' => 'required',
            'question2' => 'required',
            'question3' => 'required',
            'question4' => 'required',
            'question5' => 'required',
            'question6' => 'required',
            'question7' => 'required',
            'question8' => 'required',
            'question9' => 'required',
            'question10' => 'required',
            'question11' => 'required',
            'question12' => 'required',
            'question13' => 'required',
            'question14' => 'required',
            'question15' => 'required',
            'question16' => 'required',
            'question17' => 'required',
            'question18' => 'required',
            'question19' => 'required',
        ]);

        if($validator->fails()){
            return back()->withErrors('your error message is here');
        }

        $client=Client::create([
            'name' => $request->name,
            'company'=>$request->company,
            'tele'=>$request->tele,
            'email' => $request->email,
            'contact' => $request->contact,
            'fax' => $request->fax,
            'website'=>$request->website,
            'position'=>$request->position,
            'postcode'=>$request->postcode,
            'address'=>$request->address,
            'question1'=>$request->question1,
            'question2'=>$request->question2,
            'question3'=>$request->question3,
            'question4'=>$request->question4,
            'question5'=>$request->question5,
            'question6'=>$request->question6,
            'question7'=>$request->question7,
            'question8'=>$request->question8,
            'question9'=>$request->question9,
            'question10'=>$request->question10,
            'question11'=>$request->question11,
            'question12'=>$request->question12,
            'question13'=>$request->question13,
            'question14'=>$request->question14,
            'question15'=>$request->question15,
            'question16'=>$request->question16,
            'question17'=>$request->question17,
            'question18'=>$request->question18,
            'question19'=>$request->question19,
        ]);
        // dd($client);

        return redirect('client/index')->with('status', 'Client Created successfully');
    }


    public function show(client $client)
    {
        return view('clients.show',compact('client'));
    }

    public function edit($id){
        $client = Client::where('id', $id)->first();
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $client=Client::find($id);


        Client::where('id', $id)->update([
            'name' => $request->name,
            'company'=>$request->company,
            'tele'=>$request->tele,
            'email' => $request->email,
            'contact' => $request->contact,
            'fax' => $request->fax,
            'website'=>$request->website,
            'position'=>$request->position,
            'postcode'=>$request->postcode,
            'address'=>$request->address,
            'question1'=>$request->question1,
            'question2'=>$request->question2,
            'question3'=>$request->question3,
            'question4'=>$request->question4,
            'question5'=>$request->question5,
            'question6'=>$request->question6,
            'question7'=>$request->question7,
            'question8'=>$request->question8,
            'question9'=>$request->question9,
            'question10'=>$request->question10,
            'question11'=>$request->question11,
            'question12'=>$request->question12,
            'question13'=>$request->question13,
            'question14'=>$request->question14,
            'question15'=>$request->question15,
            'question16'=>$request->question16,
            'question17'=>$request->question17,
            'question18'=>$request->question18,
            'question19'=>$request->question19,
        ]);


        return redirect('client/index')->with('status', 'Client Updated successfully');
    }

    public function delete(Request $request,$id)
    {
        $client= Client::where('id', $id)->delete();
        return redirect('client/index')->with('status', 'Client Deleted successfully');
    }




}
