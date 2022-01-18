<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Buyer;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Buyer::all();
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
        $request->validate([
            'user_id'   => 'required',
            'kelas'     => 'required|string'
        ]);

        return Buyer::create($request->all());

        // $buyer = new Buyer;
        // $buyer->user_id->name   = $request->user->name;
        // $buyer->kelas           = $request->kelas;
        // $buyer->save();

        // return Buyer::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Buyer::find($id);
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
           $buyer = Buyer::find($id);
           $buyer->update($request->all());

           return $buyer;
        
        // $nama   = $request->user_id->name;
        // $kelas  = $request->kelas;

        // $buyer  = Buyer::find($id);
        // $buyer->nama = $nama;
        // $buyer->kelas = $kelas;
        // $buyer->save();

        // return $buyer;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Buyer::destroy($id);
    }
}
