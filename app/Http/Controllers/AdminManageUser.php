<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Review;


class AdminManageUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::latest()->paginate(5);
        return view('admin.manageUser', compact('data'))
            ->with('i', (request()->input('page', 1) -1) * 5);

    }

   

    public function destroy($id)
    {     
        
        $dataReviews = Review::where('reviews', $id)->delete();

        User::find($id)->delete();
        return redirect()->route('adminManage')->with('success', 'Resturant Deleted Successfully.');
        
    }
}
