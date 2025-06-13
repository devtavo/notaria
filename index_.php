<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Notaría Profesional - Página Principal</title>
<style>
  /* Reset and Base */
  *, *::before, *::after {
    box-sizing: border-box;
  }
  body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #f0f4f8 0%, #d9e2ec 100%);
    color: #1b1f24;
    line-height: 1.6;
    overflow-x: hidden;
  }
  a {
    text-decoration: none;
    color: inherit;
  }

  /* Scroll behavior for smooth navigation */
  html {
    scroll-behavior: smooth;
  }

  /* Container for sections */
  .container {
    max-width: 900px;
    margin: 0 auto;
    padding: 48px 24px 96px;
  }

  /* Header and Navigation */
  header {
    position: sticky;
    top: 0;
    background: rgba(255 255 255 / 0.95);
    box-shadow: 0 2px 12px rgba(0 0 0 / 0.1);
    z-index: 1000;
  }
  nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 1100px;
    margin: 0 auto;
    padding: 12px 24px;
  }
  .logo {
    font-weight: 700;
    font-size: 1.8rem;
    background: linear-gradient(135deg, #3b82f6, #14b8a6);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    user-select: none;
  }
  .nav-links {
    list-style: none;
    display: flex;
    gap: 24px;
  }
  .nav-links li {
    position: relative;
  }
  .nav-links a {
    font-weight: 500;
    font-size: 1rem;
    padding: 8px 12px;
    color: #334155;
    border-radius: 8px;
    transition: background-color 0.3s ease, color 0.3s ease, transform 0.2s ease;
    will-change: transform;
  }
  .nav-links a:hover,
  .nav-links a:focus {
    background-color: #3b82f689;
    color: #065f46;
    outline: none;
    transform: scale(1.05);
  }
  /* Mobile menu toggle */
  .menu-toggle {
    display: none;
    flex-direction: column;
    gap: 4px;
    cursor: pointer;
  }
  .menu-toggle span {
    width: 28px;
    height: 3px;
    background: #3b82f6;
    border-radius: 3px;
    transition: transform 0.3s ease, opacity 0.3s ease;
  }

  /* Mobile Navigation */
  @media (max-width: 768px) {
    nav {
      padding: 12px 16px;
    }
    .nav-links {
      position: fixed;
      top: 64px;
      right: 0;
      background: #ffffffee;
      height: calc(100vh - 64px);
      width: 240px;
      flex-direction: column;
      padding: 24px 16px;
      gap: 16px;
      transform: translateX(100%);
      transition: transform 0.3s ease;
      box-shadow: -4px 0 12px rgb(0 0 0 / 0.15);
      backdrop-filter: saturate(180%) blur(12px);
      overflow-y: auto;
      z-index: 1001;
    }
    .nav-links.open {
      transform: translateX(0);
    }
    .menu-toggle {
      display: flex;
    }
  }

  /* Sections */
  section {
    margin-bottom: 96px;
    opacity: 0;
    transform: translateY(20px);
    animation-fill-mode: forwards;
    animation-duration: 0.8s;
    animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  }

  /* Improved stagger container to animate children separately */
  section.visible {
    opacity: 1;
    transform: translateY(0);
  }
  .animate-fade-slide > * {
    opacity: 0;
    transform: translateY(12px);
    will-change: opacity, transform;
  }
  .animate-fade-slide.visible > * {
    animation-name: fadeSlideUp;
    animation-fill-mode: forwards;
    animation-duration: 0.9s;
    animation-timing-function: cubic-bezier(0.4,0,0.2,1);
  }
  /* Stagger children animations with delay using JS */

  @keyframes fadeSlideUp {
    from {
      opacity: 0;
      transform: translateY(12px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  h2.section-title {
    font-size: 2.8rem;
    color: #0f172a;
    font-weight: 700;
    border-left: 6px solid #3b82f6;
    padding-left: 16px;
    margin-bottom: 32px;
    will-change: transform, opacity;
    opacity: 0;
    transform: translateY(12px);
  }
  h2.section-title.visible {
    animation: fadeSlideUp 0.8s forwards cubic-bezier(0.4,0,0.2,1);
  }

  /* Inicio Section */
  #inicio .welcome-text {
    font-size: 1.25rem;
    max-width: 600px;
    margin-bottom: 24px;
    color: #334155;
    will-change: transform, opacity;
    opacity: 0;
    transform: translateY(12px);
  }
  #inicio .welcome-text.visible {
    animation: fadeSlideUp 0.8s forwards cubic-bezier(0.4,0,0.2,1);
    animation-delay: 0.2s;
  }

  #inicio .hero-image {
    width: 100%;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgb(59 130 246 / 0.15);
    margin-top: 32px;
    will-change: transform;
    transition: transform 0.3s ease;
  }
  #inicio .hero-image:hover, #inicio .hero-image:focus-within {
    transform: scale(1.02);
  }
  #inicio img {
    width: 100%;
    display: block;
    object-fit: cover;
  }

  /* Nosotros Section */
  #nosotros p {
    font-size: 1.1rem;
    color: #475569;
    will-change: transform, opacity;
    opacity: 0;
    transform: translateY(12px);
    transition: none;
  }
  #nosotros.visible p {
    animation: fadeSlideUp 0.8s forwards cubic-bezier(0.4,0,0.2,1);
    animation-delay: 0.15s;
  }

  /* Áreas Section */
  #areas {
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(260px,1fr));
    gap: 24px;
  }
  .area-card {
    background: #fff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 8px 24px rgb(0 0 0 / 0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: default;
    will-change: transform, box-shadow;
  }
  .area-card:hover,
  .area-card:focus-within {
    transform: translateY(-14px) scale(1.02);
    box-shadow: 0 16px 48px rgb(0 0 0 / 0.12);
    outline: none;
  }
  .area-icon {
    font-size: 48px;
    color: #3b82f6;
    margin-bottom: 16px;
  }
  .area-title {
    font-weight: 700;
    font-size: 1.25rem;
    margin-bottom: 12px;
    color: #0f172a;
  }
  .area-desc {
    color: #64748b;
    font-size: 1rem;
  }

  /* Contacto Section */
  #contacto form {
    max-width: 480px;
    display: flex;
    flex-direction: column;
    gap: 16px;
  }

  #contacto label {
    font-weight: 600;
    color: #334155;
  }

  #contacto input,
  #contacto textarea {
    padding: 12px 16px;
    border-radius: 12px;
    border: 2px solid #cbd5e1;
    font-size: 1rem;
    font-family: inherit;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
    will-change: border-color, box-shadow;
  }

  #contacto input:focus,
  #contacto textarea:focus {
    outline: none;
    border-color: #3b82f6;
    box-shadow: 0 0 10px rgb(59 130 246 / 0.6);
  }

  #contacto button {
    background: #3b82f6;
    color: white;
    border: none;
    padding: 14px 24px;
    font-size: 1.1rem;
    font-weight: 700;
    border-radius: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
    will-change: background-color, box-shadow, transform;
  }

  #contacto button:hover,
  #contacto button:focus {
    background: #2563eb;
    box-shadow: 0 8px 20px rgb(37 99 235 / 0.6);
    outline: none;
    transform: scale(1.05);
  }

  /* Blog Section */
  #blog {
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(280px,1fr));
    gap: 32px;
  }
  .blog-post {
    background: white;
    border-radius: 20px;
    box-shadow: 0 12px 30px rgb(0 0 0 / 0.05);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    cursor: pointer;
    will-change: transform, box-shadow;
  }
  .blog-post:hover,
  .blog-post:focus-within {
    transform: translateY(-10px) scale(1.03);
    box-shadow: 0 20px 40px rgb(0 0 0 / 0.15);
    outline: none;
  }
  .blog-image {
    width: 100%;
    height: 160px;
    object-fit: cover;
  }
  .blog-content {
    padding: 20px;
    flex-grow: 1;
  }
  .blog-title {
    font-weight: 700;
    font-size: 1.2rem;
    margin-bottom: 12px;
    color: #0f172a;
  }
  .blog-desc {
    color: #475569;
    font-size: 1rem;
    flex-grow: 1;
  }

  /* Verificación Section */
  #verificacion {
    max-width: 400px;
    margin: 0 auto;
  }
  #verificacion label {
    font-weight: 600;
    color: #334155;
    display: block;
    margin-bottom: 12px;
  }
  #verificacion input {
    width: 100%;
    padding: 12px 16px;
    border-radius: 12px;
    border: 2px solid #cbd5e1;
    font-size: 1rem;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
    will-change: border-color, box-shadow;
  }
  #verificacion input:focus {
    border-color: #3b82f6;
    outline: none;
    box-shadow: 0 0 8px rgb(59 130 246 / 0.6);
  }
  #verificacion button {
    margin-top: 24px;
    background: #14b8a6;
    color: white;
    border: none;
    padding: 14px 24px;
    font-size: 1.1rem;
    font-weight: 700;
    border-radius: 16px;
    cursor: pointer;
    width: 100%;
    transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.2s ease;
    will-change: background-color, box-shadow, transform;
  }
  #verificacion button:hover,
  #verificacion button:focus {
    background: #0f766e;
    box-shadow: 0 8px 20px rgb(15 118 110 / 0.6);
    outline: none;
    transform: scale(1.04);
  }
  #verificacion .message {
    margin-top: 16px;
    font-weight: 700;
    text-align: center;
    min-height: 1.5em;
  }
  #verificacion .message.success {
    color: #16a34a;
  }
  #verificacion .message.error {
    color: #dc2626;
  }

  /* Footer */
  footer {
    background: #0f172a;
    color: #94a3b8;
    text-align: center;
    padding: 32px 16px;
  }
  footer p {
    margin: 0;
    font-size: 0.9rem;
  }
