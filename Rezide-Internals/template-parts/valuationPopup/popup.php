<?php
    function property_valuation_form()
    {
        ob_start();
}?>
<div id="valuationPopup">
  <form method="POST" action="<?php echo admin_url('admin-ajax.php?action=property_valuation'); ?>" class="row g-3 needs-validation" novalidate id="#valuationPopup">
    <div class="col-md-12">
    <h2>Tell us about the property's location</h2>
      <div class="col-md-4">
      <input type="hidden" name="action" value="property_valuation">
        <label for="postcode" class="form-label mb-0">Postcode*</label>
        <input class="form-control mt-2" list="datalistOptions" id="postcode" placeholder="Your Postcode" name="postcode" />
        <datalist id="datalistOptions">
          <option value="B19138"></option>
          <option value="B19136"></option>
          <option value="B29338"></option>
          <option value="B19176"></option>
          <option value="B19866"></option>
          <option value="B19256"></option>
          <option value="B19966"></option>
          <option value="B199366"></option>
          <option value="B199345"></option>
          <option value="B199945"></option>
        </datalist>
      </div>
    </div>

    <div class="col-md-12">
      <div class="col-md-4">
        <label for="validationPropertType" class="form-label">Property Type*</label>
        <select class="form-select" id="validationPropertType" name="property_type" required>
          <option selected disabled value="">Please Choose...</option>
          <option>House</option>
          <option>Flat / Apartment</option>
          <option>Bungalow</option>
          <option>Townhouse</option>
        </select>
        <div class="invalid-feedback">Please select a valid state.</div>
      </div>
    </div>

    <div class="row col-md-12 my-3">
      <div class="col-md-4">
        <label for="validationDescription" class="form-label">Property Description*</label>
        <select class="form-select" id="validationDescription" name="property_description" required>
          <option selected disabled value="">Please Choose...</option>
          <option>Retirement Property</option>
          <option>Character Property</option>
          <option>Conversion Property</option>
          <option>Standard Property</option>
        </select>
        <div class="invalid-feedback">Please select a valid state.</div>
        <div class="form-text">
          Select Conversion property if your home is converted, e.g. barn or church conversion
        </div>
      </div>

      <div class="col-md-4">
        <label for="validationAge" class="form-label">Property Age*</label>
        <select class="form-select" id="validationAge" name="property_age" required>
          <option selected disabled value="">Please Choose...</option>
          <option>Brand new</option>
          <option>0-9 years</option>
          <option>10-49 years</option>
          <option>50+ years</option>
        </select>
        <div class="invalid-feedback">Please select a valid state.</div>
      </div>
    </div>

    <div class="row col-md-12">
      <div class="col-md-4">
        <label for="validationBedrooms" class="form-label">Bedrooms*</label>
        <select class="form-select" id="validationBedrooms" name="bedrooms" required>
          <option selected disabled value="">Please Choose...</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5+</option>
        </select>
        <div class="invalid-feedback">Please select a valid state.</div>
      </div>

      <div class="col-md-4">
        <label for="validationBathrooms" class="form-label">Bathrooms*</label>
        <select class="form-select" id="validationBathrooms" name="bathrooms" required>
          <option selected disabled value="">Please Choose...</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5+</option>
        </select>
        <div class="form-text">
          Include WC, en suite, and bathrooms in total bathroom count
        </div>
        <div class="invalid-feedback">Please select a valid state.</div>
      </div>

      <div class="col-md-4">
        <label for="validationReception" class="form-label">Reception Rooms*</label>
        <select class="form-select" id="validationReception" name="reception_rooms" required>
          <option selected disabled value="">Please Choose...</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5+</option>
        </select>
        <div class="form-text">
          Include study/office, living room, and dining room
        </div>
        <div class="invalid-feedback">Please select a valid state.</div>
      </div>
    </div>

    <div class="logo-with-no-text my-5">
      <div class="black-line"></div>
      <img src="http://localhost/wp-content/themes/Rezide-Internals/assets/img/logo/logo-with-no-text.svg" alt="" width="35px">
      <div class="black-line"></div>
    </div>

    <h2>Tell us about the property's features</h2>
    <div class="row col-md-12 my-3">
      <div class="col-md-4">
        <label for="validationPropertyCondition" class="form-label">Property Condition*</label>
        <select class="form-select" id="validationPropertyCondition" name="property_condition" required>
          <option selected disabled value="">Please Choose...</option>
          <option>Excellent</option>
          <option>Good</option>
          <option>In need of repair</option>
        </select>
        <div class="invalid-feedback">Please select a valid state.</div>
      </div>

      <div class="col-md-4">
        <label for="validationKitchenCondition" class="form-label">Kitchen Condition*</label>
        <select class="form-select" id="validationKitchenCondition" name="kitchen_condition" required>
          <option selected disabled value="">Please Choose...</option>
          <option>Recently modernised</option>
          <option>In good condition</option>
          <option>Needs updating</option>
          <option>Needs replacing</option>
        </select>
        <div class="invalid-feedback">Please select a valid state.</div>
      </div>
    </div>

    <div class="row col-md-12 my-3">
      <div class="col-md-4">
        <label for="validationBathroomCondition" class="form-label">Bathroom Condition*</label>
        <select class="form-select" id="validationBathroomCondition" name="bathroom_condition" required>
          <option selected disabled value="">Please Choose...</option>
          <option>Recently modernised</option>
          <option>In good condition</option>
          <option>Needs updating</option>
          <option>Needs replacing</option>
        </select>
        <div class="invalid-feedback">Please select a valid state.</div>
      </div>

      <div class="col-md-4">
        <label for="validationHeating" class="form-label">Central Heating*</label>
        <select class="form-select" id="validationHeating" name="central_heating" required>
          <option selected disabled value="">Please Choose...</option>
          <option>Full central heating</option>
          <option>In some rooms</option>
          <option>None</option>
        </select>
        <div class="invalid-feedback">Please select a valid state.</div>
      </div>
    </div>

    <div class="row col-md-12 my-3">
      <div class="col-md-4">
        <label for="validationGarden" class="form-label">Garden*</label>
        <select class="form-select" id="validationGarden" name="garden_condition" required>
          <option selected disabled value="">Please Choose...</option>
          <option>Private garden</option>
          <option>Private garden + 2 acres</option>
          <option>Communal garden</option>
          <option>None</option>
        </select>
        <div class="invalid-feedback">Please select a valid state.</div>
      </div>

      <div class="col-md-4">
        <label for="validationGarage" class="form-label">Garage*</label>
        <select class="form-select" id="validationGarage" name="garage_condition" required>
          <option selected disabled value="">Please Choose...</option>
          <option>No</option>
          <option>1 space</option>
          <option>2+ spaces</option>
        </select>
        <div class="invalid-feedback">Please select a valid state.</div>
      </div>
    </div>

    <div class="row col-md-12 my-3">
      <div class="col-md-4">
        <label for="validationParking" class="form-label">Off Road Parking*</label>
        <select class="form-select" id="validationParking" name="off_road_parking" required>
          <option selected disabled value="">Please Choose...</option>
          <option>No</option>
          <option>1 space</option>
          <option>2+ spaces</option>
        </select>
        <div class="invalid-feedback">Please select a valid state.</div>
      </div>

      <div class="col-md-4">
        <label for="validationExtended" class="form-label">Has the property been extended?*</label>
        <select class="form-select" id="validationExtended" name="property_extended" required>
          <option selected disabled value="">Please Choose...</option>
          <option>Yes</option>
          <option>No</option>
        </select>
        <div class="invalid-feedback">Please select a valid state.</div>
      </div>
    </div>

    <div class="col-12">
      <button class="btn btn-warning main-btn" type="submit">Submit</button>
    </div>
  </form>
