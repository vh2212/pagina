
<html>
<body style="background-color:#000000;">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<br><br><br>
<font  color="white"><h1 class="text-center">API DOCUMENTAL</h1></font>
<br><br>
<div class="row">
  <div class="col-sm-6">
    <div class="card text-white bg-secondary mb-3">
      <div class="card-body">
        <h5 class="card-title">Humedad</h5>
        <p class="card-text">Es un dispositivo que mide la humedad relativa en un área dada. Un sensor de humedad puede ser utilizado tanto en interiores como en exteriores. Los sensores de humedad están disponibles en formas tanto analógicas como digitales.</p>
        <p> PUT= {"hum_id":"3", "humedad":"40"} </p>
        <p> GET= ip/labsol/api/humedad/3 </p>
        <p> POST={"humedad":"40"} </p>
        <p> DELETE= ip/labsol/api/humedad/3</p>
        <p class="text-right">
        
        </p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
  <div class="card text-white bg-warning mb-3">
      <div class="card-body">
        <h5 class="card-title">Luminosidad</h5>
        <p class="card-text">Es un dispositivo que ofrece la posibilidad de encender o apagar las luces de un área determinada automáticamente en función de la luz ambiental e independientemente de la temperatura o humedad existente.</p>
        <p> PUT= {"lum_id":"5","lumenes":"20000","luz":"1","luces":"1"} </p>
        <p> GET= ip/labsol/api/luminosidad/5 </p>
        <p> POST= {"lumenes":"20000","luz":"1","luces":"1"} </p>
        <p> DELETE= ip/labsol/api/luminosidad/5  </p>
        <p class="text-right">
        
        </p>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-6">
  <div class="card text-white bg-danger mb-3">
      <div class="card-body">
        <h5 class="card-title">Presencia</h5>
        <p class="card-text">Es un dispositivo electrónico equipado con sensores capaces de detectar cualquier movimiento en el área en la que está instalado. La finalidad es activar un sistema de iluminación, de climatización o ventilación o de vigilancia.</p>
        <p> PUT= { "presencia_id":"2","direccion":"entrada/salidad","tiempoArea":"5000" } </p>
        <p> GET=  ip/labsol/api/presencia/7  </p>
        <p> POST= {"direccion":"entrada/salidad","tiempoArea":"5000" } </p>
        <p> DELETE= ip/labsol/api/presencia/7  </p>
        
        <p class="text-right">
        
        </p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
  <div class="card text-white bg-success mb-3">
      <div class="card-body">
        <h5 class="card-title">Temperatura</h5>
        <p class="card-text"> Los sensores de temperatura son dispositivos que transforman los cambios de temperatura en cambios en señales eléctricas que son procesados por equipo electrico o electrónico.
           Hay tres tipos de sensores de temperatura, los termistores, los RTD y los termopares.</p>
        <p> PUT= {"temperatura_id":"3","temperatura":"20", "estado":"1","temp_clima":"19"} </p>
        <p> GET=  ip/labsol/api/temperatura/9  </p>
        <p> POST= {temperatura":"20", "estado":"1","temp_clima":"19"} </p>
        <p> DELETE= ip/labsol/api/temperatura/9  </p>
        <p class="text-right">
        
        </p>
      </div>
    </div>
  </div>
</div>

<div class="col-sm-6">
  <div class="card text-white bg-info mb-3">
      <div class="card-body">
        <h5 class="card-title">Gas</h5>
        <p class="card-text">Un detector de gas es un elemento que sufre un cambio físico o químico, reversible, en presencia de un gas, para dar una señal que es transmitida, mostrada o utilizada para operar alarmas y controles.</p>
        <p> PUT= {"gas_id":"10","concentracion":"10000"}</p>
        <p> GET=  ip/labsol/api/gas/6   </p>
        <p> POST= {"concentracion":"10000"} </p>
        <p> DELETE=  ip/labsol/api/gas/6  </p>
        <p class="text-right">
        </p>
      </div>
    </div>
  </div>
</div>
</body>
 </html>