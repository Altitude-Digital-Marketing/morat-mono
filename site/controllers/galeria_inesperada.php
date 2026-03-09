<?php

return function ($page) {
    $galeria = $page->tour()->toStructure()->sortBy('date', 'asc');

    return [
        'galeria' => $galeria,
    ];
};
