php
<?php

function generateArraysJS() {
    $arrays = [
        'Array length' => [1, 2, 3, 4, 5],
        'Array toString()' => [1, 2, 3, 4, 5],
        'Array pop()' => [1, 2, 3, 4, 5],
        'Array push()' => [1, 2, 3, 4, 5],
        'Array shift()' => [1, 2, 3, 4, 5],
        'Array unshift()' => [1, 2, 3, 4, 5],
        'Array join()' => [1, 2, 3, 4, 5],
        'Array delete()' => [1, 2, 3, 4, 5],
        'Array concat()' => [1, 2, 3, 4, 5],
        'Array flat()' => [1, 2, 3, 4, 5],
        'Array splice()' => [1, 2, 3, 4, 5],
        'Array slice()' => [1, 2, 3, 4, 5],
    ];

    $html = '<style>
        .container {
            border: 1px solid black;
            padding: 10px;
            margin: 10px;
        }
    </style>';

    foreach ($arrays as $name => $array) {
        $html .= '<div class="container">';
        $html .= '<h2>' . $name . '</h2>';
        $html .= '<pre>';
        $html .= htmlspecialchars(json_encode($array, JSON_PRETTY_PRINT));
        $html .= '</pre>';
        $html .= '</div>';
    }

    return $html;
}

echo generateArraysJS();

?>