<?php
// recommend.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $season = $_POST['season'];
    $style = $_POST['style'];

    // Predefined clothes array
    $clothes = [
        ['season' => 'summer', 'style' => 'casual', 'item' => 'T-shirt and shorts'],
        ['season' => 'summer', 'style' => 'formal', 'item' => 'Light suit and loafers'],
        ['season' => 'winter', 'style' => 'casual', 'item' => 'Sweater and jeans'],
        ['season' => 'winter', 'style' => 'formal', 'item' => 'Wool suit and coat'],
        ['season' => 'spring', 'style' => 'casual', 'item' => 'Hoodie and jeans'],
        ['season' => 'spring', 'style' => 'formal', 'item' => 'Blazer and chinos'],
        ['season' => 'fall', 'style' => 'casual', 'item' => 'Jacket and khakis'],
        ['season' => 'fall', 'style' => 'formal', 'item' => 'Cardigan and trousers'],
        ['season' => 'summer', 'style' => 'sporty', 'item' => 'Tank top and running shorts'],
        ['season' => 'winter', 'style' => 'sporty', 'item' => 'Thermal wear and joggers'],
        ['season' => 'spring', 'style' => 'sporty', 'item' => 'Tracksuit'],
        ['season' => 'fall', 'style' => 'sporty', 'item' => 'Sweatshirt and joggers'],
        ['season' => 'summer', 'style' => 'business', 'item' => 'Linen shirt and slacks'],
        ['season' => 'winter', 'style' => 'business', 'item' => 'Blazer and wool pants'],
        ['season' => 'spring', 'style' => 'business', 'item' => 'Business casual with a light jacket'],
        ['season' => 'fall', 'style' => 'business', 'item' => 'Suit and tie'],
    ];

    // Filter clothes based on user input
    $recommendations = array_filter($clothes, function ($item) use ($season, $style) {
        return $item['season'] === $season && $item['style'] === $style;
    });

    if ($recommendations) {
        echo '<h2>Recommended Clothes:</h2>';
        foreach ($recommendations as $recommendation) {
            echo '<div class="recommendation">' . htmlspecialchars($recommendation['item']) . '</div>';
        }
    } else {
        echo '<div class="recommendation">No recommendations found for your preferences.</div>';
    }
}