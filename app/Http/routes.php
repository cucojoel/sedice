<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



Route::get('/home', function () {


	Response::macro('streamed', function($type, $size, $name, $callback) {
    $start = 0;
    $length = $size;
    $status = 200;
    $headers = [
        'Content-Type' => $type,
        'Content-Length' => $size,
        'Accept-Ranges' => 'bytes'
    ];
    if (false !== $range = Request::server('HTTP_RANGE', false)) {
        list($param, $range) = explode('=', $range);
        if (strtolower(trim($param)) !== 'bytes') {
            header('HTTP/1.1 400 Invalid Request');
            exit;
        }
        list($from, $to) = explode('-', $range);
        if ($from === '') {
            $end = $size - 1;
            $start = $end - intval($from);
        } elseif ($to === '') {
            $start = intval($from);
            $end = $size - 1;
        } else {
            $start = intval($from);
            $end = intval($to);
        }
        if ($end >= $length) {
            $end = $length - 1;
        }
        $length = $end - $start + 1;
        $status = 206;
        $headers['Content-Range'] = sprintf('bytes %d-%d/%d', $start, $end, $size);
        $headers['Content-Length'] = $length;
    }
    return Response::stream(function() use ($start, $length, $callback) {
        call_user_func($callback, $start, $length);
    }, $status, $headers);
});

    //$video = "video/IMG_3665.MOV";
    $video = "";
    $mime = "video/mp4";
    $title = "Os Simpsons";
    return view('home')->with(compact('video', 'mime', 'title'));
});
Route::get('/video/{filename}', function ($filename) {
    // Pasta dos videos.
    $videosDir = base_path('/video');
    if (file_exists($filePath = $videosDir."/".$filename)) {
        $stream = new \App\Http\VideoStream($filePath);
        return response()->stream(function() use ($stream) {
            $stream->start();
        });
    }
    return response("File doesn't exists", 404);
});


Route::get('/live', function () {
        $ytcode = "";

    if (isset($_GET["code"])) {
    $ytcode = $_GET["code"];
    }

    return view("live")->with("ytcode", $ytcode);
});