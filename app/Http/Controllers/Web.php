<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }


    public function home()
        {
$data = view('page/home');
layout($data);
        }


    public function contact()
        {
$data = view('page/contact');
layout($data);
        }



    public function about()
        {
$data = view('page/about');
layout($data);
        }


}
