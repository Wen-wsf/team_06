<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArticleRequest;
use App\Models\Player;
use App\Models\Team;
use App\Models\team06_typhoon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TyphoonController extends Controller
{
    public function main_view()
    {
        $typhoon = team06_typhoon::all();

        $years = team06_typhoon::allYears()->get();
        $data = [];
        foreach ($years as $year) {
            $data["$year->year"] = $year->year;
        }
        return view('typhoon.typhoon', ['typhoons' => $typhoon, 'years' => $data]);
    }

    public function typhoon_add()
    {/*
        $id=30;
        $typhoon=new team06_typhoon;
        $typhoon->year=2000;
        $typhoon->$id;
        $typhoon->name="test";
        $typhoon->arrived=0;
        $typhoon->powerLV=0;
        $typhoon->level=0;
        $typhoon->save();
*/
        return view('typhoon.typhoon_add');
    }

    public function typhoon_edit($id)
    {
        $typhoon = team06_typhoon::findOrFail($id);
        return view('typhoon.typhoon_edit', ['typhoon' => $typhoon]);
    }

    public function typhoon_delete($id)
    {
        return "tobe";
    }

    public function typhoon_show($id)
    {
        $typhoon = team06_typhoon::findOrFail($id);
        return view('typhoon.typhoon_show', $typhoon);
    }

    public function typhoon_add_updating(CreateArticleRequest $request)
    {
        $typhoon = new team06_typhoon;
        $typhoon->year = $request->year;
        $typhoon->id = $request->id;
        $typhoon->name = $request->name;
        $typhoon->arrived = $request->arrived;
        $typhoon->powerLV = $request->powerLV;
        $typhoon->level = $request->level;
        $typhoon->save();
        $typhoon = team06_typhoon::query()->findOrFail($request->id);
        return view('typhoon.typhoon_show', $typhoon);
        //return $request;
    }

    public function update(CreateArticleRequest $request, $id)
    {
        $typhoon = team06_typhoon::query()->findOrFail($id);
        $typhoon->year = $request->year;
        $typhoon->id = $request->id;
        $typhoon->name = $request->name;
        $typhoon->arrived = $request->arrived;
        $typhoon->powerLV = $request->powerLV;
        $typhoon->level = $request->level;
        $typhoon->save();
        return view('typhoon.typhoon_show', $typhoon);
    }

    public function destroy($id)
    {
        $typhoon = team06_typhoon::findOrFail($id);
        $typhoon->delete();
        return redirect('typhoon');
    }

    public function senior()
    {
        $typhoons = team06_typhoon::senior()->get();
        return view('typhoon.senior', ['typhoons' => $typhoons]);
    }

    public function powerLV(Request $request)
    {
        $typhoons = team06_typhoon::powerLV($request)->get();
        return view('typhoon.powerLV', ['typhoons' => $typhoons]);
    }

    public function show($id)
    {
        $typhoon = team06_typhoon::findOrFail($id);
        $levels = $typhoon->levels;
        return view('typhoon.typhoon_show', ['typhoon' => $typhoon, 'levels' => $levels]);
    }

    public function typhoon()
    {
        return team06_typhoon::all();
    }

    public function api_typhoon()
    {
        return team06_typhoon::all();
    }


    public function api_update(Request $request)
    {
        $tyhpoon = team06_typhoon::find($request->input('id'));
        if ($tyhpoon == null) {
            return response()->json([
                'status' => 0,
            ]);
        }
        $tyhpoon->year = $request->input('year');
        $tyhpoon->id = $request->input('id');
        $tyhpoon->name = $request->input('name');
        $tyhpoon->arrived = $request->input('arrived');
        $tyhpoon->powerLV = $request->input('powerLV');
        $tyhpoon->level = $request->input('level');


        if ($tyhpoon->save()) {
            return response()->json([
                'status' => 1,
            ]);
        } else {
            return response()->json([
                'status' => 0,
            ]);
        }
    }

    public function api_delete(Request $request)
    {
        $tyhpoon = team06_typhoon::find($request->input('id'));

        if ($tyhpoon == null) {
            return response()->json([
                'status' => 0,
            ]);
        }

        if ($tyhpoon->delete()) {
            return response()->json([
                'status' => 1,
            ]);
        }
    }
}
