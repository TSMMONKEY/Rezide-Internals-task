document.addEventListener("DOMContentLoaded", function () {
  const valuationForm = document.querySelector("#valuationPopup form");

  valuationForm.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent page reload

    const formData = new FormData(valuationForm);
    const actionUrl = valuationForm.getAttribute("action"); // Get correct action URL

    if (!actionUrl) {
      console.error("Form action URL is missing.");
      return;
    }

    fetch(actionUrl, {
      method: "POST",
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      console.log(data);
      if (data.success) {
        alert("Valuation Submitted! Estimated Value: " + data.valuation);
      } else {
        alert("Something went wrong. Please try again.");
      }
    })
    .catch(error => console.error("Error:", error));
  });

  // Popup Toggle
  function togglePopup() {
    var popup = document.getElementById('valuationPopup');
    if (popup.style.display === "none" || popup.style.display === "") {
      popup.style.display = "block";
    } else {
      popup.style.display = "none";
    }
  }

  // Add event listener to the button
  var btn = document.getElementById('validation-btn'); // Replace 'validation-btn' with your button's ID
  if (btn) {
    btn.addEventListener('click', togglePopup);
  } else {
    console.error('Button with ID "validation-btn" not found.');
  }

  // alert timer
  setTimeout(function() {
    var alert = document.getElementById('success-message');
    if (alert) {
        alert.style.transition = 'opacity 0.5s ease'; // Optional transition for smooth fade-out
        alert.style.opacity = 0;
        setTimeout(function() {
            alert.remove(); // Remove the alert from the DOM after the fade-out
        }, 500); // 500ms after fade-out begins to remove the element
    }
}, 5000); // 5000ms = 5 seconds

});
