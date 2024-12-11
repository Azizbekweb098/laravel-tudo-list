<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tudo;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function category(Request $request)
    {
      $search = $request->query('search');
      if($search)
      {
        $catregory = Category::where('name', 'LIKE', "%$search%")->get();

        return response()->json($catregory);
      }
      return response()->json(Category::all());
    }
}
