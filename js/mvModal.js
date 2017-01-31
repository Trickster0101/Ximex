// Get the modal
var missionModal = document.getElementById('myMissionModal');
var visionModal = document.getElementById('myVisionModal');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
function openMissionModal() {
    missionModal.style.display = "block";
}

function openVisionModal() {
    visionModal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
function closeModal() {
    missionModal.style.display = "none";
    visionModal.style.display = "none";
}
