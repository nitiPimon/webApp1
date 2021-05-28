<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Restaurant::orderBy('id', 'desc')->take(3)->get();
        //dd($data);
       return view('search', compact('data'));
        
        
     
    }
    /**
     * Search name of restaurant from database.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $search_text = $_GET['query'];
        
        $searchRestaurant = Restaurant::where('name','LIKE','%'.$search_text.'%')->get();
        
        return view('searchDashboard',compact('searchRestaurant'));
       
    }
}
