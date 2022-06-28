<?php 

namespace App\extrator;

class Csv extends File 
{
    public function readFile(string $directory): array
    {
        $handle = fopen($directory, 'r');

        while (($data = fgetcsv($handle, 1000, ';')) !== false) {
            $this->setDatas($data[0], $data[1], $data[2]);
        }
        
        return $this->getDatas();
    }
}