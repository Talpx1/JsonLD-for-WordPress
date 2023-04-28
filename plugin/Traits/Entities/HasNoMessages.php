<?php

namespace JsonLDForWP\Plugin\Traits\Entities;

trait HasNoMessages{
    public function messages():array|null{
        return null;
    }
}