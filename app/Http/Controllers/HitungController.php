<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HitungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // if($request->all(){
        //     dd($request->all())
        // })

        $titlebar="Halaman Bangun Ruang";
        $alas= "";
        $tinggi="";
        $luas="";

        // menerima request
        if($request->alas != '' && $request->tinggi != '' ||
         $request->alas != 'null' && $request->tinggi != 'null' ){
            $alas= $request->alas;
            $tinggi= $request->tinggi;
            $luas= 1/2 * ($alas * $tinggi);
    }{

     return view('segitiga',[
         'titlebar' => $titlebar,
         'alas' => $alas,//isi data yg akan dkirim
         'tinggi'=>$tinggi,
         'luas'=> $luas
     ]);
    }



}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
