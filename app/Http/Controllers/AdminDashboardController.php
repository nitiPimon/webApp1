<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;


class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Restaurant::latest()->paginate(5);
        return view('admin.dashboard', compact('data'))
            ->with('i', (request()->input('page', 1) -1) * 5);

    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'body' => 'required',
            'location' => 'required',
            'userID' => 'required',
            'rating' => 'required',
            //'image' => 'required'
            ]);

            Restaurant::create($request->all());
            return redirect()->route('adminDashboard')
	            ->with('success', 'Restaurant created successfully.');
    }

    public function edit($id)
    {
        $data = Restaurant::find($id);
        return view('admin.edit', compact('data'));
    }


    public function update(Request $request, $id)
    {
        //
        $data = Restaurant::find($id);
        $request->validate([
            'name' => 'required',
            'body' => 'required',
            'location' => 'required',
            'userID' => 'required',
            'rating' => 'required',
        ]);
        $data->name = $request->name;
        $data->body = $request->body;
        $data->location = $request->location;
        $data->userID = $request->userID;
        $data->rating = $request->rating;
        $data->save();
        return redirect()->route('adminDashboard')
                        ->with('success','Restaurant updated successfully');
    }


    public function destroy($id)
    {     //
        Restaurant::find($id)->delete();
        return redirect()->route('adminDashboard');
        session()->flash('message', 'Resturant Deleted Successfully.');
    }
}
