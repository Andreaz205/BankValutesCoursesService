<?php

declare(strict_types=1);

namespace App\DTO;

class CourseItemDTO
{

    public function __construct(
        private string $id,
        private string $numCode,
        private string $charCode,
        private string $nominal,
        private string $name,
        private string $value,
        private string $vunitRate,
    )
    {
        //
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getNumCode(): string
    {
        return $this->numCode;
    }

    public function setNumCode(string $numCode): void
    {
        $this->numCode = $numCode;
    }

    public function getCharCode(): string
    {
        return $this->charCode;
    }

    public function setCharCode(string $charCode): void
    {
        $this->charCode = $charCode;
    }

    public function getNominal(): string
    {
        return $this->nominal;
    }

    public function setNominal(string $nominal): void
    {
        $this->nominal = $nominal;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    public function getVunitRate(): string
    {
        return $this->vunitRate;
    }

    public function setVunitRate(string $vunitRate): void
    {
        $this->vunitRate = $vunitRate;
    }

    public function toArray(): array
    {
        return [
            'id'        => $this->id,
            'numCode'   => $this->numCode,
            'charCode'  => $this->charCode,
            'nominal'   => $this->nominal,
            'name'      => $this->name,
            'value'     => $this->value,
            'vunitRate' => $this->vunitRate,
        ];
    }
}
