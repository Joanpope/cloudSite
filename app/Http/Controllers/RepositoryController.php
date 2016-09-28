<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View;
use Illuminate\Http\Response;
use \Auth as Auth;
use App\Http\Requests;

class RepositoryController extends Controller
{
//middleware per autenticar example en controller
/*public function __construct()
{
	$this->middleware('auth');
}*/


    public function index(Request $request)
    {
    	$user = Auth::user();
    	$repositoryArr = $user->repository->wholeRepoAsArray();
    	$view = view('iconCreation')->with("repoArr", $repositoryArr);
    	//dd($repositoryArr);
    	if ($request->ajax()) {
    		$sections = $view->renderSections();
    		return response()->json($sections['iconCreation']);	
    	} else {
    		return $view;
    	}
    }

    public function downloadFile($fileName)
    {
    	$user = Auth::user();
    	return $user->repository->download($fileName);
    }

}
