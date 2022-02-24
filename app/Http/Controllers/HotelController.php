<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Invoice;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Flash\Message;
use Alert;
use App\ReviewCategory;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $hotels = Hotel::with(['review' => fn ($query) => $query->where('is_publish', 'Published')])->get();
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
        $comment = $request->comment;
        // dd($hotel_id, $reviewed_by, $comment);
        // $review = [];
        for ($i = 0; $i < count($request->review); $i++) {
            $review['hotel_id'] = $hotel_id;
            $review['category_id'] = $request->category_id[$i];
            $review['review'] = $request->review[$i];

            $review['reviewed_by'] = $request->reviewed_by;

            $review['comment'] = $comment;

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

        $categories = ReviewCategory::all();

        $zeroReviewed = collect([]);

        for ($i = 0; $i < count($categories); $i++) {

            $zeroReviewed->put($categories[$i]->id, 0);
        }
        if (request()->get('invoice_id') == null) {
            $res = $hotel->with(['review' => fn ($query) => $query->where('is_publish', 'Published')])

                ->when($id, function ($query) use ($id) {
                    return $query->where('id', $id);
                })
                // ->when(request()->get('invoice_id'), function ($query) {
                //     return $query->whereHas('review', function ($query) {
                //                     $query->where('reviewed_by', request()->get('invoice_id'));
                //                 });
                //             })

                ->get();
        } else {
            $res = $hotel->whereHas('review')->with(['review' => fn ($query) => $query->where('reviewed_by', request()->get('invoice_id'))])
                // ->when($id, function ($query) use ($id) {
                //     return $query->where('id', $id);
                // })
                // ->whereHas('review', function ($query) {
                //                   return  $query->whereNotNull('review');
                //                 })

                // ->exists();


                ->get();


            // ->whereHas('review', function ($query) {
            //     $query->where('reviewed_by', request()->get('invoice_id'));
            // })
            //     // ->when($id, function ($query) use ($id) {
            //     //     return $query->where('reviewed_by', request()->get('invoice_id'));
            //     // })
            //     ->get();

            // dd($res);
        }

        $own_or_not = 0;

        if (request()->get('invoice_id') == null) {

            $categories_review = $res->first()->review->where('is_publish', 'Published')->groupBy('category_id')->map(function ($item) {
                return $item->avg('review');
            });
        } else {
            $categories_review = $res->first()->review->where('reviewed_by', request()->get('invoice_id'))->where('is_publish', 'Published')->groupBy('category_id')->map(function ($item) {
                return $item->avg('review');
            });

            // dd($categories_review);

            $own_or_not = 1;
        }

        // dd($categories_reviews);

        $categories_reviews = $categories_review->toArray() != null ? $categories_review : $zeroReviewed;

        $reviewed_by = array();

        if (Auth::check()) {
            foreach (Auth::user()->invoice as $reviewed) {
                array_push($reviewed_by, $reviewed->id);
            }
        }

        // if (request()->get('invoice_id') == null) {
        $categories_reviews_o = $res->first()->review->where('is_publish', 'Published')->whereIn('reviewed_by', $reviewed_by)->groupBy('category_id')->map(function ($item) {
            return $item->avg('review');
        });
        // } else {

        //     $categories_reviews_o = $res->first()->review->where('is_publish', 'Published')->whereIn('reviewed_by', request()->get('invoice_id'))->groupBy('category_id')->map(function ($item) {
        //         return $item->avg('review');
        //     });
        // }

        // dd($res);

        $categories_reviews_own = $categories_reviews_o->toArray() != null ? $categories_reviews_o : $zeroReviewed; 

        // $comments = Review::where('is_publish', 'Published')->groupBy('reviewed_by')
        // // $hotel->with(['review' => fn ($query) => $query->where('is_publish', 'Published')->groupBy('reviewed_by')])
        //     // ->when($id, function ($query) use ($id) {
        //     //     return $query->where('id', $id);
        //     // })
        //     ->get();

        // dd($comments);

        // $hotel_review = collect([]);

        $reviews = $res->first()->review->where('is_publish', 'Published')->whereIn('reviewed_by', $reviewed_by)->groupBy('reviewed_by')->map(function ($item) {
            return $item->avg('review');
        });

            // dd($reviews);

    //    $g = Hotel::with('review')->get()->groupBy('review.reviewed_by')->get();
// dd($g);
        
        return view('website.hotel.hotel-detailed', compact('reviews','res', 'categories_reviews', 'categories_reviews_own', 'own_or_not'));
    }

    public function invoice_wise_review()
    {
        $reviewed_by = array();

        if (Auth::check()) {
            foreach (Auth::user()->invoice as $reviewed) {
                array_push($reviewed_by, $reviewed->id);
            }
        }


        $reviewDetails = Review::whereIn('reviewed_by', $reviewed_by)->where('is_publish', 'Published')->with('hotel')->get();
        // dd($reviewDetails->groupBy('reviewed_by'));
        return view('website.hotel.invoice_wise_review', compact(['reviewDetails', 'reviewed_by']));
    }

    public function verify_invoice_to_review()
    {
        $invoiceChecked = Invoice::where(['id' => request()->get('reviewed_by'), 'user_id' => Auth::user()->id])->first();
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
