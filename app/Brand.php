<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function getImage()
    {
        if($this->img == null)
        {
            return 'public/img/no-image.png';
        }

        return 'public/uploads/' . $this->img;
    }
}
