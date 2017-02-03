// Get the modal
var container = document.getElementById('first-container-modal');
var secondContainer = document.getElementById('second-container-modal');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("container-close")[0];

// When the user clicks the button, open the modal
function openContainer1() {
    container.style.display = "block";
}

function openContainer2() {
    secondContainer.style.display = "block";
}


// When the user clicks on <span> (x), close the modal
function closeContainers() {
    container.style.display = "none";
    secondContainer.style.display = "none";
}
