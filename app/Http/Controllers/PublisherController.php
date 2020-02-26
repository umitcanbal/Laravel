<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publisher;
use App\Book;

class PublisherController extends Controller
{
    public function index() {
        $myData = Publisher::all();
        
        // return view("/publishers/index", compact($myData)); BÖYLE BİR HATA YAPTIM, 5 DK BAKINDIM.
        
        return view("/publishers/index", compact("myData"));
    }

    public function show($id) {
        $mySinglePublisher = Publisher::find($id);
        $mySinglePublishersBooks = Book::where("publisher_id", $id)->get();
        // $mySinglePublishersBooks = DB::select("publisher_id", $id);
        //Bu üstteki kodla da seçebilmem lazım ama nasıl bilemedim.
        return view("/publishers/show", compact("mySinglePublisher", "mySinglePublishersBooks")); 
    }
}
