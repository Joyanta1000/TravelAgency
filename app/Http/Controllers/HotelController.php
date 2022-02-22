<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Invoice;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Flash\Message;
use Alert;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::with('review')->get();
        // dd($hotels);
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

        // \Spatie\Flash\Flash::levels([
        //     'success' => 'alert-success',
        //     'warning' => 'alert-warning',
        //     'error' => 'alert-error',
        // ]);

        $hotel_id = $request->id;
        $reviewed_by = $request->reviewed_by;
        $review = [];
        for ($i = 0; $i < count($request->review); $i++) {
            $review['hotel_id'] = $hotel_id;
            $review['category_id'] = $request->category_id[$i];
            $review['review'] = $request->review[$i];

            $review['reviewed_by'] = $request->reviewed_by;

            Review::create($review);
        }

        // flash()->success('Reviews added successfully');
        // flash()->warning('Mayybeee');
        // flash()->error('Oh Oh');

        Alert::success('Your comments has been successfully sent', 'Success');

        return redirect()->back()->with('success', 'Reviews added successfully');
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

        // dd($categories_reviews);

        $reviewed_by = array();

        if (Auth::check()) {
            foreach (Auth::user()->invoice as $reviewed) {
                array_push($reviewed_by, $reviewed->id);
            }
        }


        $categories_reviews_own = $res->first()->review->whereIn('reviewed_by', $reviewed_by)->groupBy('category_id')->map(function ($item) {
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
