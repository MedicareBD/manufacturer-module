<?php

use Modules\Manufacturer\Http\Controllers\ManufacturerController;



Route::group(['prefix' => 'admin', 'as' => 'admin.'], function (){
    Route::resource('manufacturer', ManufacturerController::class);
    Route::get('ledger', [ManufacturerController::class, 'manufacturerLedger'])->name('manufacturer.ledger');
});
