<?php

namespace App;
use App\User as User;
use Illuminate\Database\Eloquent\Model;
use Auth;
use Input;


class Repository extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['url'];

    public function user()
    {
    	return $this->belongsTo('User');
    }

    public function fileSystemItem()
    {
        return $this->hasMany('App\FileSystemItem');
    }

   public function upload($file) {
        $destinationPath = \Config::get('constants.RepoLocation'); 
        $destinationPath .= Auth::user()->repository->url; // upload path
        $fileName =  Input::file('file')->getClientOriginalName(); // getting file extension
        $extension =  Input::file('file')->getClientOriginalExtension(); // getting file extension
        $size = Input::file('file')->getSize(); // getting file size
        $mime = Input::file('file')->getMimeType(); // getting file mimetype
        $owner = Auth::user()->name; //getting user name
        $fileSystemItem = FileSystemItem::Create([
            "name" => $fileName,
            "extensio" => $extension,
            "owner" => $owner,
            "url" => $fileName,
            "size" => $size,
            "mimetype" =>$mime]);
        $fileSystemItem->repository_id = $this->id;
        $fileSystemItem->save();
        $CompletefileName = $fileName; // renameing file
        Input::file('file')->move($destinationPath, $CompletefileName); // uploading file to given path
      
    }

    public function download($fileName)
    {
        $pathToFile = \Config::get('constants.RepoLocation'); 
        $pathToFile .= Auth::user()->repository->url; // upload path
        $pathToFile .= $fileName;
        return response()->file($pathToFile);
    }

    public function wholeRepoAsArray()
    {
        $repo = array();
        $items = array();
        $repo = $this->toArray();
        foreach ($this->fileSystemItem as $item) {
           $item = $item->toArray();
           array_push($items,$item);
        }
        $repo['fileSystemItem'] = $items;
        return $repo;
    }
}
