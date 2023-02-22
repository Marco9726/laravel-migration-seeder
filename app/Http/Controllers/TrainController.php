<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train as Train;

class TrainController extends Controller
{
	public function index()
	{
		$train = Train::all();

		return view('home', compact('train'));
	}
}
