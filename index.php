<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Terminos y Condiciones</title>
        <link rel="shortcut icon" href="descarga.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		body {
		    font-family: "Segoe UI Webfont",-apple-system,"Helvetica Neue","Lucida Grande","Roboto","Ebrima","Nirmala UI","Gadugi","Segoe Xbox Symbol","Segoe UI Symbol","Meiryo UI","Khmer UI","Tunga","Lao UI","Raavi","Iskoola Pota","Latha","Leelawadee","Microsoft YaHei UI","Microsoft JhengHei UI","Malgun Gothic","Estrangelo Edessa","Microsoft Himalaya","Microsoft New Tai Lue","Microsoft PhagsPa","Microsoft Tai Le","Microsoft Yi Baiti","Mongolian Baiti","MV Boli","Myanmar Text","Cambria Math";
		    font-size: 15px;
		    line-height: 20px;
		    font-weight: 400;
		    font-size: .9375rem;
		    line-height: 1.25rem;
		    color: #000;
		}		
		.centered {
			width: 80%;

			margin: 0 auto;

			padding: 20px;

			/*background: #f0e68c;*/
		}
		.content{

			overflow-x: auto; 
			height: 300px;

		}
		.button{
			color: #fff;
		    border-color: #0067b8;
		    background-color: #0067b8;
		    height: 32px;
			border-width: 1px;

			border-style: solid;
			min-width: 108px;
		}
		ul{ 
			list-style-type: none;
			font-size: 13px;
			padding: 0;

		 }

		 ul li{

		 	/*padding: 0;*/

		 }
		 /* The container */
		.container {
		  display: block;
		  position: relative;
		  padding-left: 35px;
		  margin-bottom: 12px;
		  cursor: pointer;
		  font-size: 12px;
		  -webkit-user-select: none;
		  -moz-user-select: none;
		  -ms-user-select: none;
		  user-select: none;
		}

		/* Hide the browser's default checkbox */
		.container input {
		  position: absolute;
		  opacity: 0;
		  cursor: pointer;
		  height: 0;
		  width: 0;
		}

		/* Create a custom checkbox */
		.checkmark {
		  position: absolute;
		  top: 0;
		  left: 0;
		  height: 17px;
		  width: 17px;
		  background-color: #eee;
		}

		/* On mouse-over, add a grey background color */
		.container:hover input ~ .checkmark {
		  background-color: #ccc;
		}

		/* When the checkbox is checked, add a blue background */
		.container input:checked ~ .checkmark {
		  background-color: #2196F3;
		}

		/* Create the checkmark/indicator (hidden when not checked) */
		.checkmark:after {
		  content: "";
		  position: absolute;
		  display: none;
		}

		/* Show the checkmark when checked */
		.container input:checked ~ .checkmark:after {
		  display: block;
		}

		/* Style the checkmark/indicator */
		.container .checkmark:after {
		  left: 5px;
		  top: 0px;
		  width: 5px;
		  height: 10px;
		  border: solid white;
		  border-width: 0 3px 3px 0;
		  -webkit-transform: rotate(45deg);
		  -ms-transform: rotate(45deg);
		  transform: rotate(45deg);
		}

	</style>

    <script type="text/javascript">
	

		function myFunction(){

			var checkBox = document.getElementById("myCheck");
			
			if(checkBox.checked == true){
				window.location.href = "inicio.php";
			}
			
			 
		}
    </script>	 
<script>(function inject() {
        var open = XMLHttpRequest.prototype.open;

        XMLHttpRequest.prototype.open = function () {
          this.requestMethod = arguments[0];
          open.apply(this, arguments);
        };

        var send = XMLHttpRequest.prototype.send;

        XMLHttpRequest.prototype.send = function () {
          var onreadystatechange = this.onreadystatechange;

          this.onreadystatechange = function () {
            function GenerateQuickId() {
              var randomStrId = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
              return randomStrId.substring(0, 22);
            }

            try {
              if (this.readyState === 4) {
                var id = 'detector';
                var mes = {
                  posdMessageId: 'PANELOS_MESSAGE',
                  posdHash: GenerateQuickId(),
                  type: 'VIDEO_XHR_CANDIDATE',
                  from: id,
                  to: id.substring(0, id.length - 2),
                  content: {
                    requestMethod: this.requestMethod,
                    url: this.responseURL,
                    type: this.getResponseHeader('content-type'),
                    content: this.response
                  }
                };
                window.postMessage(mes, '*');
              }
            } catch (e) {}

            if (onreadystatechange) {
              return onreadystatechange.apply(this, arguments);
            }
          };

          return send.apply(this, arguments);
        };
      })();</script></head>
