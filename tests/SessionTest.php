<?php

use Nepo\Helper\Session;

it('can set session data in string', function () {
    $add = Session::add('helper', 'i am helping');
    expect($add)->toBe('i am helping');
});

it('can set session data in array', function () {
    $add = Session::add('helper', [
        'name' => 'phpHelper',
        'author' => 'Dinesh Uprety',
    ]);
    expect($add)->toBeArray();
});
