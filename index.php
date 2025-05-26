<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notaría Lienzo</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
  <script>
    function validarDocumento() {
      const codigo = document.getElementById('codigoDocumento').value;
      if (!codigo) {
        alert('Por favor ingrese un código.');
        return;
      }
      alert('Código ingresado: ' + codigo);
    }
  </script>
</head>
<body class="font-sans text-gray-800">
  <header class="bg-blue-900 text-white sticky top-0 z-50 shadow">
    <div class="container mx-auto flex justify-between items-center p-4">
      <h1 class="text-xl font-bold">Notaría Leonel</h1>
      <nav class="space-x-4">
        <a href="#inicio" class="hover:underline">Inicio</a>
        <a href="#nosotros" class="hover:underline">Nosotros</a>
        <a href="#servicios" class="hover:underline">Servicios</a>
        <a href="#areas" class="hover:underline">Áreas</a>
        <a href="#contacto" class="hover:underline">Contacto</a>
      </nav>
    </div>
  </header>

  <section id="inicio" class="p-10 bg-gray-100 text-center animate-fade-in">
    <h2 class="text-4xl font-bold mb-4">Bienvenidos a Notaría </h2>
    <p class="text-lg mb-6">Comprometidos con la legalidad, la transparencia y el servicio de excelencia.</p>
    <img src="https://images.unsplash.com/photo-1581091012184-7f3c0e2679a7" alt="Oficina Notarial" class="mx-auto rounded-lg shadow-md w-full max-w-3xl">
  </section>

  <section id="nosotros" class="p-10 animate-slide-in">
    <h2 class="text-3xl font-semibold mb-4">Nosotros</h2>
    <p class="mb-4">Con más de 25 años de experiencia, Notaría  se ha consolidado como una institución confiable, ofreciendo servicios notariales con ética, profesionalismo y transparencia. Nuestro equipo está compuesto por profesionales altamente calificados y comprometidos con brindar atención personalizada a cada uno de nuestros clientes.</p>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div class="bg-white p-4 rounded shadow">
        <h3 class="text-xl font-bold">Misión</h3>
        <p>Garantizar la seguridad jurídica de los actos y hechos mediante servicios notariales eficientes y confiables.</p>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <h3 class="text-xl font-bold">Visión</h3>
        <p>Ser la notaría de referencia por excelencia, integridad y calidad de servicio en nuestra comunidad.</p>
      </div>
    </div>
  </section>

  <section id="servicios" class="p-10 bg-gray-100 animate-slide-in">
    <h2 class="text-3xl font-semibold mb-4">Servicios</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="bg-white p-4 rounded shadow">
        <h3 class="text-xl font-bold mb-2">Escrituras Públicas</h3>
        <p>Redacción y protocolización de actos jurídicos conforme a la normativa vigente.</p>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <h3 class="text-xl font-bold mb-2">Autenticaciones</h3>
        <p>Verificación y legitimación de firmas y documentos.</p>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <h3 class="text-xl font-bold mb-2">Declaraciones Juradas</h3>
        <p>Formalización de manifestaciones personales ante notario.</p>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <h3 class="text-xl font-bold mb-2">Legalizaciones</h3>
        <p>Legalización de documentos para su uso nacional e internacional.</p>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <h3 class="text-xl font-bold mb-2">Poderes</h3>
        <p>Otorgamiento de poderes generales y especiales para trámites legales.</p>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <h3 class="text-xl font-bold mb-2">Testamentos</h3>
        <p>Asesoría y protocolización de testamentos abiertos y cerrados.</p>
      </div>
    </div>
  </section>

  <section id="areas" class="p-10 animate-slide-in">
    <h2 class="text-3xl font-semibold mb-4">Áreas de Especialización</h2>
    <ul class="list-disc list-inside space-y-2">
      <li><strong>Derecho Civil:</strong> Contratos, sucesiones, testamentos, propiedad.</li>
      <li><strong>Derecho Mercantil:</strong> Constitución de empresas, reformas estatutarias.</li>
      <li><strong>Derecho Inmobiliario:</strong> Compraventas, hipotecas, regularización de inmuebles.</li>
      <li><strong>Derecho de Familia:</strong> Capitulaciones matrimoniales, divorcios notariales.</li>
    </ul>
  </section>

  <section class="p-10 bg-gray-100 animate-slide-in">
    <h2 class="text-3xl font-semibold mb-4">Validador de Documentos</h2>
    <p class="mb-4">Ingrese el código único del documento para verificar su autenticidad:</p>
    <div class="flex flex-col sm:flex-row gap-4">
      <input id="codigoDocumento" type="text" class="p-2 border border-gray-300 rounded w-full sm:w-1/2" placeholder="Código único">
      <button onclick="validarDocumento()" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700">Validar</button>
    </div>
  </section>

  <section id="contacto" class="p-10 animate-slide-in">
    <h2 class="text-3xl font-semibold mb-4">Contacto</h2>
    <div class="space-y-2">
      <p><strong>Dirección:</strong> Calle Ejemplo 123, Ciudad Capital</p>
      <p><strong>Teléfono:</strong> (123) 456-7890</p>
      <p><strong>Email:</strong> contacto@notaria.com</p>
    </div>
    <form class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-4">
      <input type="text" placeholder="Nombre" class="p-2 border rounded">
      <input type="email" placeholder="Correo electrónico" class="p-2 border rounded">
      <textarea placeholder="Mensaje" class="p-2 border rounded md:col-span-2"></textarea>
      <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700 md:col-span-2">Enviar</button>
    </form>
  </section>

  <a href="https://wa.me/1234567890" target="_blank" class="fixed bottom-4 right-4 bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg">
    WhatsApp
  </a>

  <style>
    @keyframes fade-in {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    @keyframes slide-in {
      from { transform: translateY(30px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    .animate-fade-in {
      animation: fade-in 1s ease-out;
    }

    .animate-slide-in {
      animation: slide-in 0.8s ease-out;
    }
  </style>
</body>
</html>
