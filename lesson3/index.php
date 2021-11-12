<?php
$menu = [
    'Title' => [
        'submenu',
        'submenu2'
    ]
];

foreach ($menu as $title => $submenu) {
    echo '<ul><li>' . $title;
    foreach ($submenu as $subsubmenu) {
        echo '<li>' . $subsubmenu . '</li>';
    }
    echo '</li></ul>';
}