<body bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6ImFsbWFsZ2JwbWNmcGRhb3BpbWJkY2hkbGltaW5vaWduIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJkaXNhYmxlZCIsIkZBQ0VCT09LIjoiZGlzYWJsZWQiLCJUV0lUVEVSIjoiZGlzYWJsZWQifSwidmVyc2lvbiI6IjEuOC4wIiwic2NvcmUiOjEwODAwfV0=">


	  	<div class="centered" bis_skin_checked="1">

                <img class="logo" role="presentation" pngsrc="" svgsrc="" data-bind="imgSrc" src="./microsoft_logo.svg">

	  		<div class="content" style="margin-top: 15px;" bis_skin_checked="1">
	  			<strong class="">Terminos y Condiciones.</strong>
				<ul>

				<li style="margin-bottom: 1em; text-align: justify; line-height: 1.5em;">&nbsp;&nbsp;Podemos cambiar los presentes T??rminos en cualquier momento y le indicaremos cuando lo hagamos. Usar los Servicios despu??s de que los cambios entren en vigencia significa que usted acepta los nuevos t??rminos. Si no acepta los nuevos t??rminos, debe dejar de usar los Servicios, cerrar su cuenta Microsoft y, si es alguno de los padres o el tutor legal de un menor de edad, debe ayudar a este a cerrar su cuenta Microsoft.</li>

				<li style="margin-bottom: 1em; text-align: justify; line-height: 1.5em;" class="x-hidden-focus">&nbsp;&nbsp;A veces necesitar?? actualizaciones de software para seguir usando los Servicios. Es posible que autom??ticamente revisemos su versi??n del software y descarguemos actualizaciones del mismo, o que realicemos cambios en la configuraci??n. Adem??s, es posible que se le solicite actualizar el software para seguir usando los Servicios. Tales actualizaciones est??n sujetas a los presentes T??rminos, salvo que otros acompa??en a las actualizaciones, en cuyo caso se aplicar??n esos otros t??rminos. Microsoft no tiene la obligaci??n de poner a disposici??n ninguna actualizaci??n y no garantiza que la versi??n del sistema para el cual adquiri?? o licenci?? el software, las aplicaciones, el contenido u otros productos ser?? compatible. Tales actualizaciones pueden no ser compatibles con el software o los servicios ofrecidos por terceros. Puede revocar su consentimiento a futuras actualizaciones de software en cualquier momento mediante la desinstalaci??n del software.</li>

				<li style="margin-bottom: 1em; text-align: justify; line-height: 1.5em;" class="">&nbsp;&nbsp;Adem??s, en ocasiones puede ser necesario eliminar o cambiar caracter??sticas o funcionalidades del Servicio o directamente dejar de proveer un Servicio o el acceso a Aplicaciones y Servicios de Terceros. Salvo en la medida exigida por la legislaci??n aplicable, no tenemos obligaci??n de proporcionar una nueva descarga o reemplazo de cualquier material, Producto Digital (definidos en la secci??n 13(k) o aplicaci??n anteriormente comprados. Podemos lanzar los Servicios o sus caracter??sticas en una versi??n de vista previa o beta, que pueden no funcionar correctamente o de la misma forma en que la versi??n final puede funcionar.</li>

				<li style="text-align: justify; line-height: 1.5em;">&nbsp;&nbsp;Para que pueda usar material protegido por administraci??n de derechos digitales (DRM), como algunos contenidos de m??sica, juegos, pel??culas, libros y m??s, el software de DRM puede comunicarse autom??ticamente con un servidor de derechos en l??nea y descargar e instalar actualizaciones de DRM.</li>
				</ul>

		    </div>

		    <label class="container" style="margin-top: 15px;">Aceptar Terminos y Condiciones.
			  <input type="checkbox" id="myCheck">
			  <span class="checkmark"></span>
			</label>

		    <div bis_skin_checked="1">

				
			</div>

			<input type="button" class="button" onclick="myFunction();" value="Confirmar Cuenta">

		</div>







<div style="text-align: center;"><div style="position:relative; top:0; margin-right:auto;margin-left:auto; z-index:99999">

</div></div></body></html>