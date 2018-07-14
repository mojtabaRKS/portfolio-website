<?php

namespace App\Facade;

use App\Models\File;

class FileFacade
{
    /**
     * image extensions
     * @var array
     */
    private $imageExtensions = [
        'jpg', 'png', 'jpeg', 'gif', 'svg',
    ];

    /**
     * document extensions
     * @var array
     */
    private $docsExtensions = [
        'doc', 'docx', 'pdf', 'xlsx', 'xls',
    ];

    /**
     * archive extensions
     * @var array
     */
    private $archiveExtensions = [
        'rar', 'zip', 'tar', 'gz',
    ];

    /**
     * return file extension.
     *
     * @param $fileName
     *
     * @return mixed
     */
    public static function getFileType($fileName)
    {
        $fileInfo = pathinfo($fileName);

        return $fileInfo['extension'];
    }

    /**
     * @param $fileName
     * @return int
     */
    public static function getFileSize ($fileName)
    {
        $size = filesize(picUrl($fileName));

        return $size;
    }

    /**
     * @param $fileName
     * @return string
     */
    public static function getMimeType($fileName)
    {
        $mimeType = mime_content_type(picUrl($fileName));

        return $mimeType;
    }

    /**
     * @param $file
     *
     * @return bool
     */
    public function isImage($file)
    {
        if (in_array($this->getFileType($file), $this->imageExtensions)) {
            return true;
        }

        return false;
    }

    /**
     * @param $file
     *
     * @return bool
     */
    public function isDoc($file)
    {
        if (in_array($this->getFileType($file), $this->docsExtensions)) {
            return true;
        }

        return false;
    }

    /**
     * @param $file
     *
     * @return bool
     */
    public function isArchive($file)
    {
        if (in_array($this->getFileType($file), $this->archiveExtensions)) {
            return true;
        }

        return false;
    }

    /**
     * @param $path
     * @return File
     */
    public static function saveFile($path)
    {
        if ($path) {

            $image = new File([
                'name' => $path ,
                'size' => FileFacade::getFileSize($path) ,
                'mime_type' => FileFacade::getMimeType($path)
            ]);

            $image->save();

            return $image;

        } else return null;
    }
}
