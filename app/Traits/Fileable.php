<?php

namespace App\Traits;

use App\Facade\FileFacade;
use App\Models\File;


trait Fileable
{

    /**
     * @param $name
     * @return mixed
     */
    public function saveFile($name)
    {
        if ($name != null)
        {
            $file = File::where('name', $name)->first();

            if (! $file instanceof File) {
                $file = FileFacade::saveFile($name);
            }

            return $file->id;

        }else return null;
    }

    /**
     * @param $id
     * @return bool|mixed
     */
    public function checkFileInDatabase($id){
        if ($id){
            $file = File::where('name',$id)->get()->first();
            if (!$file){
                $addFile = new File([
                    'name' => $id ,
                    'size' => 1 ,
                    'mime_type' => 'image' ,
                    'created_at' => date('Y-m-d H:i:s') ,
                ]);

                if ($addFile->save()){
                    return $addFile->id;
                }else{
                    return false;
                }
            }else{
                return $file->id;
            }
        }else{
            return false;
        }
    }
}
