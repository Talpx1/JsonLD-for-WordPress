<?php

namespace JsonLDForWP\Plugin\Traits\Entities;

trait HasNoWarnings{
    public function warnings():array|null{
        return null;
    }
}