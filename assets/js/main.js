function togglePopup() {
    var popup = document.getElementById('valuationPopup');
    if (popup.style.display === "none" || popup.style.display === "") {
      popup.style.display = "block";
    } else {
      popup.style.display = "none";
    }
  }

// Add event listener to the button
var btn = document.getElementById('validation-btn'); // Replace 'closeButton' with your button's ID
if (btn) {
    btn.addEventListener('click', togglePopup);
} else {
    console.error('Button with ID "closeButton" not found.');
}