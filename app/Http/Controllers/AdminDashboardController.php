<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Review;
// use App\Images;
// use Image;

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
            'image' => 'required'
            
            ]);

            // $image_file = $request->image;
            // $image2 = Image::make($image_file);
            // $file->move('/image', $image2);
            
           

            // if ($request->hasFile('file')) {

            //     $request->validate([
            //         'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            //     ]);
    
            //     // Save the file locally in the storage/public/ folder under a new folder named /product
            //     $request->file->store('image', 'public');
    
            //     // Store the record, using the new file hashname which will be it's new filename identity.
            //     $data = new Restaurant([
            //         "name" => $request->get('name'),
            //         "image" => $request->file->hashName()
            //     ]);
            //     $data->save(); // Finally, save the record.
            // }
         
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
    {   

        $dataReviews = Review::where('restaurantID', $id); 
        $dataReviews->delete();
 

        Restaurant::find($id)->delete();
        return redirect()->route('adminDashboard')->with('success', 'Resturant Deleted Successfully.');
        
    }
}
