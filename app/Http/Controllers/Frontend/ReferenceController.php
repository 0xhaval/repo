<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Reference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReferenceController extends Controller
{
    public function index()
    {
        return view('frontend.references.index',[
            'references' => Reference::query()
            ->when('search', function($query){
                // use query model for search
                $query->search(request('search'));
            })->
            latest(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function show(Reference $reference)
    {
        return view('frontend.references.show', compact('reference'));
    }

    public function showSemester($level, $semester)
    {
        return view('frontend.references.showSemester',[
            'references' => DB::table('references')
                                    ->where('level', 'LIKE', $level,
                                     'and', 'semester', 'LIKE', $semester)
                                    ->get(),
        ]);
    }
}
