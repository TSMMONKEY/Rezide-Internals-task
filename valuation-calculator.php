<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Retrieve form data from $_POST
    $postcode = $_POST['postcode'];
    $property_type = $_POST['property_type'];
    $description = $_POST['property_description'];
    $age = $_POST['property_age'];
    $bedrooms = $_POST['bedrooms'];
    $bathrooms = $_POST['bathrooms'];
    $reception = $_POST['reception_rooms'];
    $property_condition = $_POST['property_condition'];
    $kitchen_condition = $_POST['kitchen_condition'];
    $bathroom_condition = $_POST['bathroom_condition'];
    $heating = $_POST['central_heating'];
    $garden_condition = $_POST['garden_condition'];
    $garage = $_POST['garage_condition'];
    $parking = $_POST['off_road_parking'];
    $extended = $_POST['property_extended'];

    // Now, you can use this data in your valuation calculation
    // (refer to the previous example for the valuation logic)

    // Define base price for property types
    $base_prices = [
        "Flat / Apartment" => 150000,
        "House" => 250000,
        "Bungalow" => 220000
    ];

    $base_price = $base_prices[$property_type] ?? 100000; // Default to 100k if not found

    // Define condition multipliers
    $condition_multipliers = [
        "Good" => 1.1,
        "Fair" => 1.05,
        "Poor" => 0.9
    ];

    $property_condition_multiplier = $condition_multipliers[$property_condition] ?? 1;
    $kitchen_condition_multiplier = 1; // Assume kitchen condition doesn't affect unless specifically handled

    $age_multiplier = ($age === '0-9 years') ? 1.2 : 1.0;

    // Adjust for number of rooms
    $bedroom_value = $bedrooms * 5000;
    $bathroom_value = $bathrooms * 3000;
    $reception_value = $reception * 4000;

    // Adjust for garage, parking, and garden
    $garage_value = ($garage === '1 space') ? 15000 : 0;
    $parking_value = ($parking === '1 space') ? 10000 : 0;
    $garden_value = ($garden_condition === 'Communal garden') ? 5000 : 0;

    // Calculate total valuation
    $valuation = $base_price;
    $valuation += $bedroom_value + $bathroom_value + $reception_value;
    $valuation += $garage_value + $parking_value + $garden_value;
    $valuation *= $property_condition_multiplier * $kitchen_condition_multiplier * $age_multiplier;

    // Output the valuation result
    echo "Estimated Property Valuation: £" . number_format($valuation);
}
?>
