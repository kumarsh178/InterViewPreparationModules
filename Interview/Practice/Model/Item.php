<?php 
declare(strict_types=1);

namespace Interview\Practice\Model;

class Item
{

    protected string $code="456";

    public function setCode(string $code): void {
        $this->code = $code;
    }
    public function getCode(): string{
        return $this->code;
    }
}

