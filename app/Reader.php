<?php

namespace App;

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
        $extension = explode('.', $this->getFile());

        $class = '\App\extrator\\' . ucfirst($extension[1]);

        return call_user_func_array(
            [
                new $class,
                'readFile'
            ],
            [
                $directory
            ]
        );
    }
}
