<?php

namespace App\Views;

class View
{
    // ----------------------
    // Instances
    // ----------------------

    private array $data = [];
    private string $file;

    public function __construct(array $data, string $file)
    {
        $this->data = $data;
        $this->file = $file;
    }

    // ----------------------
    // Getters and Setters
    // ----------------------

    public function getData(): array
    {
        return $this->data;
    }

    public function setData(array $data): void
    {
        $this->data = $data;
    }

    public function getFile(): string
    {
        return $this->file;
    }

    public function setFile(string $file): void
    {
        $this->file = $file;
    }

    // ----------------------
    // Methods
    // ----------------------

    public function addData(string $key, string $content): void
    {
        $this->data[$key] = $content;
    }


    public function getTemplate(): string
    {
        return file_get_contents($this->file);
    }

    public function getContentHtml(): string
    {
        $search = array_map(fn ($v) => '{{' . $v . '}}', array_keys($this->data));
        return str_replace($search, array_values($this->data), $this->getTemplate());
    }
}
