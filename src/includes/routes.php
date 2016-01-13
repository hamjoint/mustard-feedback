<?php

/*

This file is part of Mustard.

Mustard is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Mustard is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Mustard.  If not, see <http://www.gnu.org/licenses/>.

*/

Route::group([
    'prefix'     => env('MUSTARD_BASE', ''),
    'namespace'  => 'Hamjoint\Mustard\Feedback\Http\Controllers',
    'middleware' => ['web', 'auth'],
], function() {
    Route::get('user/feedback/{id}', 'UserController@getFeedback');
    Route::get('purchase/leave-feedback/{id}', 'PurchaseController@getLeaveFeedback');
    Route::post('purchase/leave-feedback', 'PurchaseController@postLeaveFeedback');
});
