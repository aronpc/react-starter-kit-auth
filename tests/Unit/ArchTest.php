<?php

declare(strict_types=1);

arch()->preset()->php();
arch()->preset()->security();
arch()->preset()->laravel();

test('all files in App\Enums should be enums', function () {
    expect('App\Enums')
        ->toBeEnums();
});

test('all enums should use HasEnumFeatures trait', function () {
    expect('App\Enums')
        ->enums()
        ->toUseTrait('App\Contracts\HasEnumFeatures');
});
