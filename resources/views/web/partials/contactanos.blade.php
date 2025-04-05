<section id="contacts">
    <div id="map" class="map"></div>
    <div class="section bg-dots">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="section-info">
                            <div class="title-hr wow fadeInLeft"></div>
                            <div class="info-title">Contactanos</div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row-contact row">
                            <div class="col-contact col-lg-6">
                                <h3 class="contact-title contact-top">{{ $configuracion->ciudad }}, <span>{{ $configuracion->pais }}</span>
                                </h3>
                                <p class="contact-address text-muted"><strong>{{ $configuracion->direccion }}</strong></p>
                                <p class="contact-row"><strong class="text-dark">Correo:</strong> {{ $configuracion->email }}</p>
                                <p class="contact-row"><strong class="text-dark">{{ $configuracion->redSocial->nombre }}:</strong> {{ $configuracion->red_social_detalle }}</p>
                            </div>
                            <div class="col-contact col-lg-6">
                                <p class="contact-top"><strong class="text-muted">Llámanos:</strong></p>
                                <p class="phone-lg text-dark">{{ $configuracion->telefono }}</p>
                                <div class="text-muted"><strong class="text-dark">Siguenos En</strong><br>
                                    <div class="contact-social social-list">
                                        @foreach ($redes_sociales as $item)
                                            <a href="{{ $item->link }}" class="{{ $item->icono }}"></a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-message">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="section-info">
                            <div class="title-hr wow fadeInLeft"></div>
                            <div class="info-title">Necesitas ayuda?</div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <form class="js-form" id="contactForm">
                            <div class="row">
                                <div class="form-group col-sm-6 col-lg-6">
                                    <input class="input-gray" type="text" name="nombre" id="nombre" placeholder="Nombre*">
                                    <label id="nombre-error" class="error" for="nombre" style="color: red; display: none;">Este campo es obligatorio.</label>
                                </div>
                                <div class="form-group col-sm-6 col-lg-6">
                                    <input class="input-gray" type="email" name="correo" id="correo" placeholder="Correo Electrónico*">
                                    <label id="correo-error" class="error" for="correo" style="color: red; display: none;">El correo es inválido.</label>
                                </div>
                                <div class="form-group col-sm-12 col-lg-12">
                                    <input class="input-gray" type="text" name="asunto" id="asunto" placeholder="Asunto*">
                                    <label id="asunto-error" class="error" for="asunto" style="color: red; display: none;">Este campo es obligatorio.</label>
                                </div>
                                <div class="form-group col-sm-12">
                                    <textarea class="input-gray" name="mensaje" id="mensaje" placeholder="Mensaje*"></textarea>
                                    <label id="mensaje-error" class="error" for="mensaje" style="color: red; display: none;">Este campo es obligatorio.</label>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn-upper btn-yellow btn">Enviar Mensaje</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<script>
    document.getElementById('contactForm').addEventListener('submit', async function (e) {
        e.preventDefault();

        // Obtener los valores de los campos
        const nombre = document.getElementById('nombre').value.trim();
        const correo = document.getElementById('correo').value.trim();
        const asunto = document.getElementById('asunto').value.trim();
        const mensaje = document.getElementById('mensaje').value.trim();

        // Referencias a los elementos de error
        const nombreError = document.getElementById('nombre-error');
        const correoError = document.getElementById('correo-error');
        const asuntoError = document.getElementById('asunto-error');
        const mensajeError = document.getElementById('mensaje-error');

        // Resetear mensajes de error
        nombreError.style.display = 'none';
        correoError.style.display = 'none';
        asuntoError.style.display = 'none';
        mensajeError.style.display = 'none';

        let isValid = true;

        // Validar campos
        if (!nombre) {
            nombreError.style.display = 'block';
            isValid = false;
        }
        if (!correo || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(correo)) {
            correoError.style.display = 'block';
            isValid = false;
        }
        if (!asunto) {
            asuntoError.style.display = 'block';
            isValid = false;
        }
        if (!mensaje) {
            mensajeError.style.display = 'block';
            isValid = false;
        }

        // Si no es válido, detener el envío
        if (!isValid) {
            return;
        }

        // Enviar datos usando fetch
        try {
            const response = await fetch('/contacto', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ nombre, correo, asunto, mensaje })
            });

            if (response.ok) {
                Swal.fire({
                    icon: 'success',
                    title: '¡Mensaje enviado!',
                    text: 'Tu mensaje ha sido enviado exitosamente.',
                });
                document.getElementById('contactForm').reset(); // Limpiar el formulario
            } else {
                throw new Error('Error al enviar el mensaje.');
            }
        } catch (error) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Hubo un problema al enviar tu mensaje. Inténtalo de nuevo más tarde.',
            });
        }
    });
</script>
