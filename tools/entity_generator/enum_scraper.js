return (`<?php

namespace ${String.raw`JsonLDForWP\Plugin\Classes\Entities`}${[...document.querySelectorAll("div.superPaths a:not(:last-of-type)")].map(a => `\\${a.textContent}s`).join("")};

enum ${document.querySelector("#infohead h1").textContent}{

    ${[...document.querySelectorAll("#infoblock ~ ul li a")].map(e=>`case ${e.textContent};`).join("\n")}

    public static function description():string {
        return __("${document.querySelector("div.description").textContent.replaceAll('"', "'").replaceAll("\n", "\\n")}", 'jsonld-for-wordpress');
    }

}`)