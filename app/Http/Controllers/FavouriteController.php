<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Rule;
use Auth;
use App\Models\User;
use App\Models\Bookmark;
class FavouriteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function favourite(){
        $user_id = Auth::user()->id;
        $favourites = Bookmark::where('user_id', $user_id)->with('location')->paginate(3);
        return view('favourite', compact('favourites'));
    }

    public function destroy($id)
    {
        $favourite = Bookmark::find($id);

        if ($favourite && $favourite->user_id == Auth::id()) {
            $favourite->delete();
            return response()->json(['message' => 'Favourite deleted successfully.'], 200);
        } else {
            return response()->json(['message' => 'Favourite not found or unauthorized.'], 404);
        }
    }
    public function store()
    {
        
    }
}
