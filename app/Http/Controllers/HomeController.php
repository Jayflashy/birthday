<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dotenv\Dotenv;
class HomeController extends Controller
{
    //
    function index(){
        return view('index');
    }

    function open_secured(Request $request){
        // return $request;
        $code = env('LOVE_CODE');
        if($request->secured_code == $code){
            // max time to view is 2
            $value = env('LOVE_VIEWS');
            $val = intval($value) + 1;
            $this->updateEnvFile("LOVE_VIEWS", $val);
            // increate love views
            // return $value;
            if(env('LOVE_VIEWS') > 3){
                return redirect()->route('index')->withError('You have Viewd the Page Twice and the Code has Expired. ANother Code would be sent to your Email Soon.');
            }
            return view('secured');
        }else{
            return back()->withError('Incoorrect Access Code');
        }
    }

    function updateEnvFile($type, $val){
        $path = base_path('.env');
        if (file_exists($path)) {
            $val = '"' . trim($val) . '"';

            $fileContents = file_get_contents($path);

            if (strpos($fileContents, $type) !== false) {
            $fileContents = str_replace($type . '="' . env($type) . '"', $type . '=' . $val, $fileContents);
            } else {
            $fileContents .= "\n$type=$val";
            }

            file_put_contents($path, $fileContents);
        }
    }
}
