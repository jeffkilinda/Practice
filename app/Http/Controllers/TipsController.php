<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tip;
use App\Prediction;
use App\Status;
use App\Type;
use DB; 
use Carbon\Carbon;


class TipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
       //$tips = DB::select('SELECT * FROM tips');
       //$tips = DB::select('SELECT * FROM tips where 'date'CAST(NOW()');
      // $tips = Tip::Where('tip_type','EPL')->get();
       
       // $tips = Tip::Where('date',Carbon::now()->format('Y-m-d'))->get();
        
       $tips = Tip::Where('date',Carbon::now()->format('Y-m-d'))->orderBy('id','desc')->get();
        return view('tips.index')->with('tips', $tips);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //fetch from other tables for dropdown lists
       $prediction = Prediction::pluck('name','id')->all();
       $status = Status::pluck('name','id')->all();
       $type = Type::pluck('name','id')->all();
        return view('tips.create',compact('prediction','status','type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'date' => 'required',
            'time' => 'required|date_format:H:i',
            'league' => 'required',
            'team1' => 'required',
            'team2' => 'required',
            'prediction_id' => 'required',
            'odd' => 'required',
            'type_id' => 'required'
            
            /*'results' => 'required',
            'status_id' => 'required',
           */
        ]);
           $tip = new Tip;
           $tip->date = $request->input('date');
           $tip->time = $request->input('time');
           $tip->league = $request->input('league');
           $tip->team1 = $request->input('team1');
           $tip->team2 = $request->input('team2');
           $tip->prediction_id = $request->input('prediction_id');
           $tip->odd = $request->input('odd');
           $tip->type_id = $request->input('type_id');
          
          /* $tip->results = $request->input('results');

           $tip->status_id = $request->input('status_id');
           */

           $tip->save();
         
           
           return redirect('/tips/create')->with('success', 'Tip posted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $tip = Tip::find($id);
       return view('tips.show')->with('tip',$tip);

    }

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $tip = Tip::findOrFail($id);
      $prediction = Prediction::pluck('name','id')->all();
      $status = Status::pluck('name','id')->all();
      $type = Type::pluck('name','id')->all();
      return view('tips.edit',compact('tip','prediction','status','type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
         'date' => 'required',
         
         'time' => 'required|date_format:H:i',
         'league' => 'required',
         'team1' => 'required',
         'team2' => 'required',
         'prediction_id' => 'required',
         'odd' => 'required',
        
         'results' => 'required',
         'status_id' => 'required',
         'type_id' => 'required'
     ]);
        $tip = Tip::find($id);
        $tip->date = $request->input('date');
        $tip->time = $request->input('time');
        $tip->league = $request->input('league');
        $tip->team1 = $request->input('team1');
        $tip->team2 = $request->input('team2');
        $tip->prediction_id = $request->input('prediction_id');
        $tip->odd = $request->input('odd');
       
        $tip->results = $request->input('results');
        $tip->status_id = $request->input('status_id');
        $tip->type_id = $request->input('type_id');
        $tip->save();
      
        
        return redirect('/')->with('success', 'Tip updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
       $tip = Tip::find($id);
       $tip->delete();
       return redirect('/')->with('success', 'Tip deleted');
    }


    /*custom functions to fetch dffnt data */

public function adminindex() {
   $tips = Tip::Where('date',Carbon::now()->format('Y-m-d'))->get();
    return view('tips.adminindex')->with('tips', $tips);
}


 public function topTips() {
     
  // $tips = Tip::Where('type_id','2')->get();
   
  $tips = Tip::Where([['type_id','2'], ['date',Carbon::now()->format('Y-m-d')]])->orderBy('id','desc')->get();
    return view('tips.top')->with('tips', $tips);
 }

 public function yesterday() {
    
     $tips = Tip::Where('date',Carbon::yesterday()->format('Y-m-d'))->orderBy('id','desc')->get();
     return view('tips.yesterday')->with('tips', $tips);
  }

  public function epl() {
     //$tips = Tip::Where([['league','epl'], ['tip_type','top']])->get();
     
     $tips = Tip::Where([['league','epl'], ['date',Carbon::now()->format('Y-m-d')]])->orderBy('id','desc')->get();
     return view('tips.leagues.epl')->with('tips', $tips);
  }

  public function serieA() {
     $tips = Tip::Where([['league','serie A'], ['date',Carbon::now()->format('Y-m-d')]])->orderBy('id','desc')->get();
     return view('tips.leagues.serieA')->with('tips', $tips);
  }

  public function bundesliga() {
     $tips = Tip::Where([['league','bundesliga'], ['date',Carbon::now()->format('Y-m-d')]])->orderBy('id','desc')->get();
     return view('tips.leagues.bundesliga')->with('tips', $tips);
  }

  public function eredivisie() {
     $tips = Tip::Where([['league','Eredivisie'], ['date',Carbon::now()->format('Y-m-d')]])->orderBy('id','desc')->get();
     return view('tips.leagues.eredivisie')->with('tips', $tips);
  }

  public function laliga() {
     $tips = Tip::Where([['league','laliga'], ['date',Carbon::now()->format('Y-m-d')]])->orderBy('id','desc')->get();
     return view('tips.leagues.laliga')->with('tips', $tips);
  }
  
}


