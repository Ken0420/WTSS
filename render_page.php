<?php
    require 'vendor/autoload.php'; // Ensure Slim and Twig are loaded

    // Set up Twig
    $loader = new \Twig\Loader\FilesystemLoader('s/templates');
    $twig = new \Twig\Environment($loader);

    // Define the output folder for HTML files
    $outputFolder = 'output/html';

    // Create the output folder if it doesn't exist
    if (!is_dir($outputFolder)) {
        mkdir($outputFolder, 0777, true);
    }

    // Define the variables required by the template
    $variables = [
        'css_id' => 'example-css-id', // Replace with actual CSS ID
        'product' => [
            'lowercase_name' => 'classbiz' // Replace with the actual product name
        ]
    ];

    // Render the `home.html.twig` template
    $htmlContent = $twig->render('home.html.twig', $variables);

    // Save the rendered content as an HTML file
    $outputFileName = $outputFolder . '/home.html';
    file_put_contents($outputFileName, $htmlContent);

    echo "Rendered home.html.twig to $outputFileName\n";