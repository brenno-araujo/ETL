<?php

namespace App\extrator;

class Txt extends File  
{
    public function readFile(string $directory): array
    {
        $handle = fopen($directory, 'r');

        while (feof($handle) === false) {
            $data = fgets($handle);
            $this->setDatas(
                substr($data, 11, 30), //name
                substr($data, 0, 11), //cpf
                substr($data, 41, 91) //email
            );
        }
        fclose($handle);
        
        return $this->getDatas();
    }
}

