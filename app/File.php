<?php

namespace App;

class File
{
    private $datas = [];

    public function setDatas(string $name, string $cpf, string $email): void
    {
        array_push($this->datas, [
            'name' => $name,
            'cpf' => $cpf,
            'email' => $email
        ]);
    }

    public function readFileCSV(string $directory)
    {
        $handle = fopen($directory, 'r');

        while (($data = fgetcsv($handle, 1000, ';')) !== false) {
            $this->setDatas($data[0], $data[1], $data[2]);
        }
        fclose($handle);
        echo '<pre>';
        print_r($this->datas);
        echo '</pre>';
    }

    public function readFileTXT(string $directory): void
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
        echo '<pre>';
        print_r($this->datas);
        echo '</pre>';
    }
}
