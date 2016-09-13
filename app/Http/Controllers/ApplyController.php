<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Input;
use Validator;
use Redirect;
use Session;
use Auth;

class ApplyController extends Controller
{


   public function uploadFile() {
	  	// getting all of the post data
	  	$file = array('file' => Input::file('file'));
	  	//dd($file);
	    // checking file is valid.
	    if (Input::hasFile('file')) {
	    	if (Input::file('file')->isValid()) {
	    		Auth::user()->repository->upload($file);
			    // sending back with message
			    Session::flash('success', 'Upload successfully'); 
			    return Redirect::to('/');
	    	}
	    } else {
	        // sending back with error message.
	        Session::flash('error', 'uploaded file is not valid');
	        return Redirect::to('/');
	    }
	  
	}
}
?>