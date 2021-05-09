<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class AdminReviewController extends Controller
{

    public function index()
    {
        $data = Review::latest()->paginate(5);
        return view('admin.reviewsUser', compact('data'))
            ->with('i', (request()->input('page', 1) -1) * 5);

    }

    public function destroy($id)
    {     //
        Review::find($id)->delete();
        return redirect()->route('adminReview')->with('success', 'Resturant Deleted Successfully.');
        
    }
}
