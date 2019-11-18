<?php

namespace App\Http\Controllers\Rating;

use App\Http\Controllers\Controller;
use App\Models\Rating;
use Illuminate\Http\Request;
use mongodb\mongodb;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$data['average'] = Rating::avg('Vote');
		$data['count'] = Rating::count();
		$data['models'] = Rating::take(10)->get();
		//return asset('js/app.js');
		return view('rating.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('rating.create');
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
		Rating::create($request->all());
		/*
		$rating = new Rating();
		$rating->Rank = $request->Rank;
		$rating->Title = $request->Title;
		$rating->Year = $request->Year;
		$rating->Score = $request->Score;
		$rating->Metascore = $request->Metascore;
		$rating->Genre = $request->Genre;
		$rating->Vote = $request->Vote;
		$rating->Director = $request->Director;
		$rating->Runtime = $request->Runtime;
		$rating->Revenue = $request->Revenue;
		$rating->Description = $request->Description;
		$rating->save();
		*/
		/*
		require 'vendor\autoload.php';
		$inserted = array (
			'Rank' => $request->Rank,
			'Title' => $request->Title,
			'Year' => $request->Year,
			'Score' => $request->Score,
			'Metascore' => $request->Metascore,
			'Genre' => $request->Genre,
			'Vote' => $request->Vote,
			'Director' => $request->Director,
			'Runtime' => $request->Runtime,
			'Revenue' => $request->Revenue,
			'Description' => $request->Description
			
		);
		
		$server = "mongodb://mongo-admin:password@192.168.16.126:27017/imdb";
		$c = new MongoClient( $server );
		$c->ratings->insert($inserted);
		*/
        return redirect()->route('rating.index')
                        ->with('success','Rating created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function show(Rating $rating)
    {
        //
		$data['model'] = $rating;
		return view('rating.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function edit(Rating $rating)
    {
        //
		$data['model'] = $rating;
		return view('rating.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rating $rating)
    {
        //
		$rating->update($request->all());


        return redirect()->route('rating.index')
                        ->with('success','Rating updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rating $rating)
    {
        //
		$rating->delete();


        return redirect()->route('rating.index')
                        ->with('success','Rating deleted successfully');
    }
}