</style>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>
<body>
<header>
  <nav aria-label="Navegación principal">
    <div class="logo" tabindex="0">Notaría Profesional</div>
    <ul class="nav-links" id="nav-links">
      <li><a href="#inicio" tabindex="0">Inicio</a></li>
      <li><a href="#nosotros" tabindex="0">Nosotros</a></li>
      <li><a href="#areas" tabindex="0">Áreas</a></li>
      <li><a href="#contacto" tabindex="0">Contacto</a></li>
      <li><a href="#blog" tabindex="0">Blog</a></li>
      <li><a href="#verificacion" tabindex="0">Verificación</a></li>
    </ul>
    <button class="menu-toggle" aria-label="Abrir menú de navegación" aria-expanded="false" aria-controls="nav-links">
      <span></span><span></span><span></span>
    </button>
  </nav>
</header>

<main>
  <section id="inicio" class="container animate-fade-slide" tabindex="0" aria-label="Sección inicio">
    <h2 class="section-title">Bienvenidos a Nuestra Notaría</h2>
    <p class="welcome-text">Ofrecemos servicios notariales confiables, profesionales y modernos para apoyarle en todos sus trámites legales.</p>
    <div class="hero-image" tabindex="0" aria-label="Imagen ilustrativa notaría profesional">
      <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/fe951671-e2fc-4558-91fb-b0c18f781867.png" alt="Interior moderno de una oficina de notaría con personal atendiendo clientes de forma profesional y cálida" />
    </div>
  </section>

  <section id="nosotros" class="container" tabindex="0" aria-label="Sección nosotros">
    <h2 class="section-title">Nosotros</h2>
    <p>Somos una notaría con años de experiencia y compromiso con la transparencia, la legalidad y la atención personalizada. Nuestro equipo está formado por profesionales altamente capacitados que garantizan la seguridad jurídica de sus documentos.</p>
  </section>

  <section id="areas" class="container" tabindex="0" aria-label="Sección áreas">
    <h2 class="section-title">Áreas de Servicio</h2>
    <div id="areas-list">
      <article class="area-card" tabindex="0" aria-label="Área de autenticación y legalización">
        <span class="material-icons area-icon" aria-hidden="true">verified_user</span>
        <h3 class="area-title">Autenticación y Legalización</h3>
        <p class="area-desc">Validación confiable de documentos y firmas para diversos trámites legales nacionales e internacionales.</p>
      </article>
      <article class="area-card" tabindex="0" aria-label="Área de Escrituras Públicas">
        <span class="material-icons area-icon" aria-hidden="true">description</span>
        <h3 class="area-title">Escrituras Públicas</h3>
        <p class="area-desc">Redacción, revisión y otorgamiento de escrituras públicas para compraventas, hipotecas y otros actos jurídicos.</p>
      </article>
      <article class="area-card" tabindex="0" aria-label="Área de Testamentos y Sucesiones">
        <span class="material-icons area-icon" aria-hidden="true">account_balance_wallet</span>
        <h3 class="area-title">Testamentos y Sucesiones</h3>
        <p class="area-desc">Asesoría y formalización de testamentos, así como tramitación de sucesiones testamentarias.</p>
      </article>
      <article class="area-card" tabindex="0" aria-label="Área de Contratos y Poderes">
        <span class="material-icons area-icon" aria-hidden="true">assignment</span>
        <h3 class="area-title">Contratos y Poderes</h3>
        <p class="area-desc">Elaboración y protocolización de contratos, poderes notariales y otros documentos legales.</p>
      </article>
    </div>
  </section>

  <section id="contacto" class="container" tabindex="0" aria-label="Sección contacto">
    <h2 class="section-title">Contacto</h2>
    <form id="contact-form" aria-label="Formulario de contacto">
      <label for="name">Nombre completo</label>
      <input type="text" id="name" name="name" required autocomplete="name" placeholder="Su nombre completo" />

      <label for="email">Correo electrónico</label>
      <input type="email" id="email" name="email" required autocomplete="email" placeholder="ejemplo@correo.com" />

      <label for="message">Mensaje</label>
      <textarea id="message" name="message" rows="4" required placeholder="Escribe tu mensaje aquí"></textarea>

      <button type="submit">Enviar Mensaje</button>
      <p id="form-status" role="alert" aria-live="polite" style="margin-top:12px;"></p>
    </form>
  </section>

  <section id="blog" class="container" tabindex="0" aria-label="Sección blog">
    <h2 class="section-title">Blog</h2>
    <div id="blog-posts">
      <article class="blog-post" tabindex="0">
        <img class="blog-image" src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/daeda10a-2936-4727-97d2-c5c910b56c8e.png" alt="Imagen representativa de trámites notariales" />
        <div class="blog-content">
          <h3 class="blog-title">Importancia de la autenticación de documentos</h3>
          <p class="blog-desc">Conozca por qué es fundamental validar sus documentos ante autoridades para evitar problemas legales en el futuro.</p>
        </div>
      </article>
      <article class="blog-post" tabindex="0">
        <img class="blog-image" src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/e3e88dbf-63cc-4479-b439-9391a1a962e0.png" alt="Imagen representativa de testamentos legales" />
        <div class="blog-content">
          <h3 class="blog-title">Testamentos: pasos para su correcta elaboración</h3>
          <p class="blog-desc">Descubra los requisitos esenciales para crear un testamento válido y seguro con la ayuda de profesionales.</p>
        </div>
      </article>
      <article class="blog-post" tabindex="0">
        <img class="blog-image" src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/353a62d0-3b59-4034-822e-f4be5f39cd6f.png" alt="Imagen representativa de contratos legales" />
        <div class="blog-content">
          <h3 class="blog-title">Contratos notariales y su validez</h3>
          <p class="blog-desc">Aprenda cómo los contratos notariales protegen a las partes involucradas y cómo protocolizarlos correctamente.</p>
        </div>
      </article>
    </div>
  </section>

  <section id="verificacion" class="container" tabindex="0" aria-label="Sección verificación de códigos">
    <h2 class="section-title">Verificación de Código</h2>
    <form id="verification-form" aria-label="Formulario de verificación de código">
      <label for="code-input">Ingrese su código de verificación</label>
      <input type="text" id="code-input" name="code" autocomplete="off" placeholder="Código de verificación" required />
      <button type="submit">Verificar</button>
      <div class="message" id="verification-message" aria-live="polite" role="alert"></div>
    </form>
  </section>
