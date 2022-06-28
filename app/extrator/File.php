<?php

namespace App\extrator;

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

    public function getDatas(): array
    {
        return $this->datas;
    }

}
