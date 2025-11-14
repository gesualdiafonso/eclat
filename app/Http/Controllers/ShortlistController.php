<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShortlistController extends Controller
{
    public function index()
    {
        return response()->json([
            'modelo' => session('shortlist.modelo', []),
            'servicio' => session('shortlist.servicio', []),
        ]);
    }

    public function toggle(Request $request)
    {
        $request->validate([
            'item_id' => 'required|integer',
            'type' => 'required|in:modelo,servicio'
        ]);

        $type = $request->type;
        $id = $request->item_id;

        $key = "shortlist.$type";

        $list = session($key, []);

        if (in_array($id, $list)) {
            // remover
            $list = array_filter($list, fn($v) => $v != $id);
            session([$key => $list]);
            $selected = false;
        } else {
            // adicionar
            session()->push($key, $id);
            $selected = true;
        }

        // total combinado
        $total = count(session('shortlist.modelo', [])) + count(session('shortlist.servicio', []));

        return response()->json([
            'selected' => $selected,
            'total' => $total
        ]);
    }

}
