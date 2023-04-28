<?php

namespace JsonLDForWP\Plugin\Classes\Entities;

use JsonLDForWP\Plugin\Classes\Entities;
use JsonLDForWP\Plugin\Traits\Entities\HasNoWarnings;
use JsonLDForWP\Plugin\Traits\Entities\HasNoMessages;

class Thing extends undefined{

    public string|null $additionalType = null;
    public string|null $alternateName = null;
    public string|null $description = null;
    public string|null $disambiguatingDescription = null;
    public PropertyValue|string|null $identifier = null;
    public ImageObject|string|null $image = null;
    public CreativeWork|string|null $mainEntityOfPage = null;
    public string|null $name = null;
    public Action|null $potentialAction = null;
    public string|null $sameAs = null;
    public CreativeWork|Event|null $subjectOf = null;
    public string|null $url = null;

    use HasNoWarnings, HasNoMessages;

    public function description():string {
        return __("The most generic type of item.", 'jsonld-for-wordpress');
    }

}