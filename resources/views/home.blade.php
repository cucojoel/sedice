@extends('app')
@section('myHead')
<link href="//vjs.zencdn.net/5.8/video-js.min.css" rel="stylesheet">
@endsection
@section('content')
<aside class="asideLeft">
<h4>Titulo</h4>
  <div class="form-group">
    <label>Grado</label>
    <select id="grado" class="selectpicker" data-live-search="true">
      <option value="01">primaria</option>
      <option value="02">secundaria</option>
      <option value="03">prepa</option>
    </select>
  </div>
  <div class="form-group">
    <label>Materia</label>
    <select id="materia" class="selectpicker" data-live-search="true">
      <option value="01">matematicas</option>
      <option value="02">español</option>
      <option value="03">civica</option>
    </select>
  </div>
  <div class="form-group">
    <label>Tema</label>
    <select id="tema" class="selectpicker" data-live-search="true">
      <option value="01">sumas</option>
      <option value="02">restas</option>
      <option value="03">multiplicacion</option>
    </select>
  </div>
</aside>
<aside class="asideright">
  <h4>Tipo</h4>
  <div class="form-group">
    <label>Tipo</label>
    <select id="tipo" class="selectpicker" data-live-search="true">
      <option value="E1">hipoacustio</option>
      <option value="E2">Sordo</option>
      <option value="E3">civica</option>
    </select>
  </div>
</aside>
<section class="sectionContent">
<video id="myPlayerID"
    class="video-js" controls>
    </video>
      </section>
      @endsection
      @section('myScripts')
      <script src="//vjs.zencdn.net/5.8/video.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
      <script>
        var player = videojs('myPlayerID', {"controls": true, "autoplay": false, "preload": "auto",  "width":"800", "height":"100%" }, function() {
          //console.log('Good to go!');
          $("select").change(function(){
            //console.log(this);
            var grado=$("#grado").val();
            var materia=$("#materia").val();
            var tema=$("#tema").val();
            var tipo=$("#tipo").val();
            var videoGen=grado+materia+tema+tipo;
            player.src({"type":"video/mp4", "src":"/video/"+videoGen+".mp4"});
          })
  //this.play(); // if you don't trust autoplay for some reason
  // How about an event listener?
  this.on('ended', function() {
    //console.log('awww...over so soon?');
  });
});
        $('.selectpicker').selectpicker({
          style: 'btn-default',
          size: 4
        });
      </script>

      @endsection
