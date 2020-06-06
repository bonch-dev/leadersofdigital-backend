<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreManyMediaRequest;
use App\Http\Requests\StoreMediaRequest;
use App\Http\Resources\MediaResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Str;
use Optix\Media\MediaUploader;

/**
 * @group Media
 *
 * API for management medias (images)
 *
 * Class MediaController
 * @package App\Http\Controllers
 */
class MediaController extends Controller
{
    /**
     * Store single media file
     *
     * @param StoreMediaRequest $request
     * @return MediaResource
     */
    public function store(StoreMediaRequest $request)
    {
        $file = $request->file('file');

        $name = Str::random();

        $mediable = MediaUploader::fromFile($file)
            ->setName($name)
            ->setFileName($name . '.' . $file->getClientOriginalExtension())
            ->upload();

        return MediaResource::make($mediable);
    }

    /**
     * Store media files
     *
     * @param StoreManyMediaRequest $request
     * @return AnonymousResourceCollection
     */
    public function storeMany(StoreManyMediaRequest $request)
    {
        $mediables = [];

        foreach ($request->file('files') as $file) {
            $name = Str::random();
            $mediables[] = MediaUploader::
                fromFile($file)
                ->setName($name)
                ->setFileName($name . '.' . $file->getClientOriginalExtension())
                ->upload();
        }

        return MediaResource::collection($mediables);
    }
}
