<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Media;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    // Menambahkan media ke koleksi user
    public function attach(Request $request, $userId)
    {
        $request->validate([
            'media_id' => 'required|exists:media,id',
        ]);

        $user = User::findOrFail($userId);

        if ($user->media()->where('media_id', $request->media_id)->exists()) {
            return response()->json([
                'message' => 'Media sudah ada di koleksi user',
            ], 409);
        }

        $user->media()->attach($request->media_id);

        return response()->json([
            'message' => 'Media berhasil ditambahkan ke koleksi',
        ], 201);
    }

    // Menghapus media dari koleksi user
    public function detach($userId, $mediaId)
    {
        $user = User::findOrFail($userId);

        if (!$user->media()->where('media_id', $mediaId)->exists()) {
            return response()->json([
                'message' => 'Media tidak ditemukan dalam koleksi user',
            ], 404);
        }

        $user->media()->detach($mediaId);

        return response()->json([
            'message' => 'Media berhasil dihapus dari koleksi',
        ]);
    }
}
