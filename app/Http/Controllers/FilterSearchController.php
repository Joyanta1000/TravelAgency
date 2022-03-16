<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilterSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function toFilter()
    {
        $data = [
            'accomodation_type' => request('accomodation_type'),
            'amenities' => request('amenities'),
            'host_language' => request('host_language'),
            'min_price' => request('min_price'),
            'max_price' => request('max_price'),
            'destination' => request('destination'),
            'check_in' => request('check_in'),
            'check_out' => request('check_out')
        ];

        // $html = view('website.hotel.filter_search')->with(compact('data'));
    // return response()->json(['success' => true, 'html' => $data]);
      
        return view('website.hotel.filter_search', compact('data'));
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
