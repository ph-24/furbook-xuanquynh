<?php

namespace Furbook\Http\Controllers;

use Illuminate\Http\Request;
use Furbook\Cat;
use Validator;
class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $cats = Cat::all();
        return view('cats/index')->with('cats',$cats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('cats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* dd($request->all());*/
        $validator=$request->validate([
            'name'=>'required|size:255',
            'date_of_birth'=>'required|date_format:"yy/mm/dd"',
            'breed_id'=>'required|numeric'
        ],
        [   'required'=>'Cột: attribute là bắt buộc.',
            'size'=>'Cột: attribute độ dài phải nhỏ hơn 255 .',
            'date_format'=>'Cột: attribute có định dạng yy/mm/dd .',
            'numeric'=>'Cột: attribute phải là kiểu số .',
        ]
        );
       /* $validator=Validator::make($request->all(),[
            'name'=>'required|size:255',
            'date_of_birth'=>'required|date_format:"Y/m/d"',
            'breed_id'=>'required|numeric'
        ]);*/
        //if data invalid
        if($validator->fails()){
            return redirect()
            ->route('cat.create')
            ->withErrors($validator)
            ->withInput();
        }
        //insert cat
        $cat= Cat::create($request->all());
        //redirect back show cat
       return redirect()
       ->route('cat.show',$cat->id)
       ->with('cat',$cat)
       ->withSuccess('create cat success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat= Cat::find($id)->first();
    return view('cats.show')->with('cat',$cat);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat= Cat::find($id);
    return view('cats.edit')->with('cat',$cat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cat= Cat::find($id);
        $cat->update($request->all());
        return redirect()
        ->route('cat.show', $cat->id)
        ->withSuccess('update cat success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat->delete();
    return redirect('cats')
    ->route('cat.index')
    ->withSuccess('delete cat success');
    }
}
