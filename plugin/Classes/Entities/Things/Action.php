<?php 

namespace JsonLDForWP\Plugin\Classes\Entities\Things;

use JsonLDForWP\Plugin\Classes\Entities\Thing;
use JsonLDForWP\Plugin\Traits\Entities\HasNoMessages;
use JsonLDForWP\Plugin\Traits\Entities\HasNoWarnings;

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

    use HasNoMessages, HasNoWarnings;

    public function description():string {
        return __("An action performed by a direct agent and indirect participants upon a direct object. Optionally happens at a location with the help of an inanimate instrument. The execution of the action may produce a result. Specific action sub-type documentation specifies the exact expectation of each argument/role.", 'jsonld-for-wordpress');
    }
}