</div>
<?php add_shortcode('property_valuation', 'property_valuation_form'); ?>

<!-- <div class="valuation-results">
    <h2>House Valuation Result</h2>
    <?php
    // $valuation_result = get_transient('house_valuation_result');

    // if ($valuation_result) {
    //     echo "<p>$valuation_result</p>";
    //     delete_transient('house_valuation_result'); // Clear after displaying
    // } else {
    //     echo "<p>No valuation result found. Please try again.</p>";
    // }
    ?>
</div> -->

<?php if (isset($_SESSION['valuation_result'])): ?>
    <div id="valuation-popup" class="popup">
        <div class="popup-content">
            <span class="close-popup">&times;</span>
            <h3>Property Valuation</h3>
            <p><?php echo $_SESSION['valuation_result']; ?></p>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("valuation-popup").style.display = "block";
            document.querySelector(".close-popup").addEventListener("click", function() {
                document.getElementById("valuation-popup").style.display = "none";
            });
        });
    </script>
<?php unset($_SESSION['valuation_result']); endif; ?>
<script>
  document.getElementById("propertyForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent actual form submission

    // Collect form data
    const formData = new FormData(event.target);
    let output = "<ul>";

    for (const [key, value] of formData.entries()) {
        output += `<li><strong>${key.replace(/_/g, " ")}:</strong> ${value}</li>`;
    }
    output += "</ul>";

    // Show results in the popup
    document.getElementById("popupContent").innerHTML = output;
    document.getElementById("popup").style.display = "block";
});
</script>