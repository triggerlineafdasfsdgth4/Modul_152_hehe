<?php
class ThumbnailGenerator{
    public function thumbnailGernerator($imagePath){
        $imageform = getimagesize($imagePath);
        $width = $imageform[0];
        $height = $imageform[1];
        $imagetype = $imageform[2];

        if ($width <= 128 && 128 >= $height){
            return $imagePath;
        }

        $image = null;
        if ($imagetype == IMAGETYPE_WEBP){
            $image = imagecreatefromwebp($imagePath);
        }
        elseif ($imagetype == IMAGETYPE_PNG){
            $image = imagecreatefrompng($imagePath);
        }
        else{
            return $imagePath;
        }

        $image = imagescale($imagePath, 128);

        $path = pathinfo($imagePath);
        $pathThumbnail = $path["dirname"] . DIRECTORY_SEPARATOR . "Thumbnails" . DIRECTORY_SEPARATOR . $path["filename"] . "_Thumbnail." . $path["extension"];

        if ($imagetype == IMAGETYPE_WEBP){
            imagewebp($image,$pathThumbnail,100);
        }
        elseif ($imagetype == IMAGETYPE_PNG){
            imagepng($image,$pathThumbnail);
        }

        return $pathThumbnail;
    }

}


?>