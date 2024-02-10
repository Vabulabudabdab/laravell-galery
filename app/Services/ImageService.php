<?php

namespace App\Services;

use http\Env\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageService {

    public function all() {
        $images = DB::table('images')->select('*')->get();
        $myImages =  $images->all();

        return  $myImages;
    }

    public function add($image) {
        DB::table('images')->insert(
            ['image' => $image->store('uploads')]
        );
    }

    public function one($id) {
        $image = DB::table('images')->select('*')->where('id', $id)->get()->first();

        return $image;
    }

    public function update($id, $newImage) {
        $image = DB::table('images')->select('*')->where('id', $id)->get()->first();
        Storage::delete($image->image);

        $name = $newImage->store('uploads');

        DB::table('images')
            ->where('id', $id)
            ->update(['image' => $name]);
    }

    public function delete($id) {

        $image = $this->one($id);
        Storage::delete($image->image);

        DB::table('images')->where('id', $id)->delete();

    }

}
