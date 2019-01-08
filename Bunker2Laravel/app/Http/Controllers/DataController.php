<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function delete($id)
    {
		Data::find($id)->delete();
		return redirect('/');
    }
}
