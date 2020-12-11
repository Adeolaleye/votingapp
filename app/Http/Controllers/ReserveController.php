<?php

namespace App\Http\Controllers;
use App\booksit;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bookings.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
                'name' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|numeric',
            ]);

        $bookasit = new booksit();
        $bookasit -> name = request('name');
        $bookasit -> email = request('email');
        $bookasit -> phone = request('phone');
        $bookasit -> ips = $_SERVER['REMOTE_ADDR'];
        $bookasit -> sitno +=  1;
        $bookasit -> save ();
        
        return back()->with('message', 'Successful');

        //$highest = Ticket Model::max('id');

        //$new_number = $highest += 1;

        //Convert new_number to string format and save as seat_number

        //$seat_number = sprintf("%'.05d\n", $new_nunber);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
