<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!----
 --
 --Header Section
 --
---->

    <header class="sticky-top">
      <nav class="navbar navbar-expand-lg fixed-top sticky-top">
        <div class="container-fluid align-items-end px-4 mx-5">
          <a class="navbar-brand" href="#"
            ><img
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-with-text.png"
              alt=""
              class="logo"
              width="100%"
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse justify-content-end"
            id="navbarNavDropdown"
          >
            <ul class="navbar-nav gap-3">
              <li>
                <ul
                  class="navbar-contact-info row position-absolute text-white"
                >
                  <li class="col-6 nav-item">Email: team@rezide.group</li>
                  <li class="col-6 nav-item">Tel: 015 0927 4474</li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle active text-white"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  About
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Buy</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sell</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Valuation
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Guides
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <a class="dropdown-item" href="#">Something here</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-warning main-btn" href="/valuation.php"
                  >Instant Valuation
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/exit.svg" alt="" width="15px"
                /></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <form method="POST" action="/valuation-calculator.php" class="row g-3 needs-validation mt-5 pt-5" novalidate>
  <div class="col-md-12">
    <div class="col-md-4">
      <label for="postcode" class="form-label mb-0">Postcode*</label>
      <input class="form-control mt-2" list="datalistOptions" id="postcode" placeholder="Your Postcode" name="postcode" />
      <datalist id="datalistOptions">
        <option value="San Francisco"></option>
        <option value="New York"></option>
        <option value="Seattle"></option>
        <option value="Los Angeles"></option>
        <option value="Chicago"></option>
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

  <div class="col-12">
    <a class="btn btn-warning main-btn" href="/valuation.php">Next</a>
  </div>

  <h2>Current Step: Tell us about the property's features</h2>
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


    <!-- <form class="row g-3 needs-validation mt-5" novalidate>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">First name</label>
        <input
          type="text"
          class="form-control"
          id="validationCustom01"
          value="Mark"
          required
        />
        <div class="valid-feedback">Looks good!</div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Last name</label>
        <input
          type="text"
          class="form-control"
          id="validationCustom02"
          value="Otto"
          required
        />
        <div class="valid-feedback">Looks good!</div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label"
          >Username</label
        >
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
          <input
            type="text"
            class="form-control"
            id="validationCustomUsername"
            aria-describedby="inputGroupPrepend"
            required
          />
          <div class="invalid-feedback">Please choose a username.</div>
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom03" class="form-label">City</label>
        <input
          type="text"
          class="form-control"
          id="validationCustom03"
          required
        />
        <div class="invalid-feedback">Please provide a valid city.</div>
      </div>
      <div class="col-md-3">
        <label for="validationCustom04" class="form-label">State</label>
        <select class="form-select" id="validationCustom04" required>
          <option selected disabled value="">Choose...</option>
          <option>...</option>
        </select>
        <div class="invalid-feedback">Please select a valid state.</div>
      </div>
      <div class="col-md-3">
        <label for="validationCustom05" class="form-label">Zip</label>
        <input
          type="text"
          class="form-control"
          id="validationCustom05"
          required
        />
        <div class="invalid-feedback">Please provide a valid zip.</div>
      </div>
      <div class="col-12">
        <div class="form-check">
          <input
            class="form-check-input"
            type="checkbox"
            value=""
            id="invalidCheck"
            required
          />
          <label class="form-check-label" for="invalidCheck">
            Agree to terms and conditions
          </label>
          <div class="invalid-feedback">You must agree before submitting.</div>
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
      </div>
    </form>

    <form class="row g-3 needs-validation mt-5" novalidate>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">First name</label>
        <input
          type="text"
          class="form-control"
          id="validationCustom01"
          value="Mark"
          required
        />
        <div class="valid-feedback">Looks good!</div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Last name</label>
        <input
          type="text"
          class="form-control"
          id="validationCustom02"
          value="Otto"
          required
        />
        <div class="valid-feedback">Looks good!</div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label"
          >Username</label
        >
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
          <input
            type="text"
            class="form-control"
            id="validationCustomUsername"
            aria-describedby="inputGroupPrepend"
            required
          />
          <div class="invalid-feedback">Please choose a username.</div>
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom03" class="form-label">City</label>
        <input
          type="text"
          class="form-control"
          id="validationCustom03"
          required
        />
        <div class="invalid-feedback">Please provide a valid city.</div>
      </div>
      <div class="col-md-3">
        <label for="validationCustom04" class="form-label">State</label>
        <select class="form-select" id="validationCustom04" required>
          <option selected disabled value="">Choose...</option>
          <option>...</option>
        </select>
        <div class="invalid-feedback">Please select a valid state.</div>
      </div>
      <div class="col-md-3">
        <label for="validationCustom05" class="form-label">Zip</label>
        <input
          type="text"
          class="form-control"
          id="validationCustom05"
          required
        />
        <div class="invalid-feedback">Please provide a valid zip.</div>
      </div>
      <div class="col-12">
        <div class="form-check">
          <input
            class="form-check-input"
            type="checkbox"
            value=""
            id="invalidCheck"
            required
          />
          <label class="form-check-label" for="invalidCheck">
            Agree to terms and conditions
          </label>
          <div class="invalid-feedback">You must agree before submitting.</div>
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
      </div> -->
    <!-- </form> -->

    <script <img src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script <img src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
  </body>
</html>
