<?php

namespace JsonLDForWP\Plugin\Traits\Entities;

trait HasHighlyGenericWarning{
    public function warnings():array|null{
        return [
            __('This is a highly generic entity and should NEVER be used, unless when explicitly required (or it is the only option)', 'jsonld-for-wordpress')
        ];
    }
}