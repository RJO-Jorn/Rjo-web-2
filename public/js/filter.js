function filterProjects() {
// window.getFilterTags = function() {
const filterElements = document.querySelectorAll(".project-filter");
const projects = document.querySelectorAll(".project-grid-item");
let filterTagList = [];
let prioTagList = [];

filterElements.forEach(element => {
    if(element.tagName === "INPUT") {
        if (!element.value == "") {
        filterTagList.push(...element.value.split(',').map(tag => tag.trim()));
        // console.log(element.value);
    }} else {
        if(!element.textContent.includes("...") && !element.textContent.includes("All")) {
            prioTagList.push(element.textContent);
        }
    }
});

projects.forEach(project => {
    const tags = project.querySelectorAll("p");
    const name = project.querySelector(".project-title");
    let tagsArray = [name.textContent];

    tags.forEach(tag => {
        tagsArray.push(tag.textContent)
    });

    if (((tagsArray.some(tag => filterTagList.includes(tag)) 
        || tagsArray.some(tag => prioTagList.includes(tag))) 
        && prioTagList.every(item => tagsArray.includes(item)))
        || (prioTagList.length === 0 && filterTagList.length === 0)) {
            project.classList.remove("hidden");
    } else {project.classList.add("hidden");}
});
};
