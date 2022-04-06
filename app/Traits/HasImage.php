<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;

trait HasImage
{
  public function saveImage($image, $product, $folder)
  {
    if ($image) {
      $newImage = ImageManagerStatic::make($image);
      $imageName = Str::random(40);
      $imageExtension = "." . $image->getClientOriginalExtension();
      $imagePath = "products/" . $imageName . $imageExtension;
      Storage::put("public/$imagePath", (string) $newImage->encode());
      $product->update(['image' => $imagePath]);

      $newImage->fit(707, 385, function ($constraint) {
        $constraint->aspectRatio();
      });

      $newImageName = $imageName . "_707x385" . $imageExtension;
      $newImagePath = "products/$newImageName";
      Storage::put("public/$newImagePath", (string) $newImage->encode());
    }
  }
}
