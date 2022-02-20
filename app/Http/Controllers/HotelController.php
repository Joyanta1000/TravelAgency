<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Invoice;
use App\Review;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::all();
        return view('website.hotel.hotel-list', compact('hotels'));
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
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel, $id)
    {
        $res = $hotel->with('review')
            ->when($id, function ($query) use ($id) {
                return $query->where('id', $id);
            })
            ->get();

        $categories_reviews = $res->first()->review->groupBy('category_id')->map(function ($item) {
            return $item->avg('review');
        });

        $categories_reviews_own = $res->first()->review->where('reviewed_by', 1)->groupBy('category_id')->map(function ($item) {
            return $item->avg('review');
        });

        return view('website.hotel.hotel-detailed', compact('res', 'categories_reviews', 'categories_reviews_own'));
    }

    public function verify_invoice_to_review()
    {
        $invoiceChecked = Invoice::where('id', request()->get('reviewed_by'))->first();
        if ($invoiceChecked == null) {
            return response()->json(['message' => 'Invoice not found']);
        } else {
            $reviewed = Review::where('reviewed_by', request()->get('reviewed_by'))->first();
            if ($reviewed == null) {
                return response()->json(['message' => 'You Can Give Review', 'class' => 1]);
            } else {
                return response()->json(['message' => 'You Can Not Give Review']);
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        //
    }
}
