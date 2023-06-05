var hierarchies = [];
var hierarchies_counter = 0;

document.querySelectorAll(".superPaths a").forEach(a => {
    if (!(hierarchies_counter in hierarchies)) hierarchies[hierarchies_counter] = []
    hierarchies[hierarchies_counter].push(a.textContent)
    a.classList.contains('new-hierarchy') && hierarchies_counter++;
});

return hierarchies;