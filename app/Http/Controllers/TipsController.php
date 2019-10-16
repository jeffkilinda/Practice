<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tip;
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
       
        $tips = Tip::Where('date',Carbon::now()->format('Y-m-d'))->get();
        
        return view('tips.index')->with('tips', $tips);
    }


    public function adminindex() {
      $tips = Tip::Where('date',Carbon::now()->format('Y-m-d'))->get();
       return view('tips.adminindex')->with('tips', $tips);
   }


    public function topTips() {
       
       $tips = Tip::Where('tip_type','top')->get();
       return view('tips.top')->with('tips', $tips);
    }

    public function yesterday() {
       
        $tips = Tip::Where('date',Carbon::yesterday()->format('Y-m-d'))->get();
        return view('tips.yesterday')->with('tips', $tips);
     }

     public function epl() {
        //$tips = Tip::Where([['league','epl'], ['tip_type','top']])->get();
        
        $tips = Tip::Where([['league','epl'], ['date',Carbon::now()->format('Y-m-d')]])->get();
        return view('tips.leagues.epl')->with('tips', $tips);
     }

     public function serieA() {
        $tips = Tip::Where([['league','serie A'], ['date',Carbon::now()->format('Y-m-d')]])->get();
        return view('tips.leagues.serieA')->with('tips', $tips);
     }

     public function bundesliga() {
        $tips = Tip::Where([['league','bundesliga'], ['date',Carbon::now()->format('Y-m-d')]])->get();
        return view('tips.leagues.bundesliga')->with('tips', $tips);
     }

     public function eredivisie() {
        $tips = Tip::Where([['league','Eredivisie'], ['date',Carbon::now()->format('Y-m-d')]])->get();
        return view('tips.leagues.eredivisie')->with('tips', $tips);
     }

     public function laliga() {
        $tips = Tip::Where([['league','laliga'], ['date',Carbon::now()->format('Y-m-d')]])->get();
        return view('tips.leagues.laliga')->with('tips', $tips);
     }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tips.create');
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
            'tip' => 'required',
            'odd' => 'required',
            'type' => 'required',
            'results' => 'required'
        ]);
           $tip = new Tip;
           $tip->date = $request->input('date');
           $tip->time = $request->input('time');
           $tip->league = $request->input('league');
           $tip->team1 = $request->input('team1');
           $tip->team2 = $request->input('team2');
           $tip->tip = $request->input('tip');
           $tip->odd = $request->input('odd');
           $tip->tip_type = $request->input('type');
           $tip->results = $request->input('results');
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
      $tip = Tip::find($id);
      return view('tips.edit')->with('tip',$tip);
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
         'tip' => 'required',
         'odd' => 'required',
         'type' => 'required',
         'results' => 'required'
     ]);
        $tip = Tip::find($id);
        $tip->date = $request->input('date');
        $tip->time = $request->input('time');
        $tip->league = $request->input('league');
        $tip->team1 = $request->input('team1');
        $tip->team2 = $request->input('team2');
        $tip->tip = $request->input('tip');
        $tip->odd = $request->input('odd');
        $tip->tip_type = $request->input('type');
        $tip->results = $request->input('results');
        $tip->save();
      
        
        return redirect('/adminindex')->with('success', 'Tip updated successfully');
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
       return redirect('/adminindex')->with('success', 'Tip deleted');
    }
}
