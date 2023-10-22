
<?php

$data = [
    'name' => 'Himali',
    'contact' => [
        'phone' => [
            'work_phone' => '000',
            'home_phone' => '111'
        ],
        'emails' => 'himalipipalva@gmail.com',
    ]
];

$results = [];
array_walk_recursive($data, function ($item, $key) use (&$results){$results[$key] = $item;});

print_r($results);
?>