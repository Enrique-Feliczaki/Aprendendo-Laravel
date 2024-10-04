<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreUpdateSupport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Support;

class SupportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Support $support)
    {
        $supports = $support->all();
        return view('Admin/supports/index', compact('supports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin/supports/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateSupport $request, Support $support)
    {
        $data  = $request->all();
        $data['status'] = 'a';
        $support->create($data);
        return redirect()->route('supports.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string|int $id)
    {
        if(! $support = Support::find($id)){
            return back();
        }
        return view('Admin/supports/show', compact('support'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Support $support, string|int $id)
    {
        if(! $support = $support->where('id',$id)->first()){
            return back();
        }
        return view('Admin/supports/edit', compact('support'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Support $support, Request $request, string $id)
    {
        if(! $support = $support->find($id)){
            return back();
        }
        $support->update($request->only([
            'subject', 'body'
        ]));
        return redirect()->route('supports.index');
        return view('Admin/supports/show', compact('support'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Support $support,string|int $id)
    {
        if(! $support = $support->find($id)){
            return back();
        }
        $support->delete();
        return redirect()->route('supports.index');
    }
}
