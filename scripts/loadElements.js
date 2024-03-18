// put content of projects.json into a variable
let projects;
ajaxCall('projects.json', {}, function() {
    projects = JSON.parse(this.responseText);
});

console.log(projects);
