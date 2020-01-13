<?php

namespace App\Http\Controllers;

use App\Http\Requests\IdeaCreateRequest;
use App\Idea;

class IdeaController extends Controller
{
    public function index()
    {
        $ideas = Idea::orderBy('id', 'DESC')->get();
        return $ideas;
    }

    public function store(IdeaCreateRequest $request)
    {
        Idea::create($request->all());
        return response()->json([
            'message' => 'Idea registrada correctamente en la base de datos'
        ]);
    }
}
