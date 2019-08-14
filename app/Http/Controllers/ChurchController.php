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
                'id'     => $church->id,
                'church' => $church->church_name,
                'pastor' => $church->pastor_surnames.', '.$church->pastor_names,
                'action' => $church->id,
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
            'pastor_names'    =>$request['pastor_names'],
            'pastor_surnames' =>$request['pastor_surnames'],
            'ci'              =>$request['ci'],
            'church_name'     =>$request['church_name'],
            'email'           =>$request['email'],
        ],
        [
            'pastors_address' =>$request['pastors_address'],
            'phone'           =>$request['phone'],
            'church_address'  =>$request['church_address'],
            'municipality_id' =>$request['municipality_id'],
            'city_id'         =>$request['city_id'],
            'parish_id'       =>$request['parish_id'],
            'denomination_id' =>$request['denomination_id'],
        ]);
    }

    public function edit($id)
    {
    	$record = Church::find($id);

        $denominations = Denomination::orderBy('name','ASC')->get();

        $cities = City::orderBy('name','ASC')->get();

        $states = State::orderBy('name','ASC')->get();

        $parishes = Parish::orderBy('name','ASC')->get();

        $municipalities = Municipality::orderBy('name','ASC')->get();
    	return view('app.churches.create-edit-form', compact('record','denominations',
                                                             'states','cities','municipalities','parishes'));
    }

    public function update(Request $request, $id)
    {
        Church::find($id)->update($request->all());
    }

    public function destroy($id)
    {
        // $church = Church::find($id)->delete();
        return response()->json(['message'=>'Success']);
    }
}
