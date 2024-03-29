<?php

namespace App\Http\Controllers;

use App\Models\line;
use App\Models\units;
use Illuminate\Http\Request;

class LineController extends Controller
{


    public function __construct()
    {
      $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($master=null)
    {

      $items=line::where(['main_line'=>$master])->get();

        return view("lines.index",["items"=>$items,'breadcrumb'=>'النشاطات','master'=>$master]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $breadcrumb="إضافة نشاط";
        $line_catogery=line::get();
        $line=line::get();
        return view("lines.create",['line_catogery'=>$line_catogery , 'breadcrumb'=>$breadcrumb ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $line=line::create([
        "name"=>$request->name,
        "terms"=>$request->terms,
        "not_include"=>$request->not_include,
        "main_line"=>$request->line_catogery,

     ]);
if( $line) {
    return  redirect()->back()->with(['message'=>"تم إضافة خدمة بنجاح"]);
}
else{
    return  redirect()->back()->withErrors($validator)->withInput();
}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\line  $line
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //get one kine element by id
        $line=line::find($id);
        // get all product in this line
        // get line with relation to item_lines
        $products=$line->item_lines;
// all units
        $units=units::get();



// retrun the line and product as ajax response as json with error code 200 and error handler
        return response()->json(['line'=>$line,'products'=>$products ,"units"=>$units],200);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\line  $line
     * @return \Illuminate\Http\Response
     */
    public function edit(line $line)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\line  $line
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
$id=$request->id;

        $line=line::find($id)->update([
            "name"=>$request->name,
            "terms"=>$request->terms,
            "not_include"=>$request->not_include,
            "main_line"=>$request->main_line,

         ]);

    if( $line) {
        return  redirect()->back()->with(['message'=>"تم تعديل خدمة بنجاح"]);
    }
    else{
        return  redirect()->back()->with(['message'=>"error"]);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\line  $line
     * @return \Illuminate\Http\Response
     */
    public function destroy( Request $request)
    {
        $line=line::find($request->id)->delete();
        if( $line) {
            return  redirect()->back()->with(['message'=>"تم حذف خدمة بنجاح"]);
        }
        else{
            return  redirect()->back()->withErrors($validator)->withInput();
        }
    }
}
