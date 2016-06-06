<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Realice una consulta con nosotros</h2>
                <h3 class="section-subheading text-white">Si desea Contactar, para contratar algun servicio o realizar alguna consulta. Rellene el formulario de abajo.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="nombre y apellido" id="name" required data-validation-required-message="Introduzca su nombre">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="ejemplo@gmail.com" id="email" required data-validation-required-message="Introduzca el email">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="666777888" id="phone" required data-validation-required-message="Introduzca el numero de telefono">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Tu petición" id="message" required data-validation-required-message="Introduzca su petición"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
