<?php
return [
    'min_php_version' => "8.1",
    'min_wordpress_version' => '6.0',
    'environment' => isRunningTest() ? 'testing' : 'local' //leave 'testing' untouched, please only edit the second value. Accepted values are local, staging, production
];