</main>

<footer>
  <p>© 2024 Notaría Profesional. Todos los derechos reservados.</p>
</footer>

<script>
  // Mobile menu toggle
  const menuToggle = document.querySelector('.menu-toggle');
  const navLinks = document.getElementById('nav-links');

  menuToggle.addEventListener('click', () => {
    const expanded = menuToggle.getAttribute('aria-expanded') === 'true';
    menuToggle.setAttribute('aria-expanded', String(!expanded));
    navLinks.classList.toggle('open');
  });

  // Animate sections on scroll using IntersectionObserver with stagger for children
  const sections = document.querySelectorAll('main section');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        // For stagger animation of children inside .animate-fade-slide container
        if(entry.target.classList.contains('animate-fade-slide')){
          const children = Array.from(entry.target.children);
          children.forEach((child, idx) => {
            child.style.animationDelay = `${idx * 0.15}s`;
            child.style.animationName = 'fadeSlideUp';
            child.style.animationFillMode = 'forwards';
            child.style.animationDuration = '0.6s';
            child.style.animationTimingFunction = 'cubic-bezier(0.4,0,0.2,1)';
          });
        }
        // For section titles animate separately
        const title = entry.target.querySelector('h2.section-title');
        if(title) {
          title.classList.add('visible');
        }
        // For #nosotros animate paragraph separately
        if(entry.target.id === 'nosotros') {
          const p = entry.target.querySelector('p');
          if(p) {
            p.style.animation = 'fadeSlideUp 0.8s forwards cubic-bezier(0.4,0,0.2,1)';
            p.style.animationDelay = '0.15s';
          }
        }
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.15,
  });
  sections.forEach(section => observer.observe(section));

  // Contact form submission handler (mock)
  const contactForm = document.getElementById('contact-form');
  const formStatus = document.getElementById('form-status');
  contactForm.addEventListener('submit', event => {
    event.preventDefault();
    formStatus.textContent = '';
    const name = contactForm.name.value.trim();
    const email = contactForm.email.value.trim();
    const message = contactForm.message.value.trim();
    if (!name || !email || !message) {
      formStatus.textContent = 'Por favor, complete todos los campos.';
      formStatus.style.color = '#dc2626';
      return;
    }
    // Simulate sending message
    formStatus.textContent = 'Enviando mensaje...';
    formStatus.style.color = '#3b82f6';

    setTimeout(() => {
      formStatus.textContent = 'Mensaje enviado con éxito. ¡Gracias!';
      formStatus.style.color = '#16a34a';
      contactForm.reset();
    }, 1500);
  });

  // Verification code checking (mock database)
  const verificationForm = document.getElementById('verification-form');
  const codeInput = document.getElementById('code-input');
  const verificationMessage = document.getElementById('verification-message');

  // Mock database of valid codes
  const validCodes = new Set([
    'ABC123',
    'XYZ789',
    'NOT12345',
    'VERIF2024',
    'CODE9876',
  ]);

  verificationForm.addEventListener('submit', event => {
    event.preventDefault();
    verificationMessage.textContent = '';
    const code = codeInput.value.trim().toUpperCase();
    if (!code) {
      verificationMessage.textContent = 'Ingrese un código.';
      verificationMessage.className = 'message error';
      return;
    }
    // Simulate database check with a delay
    verificationMessage.textContent = 'Verificando código...';
    verificationMessage.className = 'message';
    setTimeout(() => {
      if (validCodes.has(code)) {
        verificationMessage.textContent = 'Código válido. Verificación exitosa.';
        verificationMessage.className = 'message success';
      } else {
        verificationMessage.textContent = 'Código inválido. Por favor, verifique y vuelva a intentar.';
        verificationMessage.className = 'message error';
      }
    }, 1000);
  });
</script>
</body>
</html>

