<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Notaría Moderna y Profesional</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap');

  /* Reset and base styles */
  *, *::before, *::after {
    box-sizing: border-box;
  }
  body {
    margin: 0;
    font-family: 'Inter', sans-serif;
    background: #f9fbfe;
    color: #1e2a47;
    line-height: 1.6;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    min-width: 320px;
  }

  a {
    text-decoration: none;
    color: #2c7be5;
    transition: color 0.3s ease;
  }
  a:hover, a:focus {
    color: #1558d6;
    outline: none;
  }

  /* Container with max width and padding */
  .container {
    max-width: 1200px;
    width: 100%;
    padding: 0 24px;
    margin: 0 auto;
  }

  /* Header & navigation */
  header {
    position: sticky;
    top: 0;
    z-index: 1000;
    background: #ffffffcc;
    backdrop-filter: saturate(180%) blur(14px);
    border-bottom: 1px solid #e2e8f0;
    box-shadow: 0 2px 8px rgb(45 60 98 / 0.08);
  }
  .nav-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 64px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px;
  }

  .logo {
    font-weight: 800;
    font-size: 1.8rem;
    color: #2c7be5;
    user-select: none;
    letter-spacing: 1px;
  }

  nav {
    display: flex;
    align-items: center;
    gap: 32px;
  }
  nav a {
    font-weight: 600;
    font-size: 1rem;
    padding: 8px 0;
    position: relative;
  }
  nav a::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background: #2c7be5;
    border-radius: 99px;
    transition: width 0.3s ease;
  }
  nav a:hover::after,
  nav a:focus::after {
    width: 100%;
  }

  /* Mobile nav toggle */
  .mobile-nav-toggle {
    display: none;
    background: none;
    border: none;
    cursor: pointer;
    padding: 4px;
  }
  .mobile-nav-toggle svg {
    width: 28px;
    height: 28px;
    stroke: #2c7be5;
    stroke-width: 2.2;
    stroke-linecap: round;
    stroke-linejoin: round;
    transition: stroke 0.3s ease;
  }
  .mobile-nav-toggle:focus svg,
  .mobile-nav-toggle:hover svg {
    stroke: #1558d6;
    outline: none;
  }

  /* Mobile menu */
  .mobile-menu {
    position: fixed;
    top: 64px;
    right: 0;
    bottom: 0;
    width: 90vw;
    max-width: 320px;
    background: white;
    box-shadow: -6px 0 24px rgba(0,0,0,0.15);
    transform: translateX(100%);
    transition: transform 0.25s cubic-bezier(0.4, 0, 0.2, 1);
    display: flex;
    flex-direction: column;
    padding: 2rem 1.5rem;
    gap: 1.5rem;
    z-index: 9999;
  }
  .mobile-menu.show {
    transform: translateX(0);
  }
  .mobile-menu a {
    font-size: 1.2rem;
    font-weight: 700;
    color: #2c7be5;
  }
  .mobile-menu a:hover,
  .mobile-menu a:focus {
    color: #1558d6;
  }

  /* Sections */
  section {
    width: 100%;
    padding: 80px 24px;
    background: white;
    border-radius: 16px;
    box-shadow: 0 8px 24px rgb(45 60 98 / 0.06);
    margin: 16px 0 48px 0;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
  }

  section h2 {
    font-size: 2rem;
    font-weight: 800;
    margin-bottom: 24px;
    color: #1e2a47;
  }

  section p {
    font-size: 1.125rem;
    color: #475569;
    max-width: 720px;
  }

  /* Services grid */
  .services-list {
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(280px,1fr));
    gap: 32px;
    margin-top: 32px;
  }
  .service-card {
    background: #f0f5ff;
    border-radius: 12px;
    padding: 28px;
    box-shadow: 0 4px 16px rgb(44 123 229 / 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .service-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 12px 32px rgb(44 123 229 / 0.3);
  }
  .service-card h3 {
    margin-top: 0;
    margin-bottom: 12px;
    color: #2c7be5;
  }
  .service-card p {
    margin: 0;
    color: #475569;
  }

  /* About Us */
  .about-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 48px;
    align-items: center;
  }
  .about-content img {
    width: 100%;
    border-radius: 16px;
    box-shadow: 0 12px 24px rgb(45 60 98 / 0.1);
  }
  .about-text p {
    font-size: 1.125rem;
    color: #475569;
    max-width: 720px;
  }

  /* Contact form */
  form {
    max-width: 600px;
    display: flex;
    flex-direction: column;
    gap: 20px;
  }
  form label {
    font-weight: 600;
    font-size: 1rem;
    color: #1e2a47;
  }
  form input,
  form textarea {
    padding: 12px 16px;
    font-size: 1rem;
    border: 2px solid #ced4da;
    border-radius: 12px;
    resize: vertical;
    transition: border-color 0.3s ease;
    font-family: 'Inter', sans-serif;
    color: #1e2a47;
  }
  form input:focus,
  form textarea:focus {
    border-color: #2c7be5;
    outline: none;
  }
  form textarea {
    min-height: 120px;
  }
  form button {
    width: fit-content;
    padding: 14px 36px;
    background: #2c7be5;
    border: none;
    font-weight: 700;
    color: white;
    font-size: 1.125rem;
    border-radius: 28px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    align-self: flex-start;
  }
  form button:hover,
  form button:focus {
    background: #1558d6;
    outline: none;
  }

  /* Trámites section */
  .documents-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
  }
  .documents-list a {
    font-weight: 600;
    color: #2c7be5;
    border: 2px solid #2c7be5;
    padding: 10px 16px;
    border-radius: 12px;
    width: max-content;
    transition: background-color 0.3s ease, color 0.3s ease;
  }
  .documents-list a:hover,
  .documents-list a:focus {
    background-color: #2c7be5;
    color: white;
  }

  /* Map container */
  #map {
    width: 100%;
    height: 300px;
    border-radius: 16px;
    box-shadow: 0 8px 24px rgb(45 60 98 / 0.15);
    margin-top: 24px;
  }

  /* Footer */
  footer {
    background-color: #2c7be5;
    color: white;
    text-align: center;
    padding: 28px 16px;
    font-weight: 600;
    font-size: 1rem;
    user-select: none;
  }

  /* Responsive */
  @media screen and (max-width: 1024px) {
    .about-content {
      grid-template-columns: 1fr;
    }
    .about-content img {
      margin-bottom: 24px;
    }
  }

  @media screen and (max-width: 640px) {
    nav {
      display: none;
    }
    .mobile-nav-toggle {
      display: block;
    }
    section {
      padding: 48px 12px;
      margin: 12px 0 32px 0;
    }
    .service-card:hover {
      transform: none;
      box-shadow: 0 4px 16px rgb(44 123 229 / 0.15);
    }
  }
