[...document.querySelectorAll(".definition-table:first-of-type tbody .supertype:not(:first-of-type)")].forEach(e => e.classList.add("not-to-consider"));
[...document.querySelectorAll(".definition-table:first-of-type tbody .supertype.not-to-consider ~ tr")].forEach(e => e.classList.add("not-to-consider"));
return (`<?php

namespace ${String.raw`JsonLDForWP\Plugin\Classes\Entities`}${[...document.querySelectorAll("div.superPaths a:not(:last-of-type)")].map(a => `\\${a.textContent}s`).join("")};

use ${String.raw`JsonLDForWP\Plugin\Classes\Entities`}${[...document.querySelectorAll("div.superPaths a:not(:last-of-type)")].map(a => `\\${a.textContent}`).join("")};
use ${String.raw`JsonLDForWP\Plugin\Traits\Entities\HasNoWarnings`};
use ${String.raw`JsonLDForWP\Plugin\Traits\Entities\HasNoMessages`};

class ${document.querySelector("#infohead h1").textContent} extends ${[...document.querySelectorAll("div.superPaths a:not(:last-of-type)")].map(a=>a.textContent).slice(-1)[0]//FIXME}{

    ${[...document.querySelectorAll(".definition-table:first-of-type tbody .supertype:first-of-type ~ tr:not(.supertype):not(.not-to-consider)")].map(row => {
        var var_types = [...row.querySelectorAll(".definition-table tbody tr:not(.supertype) td.prop-ect a")].map(a => a.textContent);

        if(var_types.includes('URL') && var_types.includes('Text')) var_types = var_types.filter(type => type !== 'URL')
        if(var_types.includes('Number') && (var_types.includes('Float') || var_types.includes('Integer'))) var_types = var_types.filter(type => type !== 'Number')

        var_types = var_types
            .join("|")
            .replaceAll(/\bText\b/gm,'string')
            .replaceAll(/\bURL\b/gm,'string')
            .replaceAll(/\bNumber\b/gm,'float')
            .replaceAll(/\bFloat\b/gm,'float')
            .replaceAll(/\bInteger\b/gm,'int')
            .replaceAll(/\bBoolean\b/gm,'bool');

        return `public ${var_types}|null $${row.querySelector("th.prop-nam code a").textContent} = null;`
    }).join("\n")}

    use HasNoWarnings, HasNoMessages;

    public function description():string {
        return __("${document.querySelector("div.description").textContent.replaceAll('"', "'").replaceAll("\n", "\\n")}", 'jsonld-for-wordpress');
    }

}`)