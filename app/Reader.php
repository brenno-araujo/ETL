<?php

namespace App;

use App\File;

class Reader 
{
    private $directory;
    private $file;

    public function getDirectory(): string
    {
        return $this->directory;
    }

    public function getFile(): string
    {
        return $this->file;
    }

    public function setDirectory(string $directory)
    {
        $this->directory = $directory;
    }

    public function setFile(string $file)
    {
        $this->file = $file;
    }

    public function read()
    {
        $directory = $this->getDirectory() . '/' . $this->getFile();
        $file = new File();
        if (strpos($this->getFile(), '.csv')) {
            $file->readFileCSV($directory);
        } else if (strpos($this->getFile(), '.txt')) {
            $file->readFileTXT($directory);
        }
    }

}