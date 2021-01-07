<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArticleRequest;
use App\Http\Requests\levelCreateArticleRequest;
use App\Models\Team;
use App\Models\team06_typhoon;
use Illuminate\Http\Request;
use App\Models\team06_level;
class LevelController extends Controller
{
    public function main_view()
    {
        $level=team06_level::all();
        return view('level.level',['levels'=>$level]);
    }
    public function level_add()
    {
        return view('level.level_add');
    }

    public function level_delete($id)
    {
        return "tobe";
    }
    public function level_show($id)
    {
        $level = team06_level::findOrFail($id);
        return view('level.level_show', ['level' => $level]);
    }
    public  function level_add_updating(levelCreateArticleRequest $request)
    {
        $level= new team06_level;
        $level->id=$request->input('id');
        $level->description=$request->input('description');
        $level->save();
//        $level=team06_level::query()->findOrFail($request->id);
        return view('level.level_show',['level' => $level]);
        //return $request;
    }
    public  function level_edit($id)
    {
        $level=team06_level::findOrFail($id);
        return view('level.level_edit',['level'=>$level]);
    }
    public function update(levelCreateArticleRequest $request,$id)
    {
        $level=team06_level::query()->findOrFail($id);
        $level->description=$request->input('description');
        $level->save();

        //$level=team06_level::query()->findOrFail($id);
        return view('level.level_show',['level'=>$level]);
    }
    public function destroy($id)
    {
        $level = team06_level::findOrFail($id);
        $level->delete();
        return redirect('level');
    }
    public function level()
{
    return team06_level::all();
}


    public function api_level()
    {
        return team06_level::all();
    }

    public function api_update(Request $request)
    {
        $level = team06_level::find($request->input('id'));
        if ($level == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        $level->id = $request->input('id');
        $level->description = $request->input('description');

        if ($level->save())
        {
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
        $level = team06_level::find($request->input('id'));

        if ($level == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        if ($level->delete())
        {
            return response()->json([
                'status' => 1,
            ]);
        }

    }

}
