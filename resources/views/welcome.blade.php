@extends('app')

@section('content')

  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">SEDICE</h1>
    <p>Sistema de Educación Digital para Capacidades Especiales</p>
    <img src="http://siproan.com/sedice/sedice.jpg" alt="boy" class="w3-image" width="992" height="700">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="objetivo">
    <h2 class="w3-text-light-grey">Objetivo</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>Brindar apoyo a la educación de personas con déficit auditivo por medio de las Tecnologías de la Información y la Comunicación (TIC's).
       Por medio de los siguientes puntos:
	<ul>
	  <li>Comprender el proceso de enseñanza-aprendizaje de los estudiantes sordo-mudos, para seguir con su educación continua.</li>
	  <li>Investigar métodos y estrategias educativas que permitan el desarrollo de las destrezas de comunicación, basándose en las distintas tecnologías a su alcance.</li>
	  <li>Facilitar la labor docente, mediante el desarrollo de sistemas que permitan la transmisión del conocimiento a estudiantes sordo-mudos.</li>
	</ul>
     
    <h3 class="w3-padding-16 w3-text-light-grey">Estadísticas</h3>
    <p>Al año 2010, las personas que tienen algún tipo de discapacidad son 5 millones 739 mil 270, lo que representa 5.1% de la población total.</p>
    <p>En México, de las personas que presentan alguna discapacidad</p>
    <p class="w3-wide">Hombres 49%</p>
    <div class="w3-progress-container">
      <div class="w3-progressbar" style="width:49%"></div>
    </div>
    <p class="w3-wide">Mujeres 51%</p>
    <div class="w3-progress-container">
      <div class="w3-progressbar" style="width:51%"></div>
    </div>
    
    <br>
    
    <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">58.3%</span><br>
        Caminar o Moverse
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">27.2%</span><br>
        Ver
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">12.1%</span><br>
        Escuchar
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">8.3%</span><br>
        Hablar o comunicarse
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">5.5%</span><br>
        Atender el cuidado personal
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">4.4%</span><br>
        Poner atención o aprender
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">8.5%</span><br>
        Mental
      </div> 
    </div>
	
    <sub>FUENTE: INEGI. Censo de Población y Vivienda 2010, Cuestionario ampliado. Estados Unidos Mexicanos/Población con discapacidad.</sub>
        
  <!-- End Objetivo Section -->
  </div>
  
  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="video">
    <h2 class="w3-text-light-grey">Video</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
        <iframe style="width:100%; height:300px" src="https://www.youtube.com/embed/pOvyJkdlRA4" frameborder="0" allowfullscreen></iframe>
    </div>
  <!-- End Portfolio Section -->
  </div>

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contacto">
    <h2 class="w3-text-light-grey">Contacto</h2>
    <hr style="width:200px" class="w3-opacity">
    
    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>Universidad ICEL</p>
      <h3 class="w3-text-light-grey">Integrantes</h3>	
      
      <p><i class="fa fa-user fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>Aguilar Sánchez Alejandra Denisse</p>	
      <p><i class="fa fa-user fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>Ávila Ruíz Jorge Giridhari</p>		
      <p><i class="fa fa-user fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>Cervantes León Raúl Mayco</p>		
      <p><i class="fa fa-user fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>González Sánchez Luis Ángel</p>
      <p><i class="fa fa-user fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>José González Uriel</p>	
      <p><i class="fa fa-user fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>Miguel Fuentes Blanca Loréna</p>		
      <p><i class="fa fa-user fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>Romero Díaz Jesús Uriel</p>		
      <p><i class="fa fa-user fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>Romero Díaz Jose Francisco</p>
      <p><i class="fa fa-user fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>Soto Ramirez Pedro Joel</p>		
      <p><i class="fa fa-user fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>Torre Mancera Xóchitl</p>	
      
      <h3 class="w3-text-light-grey">Docencia de Apoyo</h3>
      
      <p><i class="fa fa-book fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>Andrés Miranda Reyes </p>		
      <p><i class="fa fa-book fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>Tulio Roca López</p>
      <p><i class="fa fa-book fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>Vladimir Valdes Trejo </p>
    </div><br>
    <p>Enviar comentario:</p>

    <form action="form.asp" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Nombre" required name="Nombre"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Correo electrónico" required name="Correo electrónico"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Mensaje" required name="Mensaje"></p>
        <button class="w3-btn w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> ENVIAR
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>
@endsection
