<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Rule;
use Auth;
use App\Models\User;
use App\Models\FavouriteModel;
class FavouriteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function favourite(){
        // $favourites = FavouriteModel::paginate(3);
        return view('favourite');
    }

    public function destroy($id)
    {
        // $favourite = FavouriteModel::find($id);

        // if ($favourite && $favourite->user_id == Auth::id()) {
        //     $favourite->delete();
        //     return response()->json(['message' => 'Favourite deleted successfully.'], 200);
        // } else {
        //     return response()->json(['message' => 'Favourite not found or unauthorized.'], 404);
        // }
    }
}
