
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logoFooter"><a href="{{ url('/home') }}"><img src="{{asset('images/footer/prueba-logo.png') }}" alt="logoZooMaket"> </a></h2>
                </div>
                <div class="col-sm-2">
                    <h5>Comienza</h5>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/register') }}">Registrarse</a></li>
                        <li><a href="{{ url('/login') }}">Loguearse</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Nosotros</h5>
                    <ul>
                        <li><a href="#">Información sobre nosotros</a></li>
                        <li><a href="#">Preguntas Frecuentes</a></li>
                        <li><a href="#">Contactenos</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Soporte</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Mesa de Ayuda</a></li>
                        <li><a href="#">Foro</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="social-networks">
                        <a href="https://twitter.com/?lang=es" target="_blank" class="twitter"><img width ="35px" src="{{asset('images/footer/logo-twitter.png') }}"  alt=""></a>
                        <a href="https://www.facebook.com/" target="_blank" class="facebook"><img width="35px" src="{{asset('images/footer/facebook-logo-button.png') }}"alt=""></i></a>
                        <a href="https://www.instagram.com/?hl=es" target="_blank" class="google"><img width="35px" src="{{asset('images/footer/instagram-logo.png') }}" alt=""></a>
                    </div>
                    <button type="button" class="btn btn-default">Usuarios !</button>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2017 Copyright ZooMarket </p>
        </div>
    </footer>
