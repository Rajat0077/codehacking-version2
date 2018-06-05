<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model

{
    //

	
	protected $uploads = 'http://localhost/Codehacking-version2/public/images/';

    protected $fillable = ['file'];



    public function getFileAttribute($photo){ // Here getFileAttribute -->  File is the column name in Photo table of Database  

    	return $this ->uploads .$photo;  // The Location for folder will be images/file_name


    }

}