</style>
</head>
<body>
  <header>
    <div class="nav-container">
      <div class="logo" tabindex="0">Notaría Moderna</div>
      <nav aria-label="Navegación principal">
        <a href="#inicio" tabindex="0">Inicio</a>
        <a href="#servicios" tabindex="0">Servicios</a>
        <a href="#nosotros" tabindex="0">Nosotros</a>
        <a href="#tramites" tabindex="0">Trámites</a>
        <a href="#contacto" tabindex="0">Contacto</a>
      </nav>
      <button class="mobile-nav-toggle" aria-controls="mobile-menu" aria-expanded="false" aria-label="Abrir menú de navegación">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
          <path d="M3 6h18M3 12h18M3 18h18" />
        </svg>
      </button>
    </div>
    <nav id="mobile-menu" class="mobile-menu" aria-label="Menú móvil">
      <a href="#inicio" tabindex="0">Inicio</a>
      <a href="#servicios" tabindex="0">Servicios</a>
      <a href="#nosotros" tabindex="0">Nosotros</a>
      <a href="#tramites" tabindex="0">Trámites</a>
      <a href="#contacto" tabindex="0">Contacto</a>
    </nav>
  </header>

  <main>
    <section id="inicio" tabindex="-1" aria-label="Sección de inicio">
      <div class="container">
        <h2>Bienvenidos a Notaría Moderna</h2>
        <p>En nuestra notaría ofrecemos servicios notariales profesionales y confiables con atención personalizada y asesoría integral.</p>
      </div>
    </section>

    <section id="servicios" tabindex="-1" aria-label="Sección de servicios">
      <div class="container">
        <h2>Servicios</h2>
        <div class="services-list">
          <article class="service-card" tabindex="0">
            <h3>Protocolización de Documentos</h3>
            <p>Formalizamos documentos legales para garantizar su validez jurídica.</p>
          </article>
          <article class="service-card" tabindex="0">
            <h3>Consultoría Notarial</h3>
            <p>Asesoramiento experto en trámites y procesos notariales.</p>
          </article>
          <article class="service-card" tabindex="0">
            <h3>Autenticación de Firmas</h3>
            <p>Confirmamos la autenticidad de firmas para documentos oficiales.</p>
          </article>
          <article class="service-card" tabindex="0">
            <h3>Trámites de Escrituras</h3>
            <p>Redacción y registro de escrituras públicas.</p>
          </article>
        </div>
      </div>
    </section>

    <section id="nosotros" tabindex="-1" aria-label="Sección sobre nosotros">
      <div class="container about-content">
        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/ea706eac-5e41-41bd-9dba-00ed3ebda185.png" alt="Oficina moderna de notaría con decoración profesional y elegante" />
        <div class="about-text">
          <h2>Nosotros</h2>
          <p>Somos un equipo de profesionales comprometidos con la excelencia y la confianza. Nuestra misión es brindar un servicio notariales transparente, eficiente y accesible para todos nuestros clientes.</p>
          <p>Contamos con más de 10 años de experiencia y un profundo conocimiento legal que respalda cada trámite realizado.</p>
        </div>
      </div>
    </section>

    <section id="tramites" tabindex="-1" aria-label="Sección de trámites disponibles">
      <div class="container">
        <h2>Trámites</h2>
        <p>Ofrecemos una variedad de trámites notariales para cubrir tus necesidades legales.</p>
        <div class="documents-list">
          <a href="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/0ecbdfdd-1b4c-49c0-b41e-08eccb764b82.png" download>Descargar Formato Poder Notarial (PDF)</a>
          <a href="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/79a2d821-563e-4f45-8c62-9cb0e31dbb87.png" download>Descargar Formato Contrato de Compraventa (PDF)</a>
          <a href="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/7731a35d-2ce1-41be-9d7e-19d9651db31a.png" download>Descargar Formato Escritura Pública (PDF)</a>
        </div>
      </div>
    </section>

    <section id="contacto" tabindex="-1" aria-label="Sección de contacto con formulario">
      <div class="container">
        <h2>Contacto</h2>
        <form id="contactForm" novalidate>
          <label for="nombre">Nombre completo</label>
          <input type="text" id="nombre" name="nombre" placeholder="Tu nombre completo" required autocomplete="name" />
          
          <label for="email">Correo electrónico</label>
          <input type="email" id="email" name="email" placeholder="ejemplo@correo.com" required autocomplete="email" />
          
          <label for="telefono">Teléfono (opcional)</label>
          <input type="tel" id="telefono" name="telefono" placeholder="+52 55 1234 5678" autocomplete="tel" />
          
          <label for="mensaje">Consulta o comentario</label>
          <textarea id="mensaje" name="mensaje" placeholder="Escribe tu consulta o comentario" required></textarea>
          
          <button type="submit" aria-label="Enviar formulario de contacto">Enviar</button>
        </form>
      </div>
    </section>
  </main>

  <footer>
    <div class="container">
      <p>© 2024 Notaría Moderna - Todos los derechos reservados</p>
      <div id="map" aria-label="Mapa de ubicación de la notaría">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.711581248263!2d-99.13434118467703!3d19.43329968660447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff3c468af853%3A0x6e1bb7161ae1d91c!2sNotar%C3%ADa%20P%C3%BAblica%20N%C2%B0416%20Ciudad%20de%20M%C3%A9xico!5e0!3m2!1ses-419!2smx!4v1686765433670!5m2!1ses-419!2smx"
          width="100%" 
          height="300" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade" 
          title="Mapa de ubicación de Notaría"
        ></iframe>
      </div>
    </div>
  </footer>

  <script>
    // Mobile menu toggle logic
    const mobileToggle = document.querySelector('.mobile-nav-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileToggle.addEventListener('click', () => {
      const expanded = mobileToggle.getAttribute('aria-expanded') === 'true' || false;
      mobileToggle.setAttribute('aria-expanded', !expanded);
      mobileMenu.classList.toggle('show');
    });

    // Close mobile menu on link click
    mobileMenu.querySelectorAll('a').forEach(link =>
      link.addEventListener('click', () => {
        mobileMenu.classList.remove('show');
        mobileToggle.setAttribute('aria-expanded', false);
      })
    );

    // Simple form validation example
    const form = document.getElementById('contactForm');
    form.addEventListener('submit', e => {
      e.preventDefault();
      if (!form.checkValidity()) {
        form.reportValidity();
        return;
      }
      alert('Gracias por contactarnos. Responderemos pronto.');
      form.reset();
    });
  </script>
</body>
</html>

