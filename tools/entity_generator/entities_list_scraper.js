const SCHEMA_ORG_DOMAIN='https://schema.org/';

document.querySelectorAll("#tree1 li.dttBranch").forEach(branch => {
	if(branch.querySelector(":scope > .dttDetails > ul.dttSubTree > li.dttLeaf")?.textContent.includes("::\n") ?? false) {
		branch.classList.add('enumeration')
		branch.querySelectorAll(":scope > .dttDetails > ul.dttSubTree > li.dttLeaf").forEach(li => li.classList.add('enumeration'))
	}
})

var entities = [
	...[...document.querySelectorAll("#tree1 .dttBranch:not(.enumeration) > .dttLabel > a")].map(e=>({link:`${SCHEMA_ORG_DOMAIN}${e.textContent}`, isLeaf:false, isEnum:false})), 
	...[...document.querySelectorAll("#tree1 .dttBranch > .dttDetails > ul.dttSubTree > li.dttLeaf:not(.enumeration) > a")].map(e=>({link:`${SCHEMA_ORG_DOMAIN}${e.textContent}`, isLeaf:true, isEnum:false})),
	...[...document.querySelectorAll("#tree1 .dttBranch.enumeration")].map(e=>({link:`${SCHEMA_ORG_DOMAIN}${e.querySelector(":scope > .dttLabel > a").textContent}`, isLeaf:false, isEnum:true, enumValues: [...e.querySelectorAll(":scope > .dttDetails > ul.dttSubTree > li.dttLeaf.enumeration > a")].map(a => a.textContent)})), 
];
return JSON.stringify(entities)