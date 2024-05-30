<?php

namespace App\Managers;

use Illuminate\Support\Str;

class storeFile {

    public function addFile($file , $mediaCollectionName ,  $element ) {
        $ex_file    = $file->extension(); // get the extension of file selected
        $file_name  = Str::slug(explode('.' , $file->getClientOriginalName())[0], '-'); // get filename withtout extension
        $element->addMedia($file->getPathname())
                    ->usingName($file_name)
                    ->usingFileName($file->getClientOriginalName())
                    ->toMediaCollection($mediaCollectionName);
    }

    public function addFileFromUrl($picture , $mediaCollectionName , $element) {
        $element->addMedia($picture->getPath())
                ->preservingOriginal()
                ->toMediaCollection($mediaCollectionName);
    }
}
