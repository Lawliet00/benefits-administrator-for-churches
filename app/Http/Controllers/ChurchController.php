<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Denomination;
use App\Municipality;
use App\Church;
use App\Parish;
use App\State;
use App\City;

use Auth;

class ChurchController extends Controller
{
    public function index()
    {
        $churches = [];

        foreach (Church::orderBy('church_name','ASC')->get() as $church) {
            array_push($churches, [
                'id'=> $church->id,
                'church'=> $church->church_name,
                'pastor'=> $church->pastor_surnames.', '.$church->pastor_names,
                'action'=> $church->id,
                // 'denomination'=> $church->denomination_id,

                // 'ci'=> $church->ci
                // 'phone'=> $church->phone
                // 'email'=> $church->email
                // 'church_address'=> $church->church_address
                // 'state_id'=> $church->state_id
                // ''=> $church->
                // ''=> $church->
                // ''=> $church->
                // ''=> $church->
                // ''=> $church->
                // ''=> $church->
            ]);
        }

        $churches = json_encode($churches);
    	return view('app.churches.index',compact('churches'));
    }

    public function create()
    {
        $denominations = Denomination::orderBy('name','ASC')->get();

        $cities = City::orderBy('name','ASC')->get();

        $states = State::orderBy('name','ASC')->get();

        $parishes = Parish::orderBy('name','ASC')->get();

        $municipalities = Municipality::orderBy('name','ASC')->get();

    	return view('app.churches.create-edit-form',compact('denominations','states','cities','municipalities','parishes'));
    }

    public function store(Request $request)
    {
        Church::updateOrCreate([
            'pastor_names'=>$request['pastor_names'],
            'pastor_surnames'=>$request['pastor_surnames'],
            'ci'=>$request['ci'],
            'church_name'=>$request['church_name'],
        ],
        [
            'pastors_address'=>$request['pastors_address'],
            'phone'=>$request['phone'],
            'email'=>$request['email'],
            'church_address'=>$request['church_address'],
            'municipality_id'=>$request['municipality_id'],
            'city_id'=>$request['city_id'],
            'parish_id'=>$request['parish_id'],
            'denomination_id'=>$request['denomination_id'],
            // 'state_id'=>$request['state_id'],
        ]);
    }

    public function edit($id)
    {
    	$church = Church::find($id);
    	return view('app.churches.create-edit-form', compact('church'));
    }
}
