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
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return response()->json(['error' => 'You need to log in to use this feature'], 403);
        }

        $request->validate([
            'location_id' => 'required|integer',
        ]);

        $user_id = Auth::id();

        $existingBookmark = Bookmark::where('user_id', $user_id)
                                    ->where('location_id', $request->location_id)
                                    ->first();

        if ($existingBookmark) {
            return response()->json(['message' => 'You have already bookmarked this location.']);
        }

        try {
            $bookmark = new Bookmark();
            $bookmark->user_id = $user_id;
            $bookmark->location_id = $request->location_id;
            $bookmark->save();

            return response()->json(['message' => 'Saved to bookmarks successfully']);
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return response()->json(['error' => 'Failed to save bookmark. Please try again later.'], 500);
        }
    }

    public function favourite(){
        $user_id = Auth::user()->id;
        $favourites = Bookmark::where('user_id', $user_id)->with('location')->paginate(6);
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

}
