<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Position;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NIMBBOController extends Controller
{
    //
    public function save(Request $request, $state)
    {
        // return $request->all();
        // $this->validate($request, [
        //     'name' => ['required', 'string'],
        //     'phone' => ['required', 'string'],
        //     'vin' => ['required', 'string'],
        //     'email' => ['required', 'string']
        // ]);
        $state = State::where('name', ucfirst(strtolower($state)))->first();
        if ($state) {
            $persons = [];
            foreach ($request->position_code as $key => $value) {
                $validation = $this->validateRequest($request, $key);
                if (count($validation) == 0) {
                    $persons[$key] = [
                        "name" => $request->name[$key],
                        "vin" => $request->vin[$key],
                        "phone" => $request->phone[$key],
                        "age" => $request->age[$key],
                        "exco" => $request->exco[$key],
                        "position_code" => $value,
                        "state_code" => $state->code,
                    ];
                } else {
                    $pos = Position::where('code', $value)->first();
                    return [$pos->title => $validation];
                }
            }
            DB::table('persons')->insert($persons);
            return redirect()->back();
        } else {
        }
    }

    public function form($state)
    {
        $state = State::where('name', ucfirst(strtolower($state)))->first();
        if ($state != null || $state != "") {
            $positions = Position::get();
            return view('welcome', compact('state', 'positions'));
        } else {
            return "not a valid state";
        }
    }

    protected function validateRequest($request, $key)
    {
        $validationResult = [];
        if ($request->name[$key] == null || $request->name[$key] == "") {
            $validationResult['name'] = "Name is not Valid";
        }
        if ($request->vin[$key] == null || $request->vin[$key] == "") {
            $validationResult['vin'] = "Vin is not Valid";
        }
        if ($request->age[$key] == null || $request->age[$key] == "") {
            $validationResult['age'] = "Age is not Valid";
        }
        if ($request->phone[$key] == null || $request->age[$key] == "") {
            $validationResult['phone'] = "Phone is not Valid";
        }
        return $validationResult;
    }
}
