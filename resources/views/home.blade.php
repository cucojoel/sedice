@extends('app')


@section('myHead')


<link href="//vjs.zencdn.net/5.8/video-js.min.css" rel="stylesheet">

@endsection

@section('content')

<aside class="asideLeft">
<h4>Titulo</h4>

  <div class="form-group">
    <label>Grado</label>


    <select class="selectpicker" data-live-search="true">
      <option data-tokens="primaria">primaria</option>
      <option data-tokens="secundaria">secundaria</option>
      <option data-tokens="prepa">prepa</option>
    </select>

  </div>

  <div class="form-group">
    <label>Materia</label>


    <select class="selectpicker" data-live-search="true">
      <option data-tokens="matematicas">matematicas</option>
      <option data-tokens="español">español</option>
      <option data-tokens="civica">civica</option>
    </select>

  </div>


  <div class="form-group">
    <label>Tema</label>


    <select class="selectpicker" data-live-search="true">
      <option data-tokens="sumas">sumas</option>
      <option data-tokens="restas">restas</option>
      <option data-tokens="multiplicacion">multiplicacion</option>
    </select>


  </div>





</aside>

<aside class="asideright">
	
  <h4>Tipo</h4>

  <div class="form-group">
    <label>Tipo</label>


    <select class="selectpicker" data-live-search="true">
      <option data-tokens="hipoacustio">hipoacustio</option>
      <option data-tokens="Sordo">Sordo</option>
      <option data-tokens="civica">civica</option>
    </select>

  </div>


</aside>

<section class="sectionContent">

  <video id="example_video_1" class="video-js vjs-default-skin">
    <source src="{{url($video)}}" type="video/mp4">
      <source src="really-cool-video.webm" type="video/webm">
        <p class="vjs-no-js">
          To view this video please enable JavaScript, and consider upgrading to a web browser
          that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
        </p>

        <track kind="captions" src="/captions.vtt" srclang="es" label="Español" default>

        </video>


      </section>
      @endsection


      @section('myScripts')
      <script src="//vjs.zencdn.net/5.8/video.min.js"></script>

      <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>


      <script>
        var player = videojs('example_video_1', {"controls": true, "autoplay": false, "preload": "auto",  "width":"800", "height":"100%" }, function() {
          console.log('Good to go!');

  //this.play(); // if you don't trust autoplay for some reason

  // How about an event listener?
  this.on('ended', function() {
    console.log('awww...over so soon?');
  });
});



        $('.selectpicker').selectpicker({
          style: 'btn-default',
          size: 4
        });


      </script>

      @endsection

