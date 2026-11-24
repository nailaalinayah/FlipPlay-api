<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MediaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $mediaId = $this->route('media');

        return [
            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('media', 'title')->ignore($mediaId),
            ],
            'jenis' => [
                'required',
                'string',
                'max:100',
            ],
            'genre' => [
                'required',
                'string',
                'max:255',
            ],
            'tahun' => [
                'required',
                'integer',
                'min:1900',
                'max:' . (date('Y') + 1),
            ],
            'description' => [
                'required',
                'string',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Judul wajib diisi.',
            'title.unique' => 'Judul media sudah tersedia.',
            'jenis.required' => 'Jenis media wajib diisi.',
            'genre.required' => 'Genre wajib diisi.',
            'tahun.required' => 'Tahun wajib diisi.',
            'tahun.integer' => 'Tahun harus berupa angka.',
            'description.required' => 'Deskripsi wajib diisi.',
        ];
    }
}
