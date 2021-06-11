<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Review;
use Image;

class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $file;
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
            'timeOC' => 'required',
            'userID' => 'required',
            
            
            
            ]);

            
            if ($request->hasfile('image')) {
                $image = $request->file('image');
                
                foreach($image as $images) {
                    $name = $images->getClientOriginalName();
                    $path = $images->storeAs('image', $name, 'public');
    
                    Image::create([
                        'name' => $name,
                        'path' => '/storage/'.$path
                      ]);
                }
             }

             else
             {
                $request->image = '/image/6.jpeg';
             }

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
            'timeOC' => 'required',
            'userID' => 'required',
            
        ]);
        $data->name = $request->name;
        $data->body = $request->body;
        $data->location = $request->location;
        $data->timeOC = $request->timeOC;
        $data->userID = $request->userID;
        
        $data->save();
        return redirect()->route('adminDashboard')
                        ->with('success','Restaurant updated successfully');
    }


    public function destroy($id)
    {   

        $dataReviews = Review::where('restaurantID', $id); 
        $dataReviews->delete();
 

        Restaurant::find($id)->delete();
        return redirect()->route('adminDashboard')->with('success', 'Resturant Deleted Successfully.');
        
    }
}
