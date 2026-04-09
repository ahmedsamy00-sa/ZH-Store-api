<?php

namespace App\Http\Controllers;

use App\Models\Trader;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminConfirm(Request $request, $id){
        $user = $request->user();
        if (!$user || $user->role !== 'admin') {
            return response()->json(['message' => 'Unauthorized'], 403);
        }
        $trader = Trader::findOrFail($id); 
        $trader->update([
            'uploadStatus'=> 'Confirmed'
        ]);

        return response()->json(['message'=>'Trader request confirmed'], 200);
    }
}
