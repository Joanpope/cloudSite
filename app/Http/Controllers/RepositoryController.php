<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Auth as Auth;
use App\Http\Requests;

class RepositoryController extends Controller
{
//middleware per autenticar example en controller
/*public function __construct()
{
	$this->middleware('auth');
}*/


    public function index()
    {
    	$user = Auth::user();
    	$repositoryArr = $user->repository->wholeRepoAsArray();
    	//dd($repositoryArr);
    	return view('filesystem')->with("repoArr", $repositoryArr);
    }

    public function indexByAjax()
    {
    	$user = Auth::user();
    	$repositoryArr = $user->repository->wholeRepoAsArray();
    	return json_encode($repositoryArr);
    }
}
