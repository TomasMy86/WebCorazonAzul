<section id="como-colaborar" class="colaborar-section my-5">
    <div class="container">
        <h2 class="text-center mb-4">Cómo Colaborar</h2>
        
        <!-- Voluntariado, Donaciones y Eventos -->
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <h3>Voluntariado</h3>
                <p>¡Únite a nuestro equipo y marcá la diferencia! Ofrecemos diversas oportunidades para que puedas colaborar con nosotros.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h3>Donaciones</h3>
                <p>Aceptamos donaciones de alimentos, indumentaria, insumos médicos y fondos. Cada contribución ayuda a llevar ayuda a quienes más lo necesitan.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h3>Eventos</h3>
                <p>Participá en nuestros eventos y actividades comunitarias.</p>
            </div>
        </div>

        <!-- Formulario de contacto -->
        <div class="contact-form mt-5">
            <h3 id="contactanos" class="text-center mb-4">Contactanos</h3>
            <form action="/contact.php" method="POST">
                <div class="form-group">
                    <label for="name">Nombre y Apellido / Institución</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Número de Teléfono</label>
                    <input type="tel" class="form-control" id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="message">Mensaje</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3 w-100">Enviar</button>
            </form>
        </div>
    </div>
</section>
