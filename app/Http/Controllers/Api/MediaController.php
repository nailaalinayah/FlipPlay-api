<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\MediaRequest;
use App\Http\Resources\MediaResource;
use App\Models\Media;

class MediaController extends Controller
{
    // Menampilkan semua media
    public function index()
    {
        $media = Media::with('users')->get();

        return MediaResource::collection($media);
    }

    // Menambahkan media baru
    public function store(MediaRequest $request)
    {
        $media = Media::create($request->validated());

        return response()->json([
            'message' => 'Media berhasil ditambahkan',
            'data' => new MediaResource($media),
        ], 201);
    }

    // Menampilkan detail media
    public function show(string $id)
    {
        $media = Media::with('users')->findOrFail($id);

        return new MediaResource($media);
    }

    // Mengubah media
    public function update(MediaRequest $request, string $id)
    {
        $media = Media::findOrFail($id);
        $media->update($request->validated());

        return response()->json([
            'message' => 'Media berhasil diperbarui',
            'data' => new MediaResource($media),
        ]);
    }

    // Menghapus media
    public function destroy(string $id)
    {
        $media = Media::findOrFail($id);
        $media->delete();

        return response()->json([
            'message' => 'Media berhasil dihapus',
        ]);
    }
}
