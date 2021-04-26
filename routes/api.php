<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('dispatch-orders', function (Request $request) {
    $orderCount = $request->count ?? 1;

    $orders = \App\Models\Order::factory($orderCount)->create([
        'factory_id' => $request->factory ?? 1,
    ]);

    $orders->each(fn($order) => event(new \App\Events\DispatchOrder($request->factory ?? 1, $order)));
});

Route::post('delegate-order', function (Request $request) {
    event(new \App\Events\DispatchOrder(2, \App\Models\Order::find($request->id)));
});
