<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $todos = Todo::all();
        return view('index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title'=> 'required',
            'description'=> 'required|min:5',
        ],[
            'title.required'=> 'Başlık alanı zorunludur!',
            'description.required'=> 'Açıklama alanı zorunludur!',
            'description.min'=> 'Açıklama alanı en az 5 karakterden oluşmalıdır!',
        ]);
        $is_created=Todo::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        if($is_created){

            return redirect()->route('index')->with('success','Todo başarıyla oluşturuldu!');
        }
        return redirect()->route('create')->with('error','Todo oluşturulurken bir hata oluştu!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $todo = Todo::find($id);
        return view('show', compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $todo = Todo::find($id);
        return view('edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'title'=> 'required',
            'description'=> 'required|min:5',
        ],[
            'title.required'=> 'Başlık alanı zorunludur!',
            'description.required'=> 'Açıklama alanı zorunludur!',
            'description.min'=> 'Açıklama alanı en az 5 karakterden oluşmalıdır!',
        ]);

        $is_success=Todo::find($id)->update([
            'title'=> $request->title,
            'description'=> $request->description,
            'completed'=> $request->completed
        ]);
        if($is_success){
            return redirect()->route('index')->with("success","Todo başarıyla güncellendi!");
        }
        return redirect()->route('index')->with("error","Todo güncellenirken bir hata oluştu!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $is_deleted=Todo::find($id)->delete();

        if($is_deleted){
            return redirect()->route("index")->with("deleted_success","Todo başarıyla silindi!");
        }
        return redirect()->route('index')->with("deleted_error","Todo silinirken bir hata oluştu!");

    }
}