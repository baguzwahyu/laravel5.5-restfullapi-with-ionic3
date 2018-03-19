<?php

namespace App\Http\Controllers\Api;

use App\Tbitems;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TbitemsController extends Controller
{
    public function index()
    {
        return Tbitems::all();
    }

    public function store(Request $request)
    {
        $tbitems = Tbitems::create($request->all());

        return $tbitems;
    }

    public function show($id)
    {
        return Tbitems::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $tbitems = Tbitems::findOrFail($id);
        $tbitems->update($request->all());

        return $tbitems;
    }

    public function destroy($id)
    {
        $tbitems = Tbitems::findOrFail($id);
        $tbitems->delete();

        return '';
    }
}
