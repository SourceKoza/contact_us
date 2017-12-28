<?php

Route::get('contact', 'MytimeController@index');
Route::post('store/contact', 'MytimeController@store');

Route::get('demo/model', function () {
    dd(\Pandey\Timezone\models\Contact::get());
});