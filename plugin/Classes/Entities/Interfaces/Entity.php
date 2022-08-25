<?php 

namespace JsonLDForWP\Plugin\Classes\Entities\Interfaces;

interface Entity{
    public function getFields(): array;
    public function description(): string;
}