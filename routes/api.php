
Route::get('/health', function () {
    return response()->json(['status' => 'ok', 'env' => app()->environment()]);
});
