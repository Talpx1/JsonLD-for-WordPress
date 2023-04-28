<?php 

namespace JsonLDForWP\Plugin\Classes\Entities\Things;

use JsonLDForWP\Plugin\Classes\Entities\Thing;
use JsonLDForWP\Plugin\Traits\Entities\HasHighlyGenericWarning;
use JsonLDForWP\Plugin\Traits\Entities\HasNoMessages;

class Action extends Thing{
    protected ActionStatusType|null $actionStatus = null;
    protected Organization|Person |null $agent = null;
    protected DateTime|Time|null $endTime = null;
    protected Thing|null $error = null;
    protected Thing|null $instrument = null;
    protected Place|PostalAddress|null $location = null;
    protected Thing|null $object = null;
    protected Organization|Person|null $participant = null;
    protected Organization|Person|null $provider = null;
    protected Thing|null $result = null;
    protected DateTime|Time |null $startTime = null;
    protected EntryPoint|URL|null $target = null;

    use HasNoMessages, HasHighlyGenericWarning;

    public function description():string {
        return __("A utility class that serves as the umbrella for a number of 'intangible' things such as quantities, structured values, etc.", 'jsonld-for-wordpress');
    }
}