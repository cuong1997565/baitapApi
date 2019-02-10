<?php

namespace App\Http\Controllers;
use App\Image;
use App\Jobs\ProcessImageThumbnails;
use Illuminate\Http\Request;

class ImageController extends Controller
{
        public function index(Request $request){

                return view('upload_form');

        }

      public function upload(Request $request)
    {
        // upload image
        $this->validate($request, [
          'demo_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image = $request->file('demo_image');
        $input['demo_image'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['demo_image']);

        // make db entry of that image
        $image = new Image;
        $image->org_path = 'images' . DIRECTORY_SEPARATOR . $input['demo_image'];
        $image->save();

        // defer the processing of the image thumbnails
        ProcessImageThumbnails::dispatch($image);

        return redirect('image/index')->with('message', 'Image uploaded successfully!');

    }
}
