<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Comercio Universitario Transacción Interna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            width: 100%;
            text-align: center;
            margin-bottom: 20px;
        }

        h1 {
            color: #333;
            font-size: 2.5em;
        }
        
        nav {
            background-color: #333;
            width: 100%;
            display: flex;
            justify-content: center;
            padding: 10px 0;
            border-radius: 8px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #575757;
        }
        
        /* Contenido de la pagina */
        .content-section {
            width: 90%;
            max-width: 1200px;
            margin-top: 20px;
        }

        .content-section h2 {
            text-align: center;
            color: #555;
            font-size: 2em;
            margin-bottom: 20px;
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        
        /* Estilos específicos para historias de usuario */
        .card-user-story .card-header {
            font-size: 1.2em;
            font-weight: bold;
            color: #555;
            margin-bottom: 10px;
            border-bottom: 2px solid #eee;
            padding-bottom: 5px;
        }
        
        .card-user-story .card-body p {
            margin: 5px 0;
            line-height: 1.5;
        }
        
        .card-user-story .card-body .keyword {
            font-weight: bold;
            color: #007BFF;
        }

        /* Estilos específicos para diseño de interfaces */
        .card-design-interface {
            text-align: center;
        }

        .card-design-interface img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        
        .card-design-interface .card-description {
            font-style: italic;
            color: #777;
            margin-bottom: 5px;
        }

        .card-design-interface .card-author {
            font-weight: bold;
            color: #333;
        }

    </style>
</head>
<body>

    <header>
        <h1>Sistema de Comercio Universitario Transacción Interna</h1>
        <nav>
            <a href="#" onclick="showSection('user-stories')">Historias de usuario</a>
            <a href="#" onclick="showSection('interfaces')">Diseño de interfaces</a>
        </nav>
    </header>

    <main class="content-section" id="main-content">
        </main>
    
    <script>
        const userStoriesHTML = `
            <h2>Historias de usuario</h2>
            <div class="cards-grid">
                <div class="card card-user-story" style="background-color: lightblue;">
                    <div class="card-header">Stefany Mera</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> estudiante,</p>
                        <p><span class="keyword">Quiero</span> poder ver mi historial de compras,</p>
                        <p><span class="keyword">Para</span> llevar un registro de mis gastos.</p>
                    </div>
                </div>

                <div class="card card-user-story">
                    <div class="card-header">Stefany Mera</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> usuario registrado,</p>
                        <p><span class="keyword">Quiero</span> restablecer mi contraseña,</p>
                        <p><span class="keyword">Para</span> recuperar el acceso a mi cuenta.</p>
                    </div>
                </div>

                <div class="card card-user-story">
                    <div class="card-header">Stefany Mera </div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> administrador,</p>
                        <p><span class="keyword">Quiero</span> agregar nuevos productos al inventario,</p>
                        <p><span class="keyword">Para</span> mantener la tienda actualizada.</p>
                    </div>
                </div>
                
                <div class="card card-user-story">
                    <div class="card-header">Stefany Mera </div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> visitante del sitio,</p>
                        <p><span class="keyword">Quiero</span> buscar productos por categoría,</p>
                        <p><span class="keyword">Para</span> encontrar lo que necesito más rápido.</p>
                    </div>
                </div>

                <div class="card card-user-story">
                    <div class="card-header">Stefany Mera</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> cliente,</p>
                        <p><span class="keyword">Quiero</span> dejar una reseña en un producto,</p>
                        <p><span class="keyword">Para</span> compartir mi opinión con otros usuarios.</p>
                    </div>
                </div>
                
                <div class="card card-user-story">
                    <div class="card-header">Rossy Escobar</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> desarrollador,</p>
                        <p><span class="keyword">Quiero</span> una API de pagos segura,</p>
                        <p><span class="keyword">Para</span> procesar transacciones de manera confiable.</p>
                    </div>
                </div>
                <div class="card card-user-story">
                    <div class="card-header">Rossy Escobar</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> Usuario,</p>
                        <p><span class="keyword">Quiero</span> poner una calificacion o reseña a los articulos que compro,</p>
                        <p><span class="keyword">Para</span> Ayudar a otros usuarios a tomar mejores decisiones.</p>
                    </div>
               <div class="card-header">Rossy Escobar</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> Estudiante,</p>
                        <p><span class="keyword">Quiero</span>Recibir notificaciones cuando haya nuevas publicaciones de interés.,</p>
                        <p><span class="keyword">Para</span> Mantenerme informado sin necesidad de estar revisando siempre procesar transacciones de manera confiable.</p>
                    </div>
                <div class="card card-user-story">
                    <div class="card-header">Rossy Escobar</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> Usuario,</p>
                        <p><span class="keyword">Quiero</span> Enviar y recibir mensajes privados con otros usuarios,</p>
                        <p><span class="keyword">Para</span> Acordar detalles antes de realizar una compra .</p>
                    </div>
            <div class="card card-user-story">
                    <div class="card-header">Rossy Escobar</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> Estudiante,</p>
                        <p><span class="keyword">Quiero</span>Revisar los pagos que he realizado ,</p>
                        <p><span class="keyword">Para</span> Tener control de mis gastos y comprobantes.</p>
                    </div>
             <div class="card card-user-story">
                    <div class="card-header">Richar Acosta </div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> Comprador,</p>
                        <p><span class="keyword">Quiero</span> Realizar el pago en línea de forma segura,</p>
                        <p><span class="keyword">Para</span> completar mi compra sin problemas.</p>
                    </div>
             <div class="card card-user-story">
                    <div class="card-header">Richar Acosta </div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> Administrador,</p>
                        <p><span class="keyword">Quiero</span> Gestionar usuarios,productos y transacciones,</p>
                        <p><span class="keyword">Para</span> Mantener el orden y buen funcionamiento del programa.</p>
                    </div>
             <div class="card card-user-story">
                    <div class="card-header">Richar Acosta </div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span>  Estudiante Nuevo,</p>
                        <p><span class="keyword">Quiero</span> : Tutorial introductorio sobre cómo usar la plataforma,</p>
                        <p><span class="keyword">Para</span> Aprender rápidamente sus funciones.</p>
                    </div>
             <div class="card card-user-story">
                    <div class="card-header">Richar Acosta </div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span>  Estudiante de ultimo semestre,</p>
                        <p><span class="keyword">Quiero</span> Donar materiales a estudiantes de nuevo ingreso,</p>
                        <p><span class="keyword">Para</span> para facilitar la comunidad y reutilización.</p>
                    </div>
             <div class="card card-user-story">
                    <div class="card-header">Richar Acosta </div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span>Vendedor,</p>
                        <p><span class="keyword">Quiero</span> Publicar productos de comida o papelería con descripción,precio y cantidad disponible,</p>
                        <p><span class="keyword">Para</span>Ofrecerlos a los demás estudiantes.</p>
                    </div>
               <div class="card card-user-story">
                    <div class="card-header">Ruben Arroyo </div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> Comprador online ,</p>
                        <p><span class="keyword">Quiero</span> poder buscar productos por nombre, categoría y palabras clave,</p>
                        <p><span class="keyword">Para</span> encontrar rápidamente lo que estoy buscando o descubrir nuevos artículos que me interesen. </p>
                    </div>
                <div class="card card-user-story">
                    <div class="card-header">Ruben Arroyo </div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> Cliente registrado,</p>
                        <p><span class="keyword">Quiero</span> agregar, eliminar y modificar la cantidad de productos en mi carrito de compras ,</p>
                        <p><span class="keyword">Para</span> asegurarme de que la lista de mis compras sea precisa antes de proceder al pago.  </p>
                    </div>
                <div class="card card-user-story">
                    <div class="card-header">Ruben Arroyo </div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> Usuario recurrente ,</p>
                        <p><span class="keyword">Quiero</span>tener una cuenta donde pueda ver mi historial de pedidos, guardar mis direcciones y gestionar mis preferencias,</p>
                        <p><span class="keyword">Para</span> agilizar mis futuras compras y tener un registro de mis transacciones.</p>
                    </div>
                 <div class="card card-user-story">
                    <div class="card-header">Ruben Arroyo </div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> Comprador potencial,</p>
                        <p><span class="keyword">Quiero</span>ver las reseñas y calificaciones de otros clientes,</p>
                        <p><span class="keyword">Para</span>tomar una decisión informada sobre si el producto es de buena calidad y si vale la pena comprarlo.</p>
                    </div>
                <div class="card card-user-story">
                    <div class="card-header">Ruben Arroyo </div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> Comprador,</p>
                        <p><span class="keyword">Quiero</span>realizar el pago de mi pedido de forma rápida y segura,</p>
                        <p><span class="keyword">Completar mi compra con confianza y sin complicaciones. </p>
                    </div>
                <div class="card card-user-story">
                    <div class="card-header">Pierina Ventes </div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span>Estudiante ,</p>
                        <p><span class="keyword">Quiero</span>reservar aulas de estudio y espacios en la biblioteca a través de una aplicación ,</p>
                        <p><span class="keyword">garantizar un lugar donde trabajar en grupo sin contratiempos.</p>
                    </div>
                <div class="card card-user-story">
                    <div class="card-header">Pierina Ventes </div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span>Estudiante ,</p>
                        <p><span class="keyword">Quiero</span>recibir notificaciones en mi celular sobre cambios de horario, recordatorios de exámenes y eventos ,</p>
                        <p><span class="keyword">estar siempre informado y evitar perder actividades importantes.</p>
                    </div>
            </div>
        `;

        const interfacesHTML = `
            <h2>Diseño de interfaces</h2>
            <div class="cards-grid">
                <div class="card card-design-interface" style="background-color: lightblue;">
                    <img src="login.png" alt="Diseño de interfaz de login">
                    <div class="card-description">Un diseño de interfaz simple y moderno para la página de inicio de sesión.</div>
                    <div class="card-author">Autor: Juan Pérez</div>
                </div>
                
                <div class="card card-design-interface">
                    <img src="https://via.placeholder.com/300" alt="Diseño de la página principal">
                    <div class="card-description">Página principal con un enfoque minimalista para mejorar la navegación.</div>
                    <div class="card-author">Autor: Sofía Rodríguez</div>
                </div>
                
                <div class="card card-design-interface">
                    <img src="https://via.placeholder.com/300" alt="Diseño de la página de productos">
                    <div class="card-description">Diseño de la galería de productos, optimizado para la búsqueda por categorías.</div>
                    <div class="card-author">Autor: Luis González</div>
                </div>

                <div class="card card-design-interface">
                    <img src="https://via.placeholder.com/300" alt="Diseño de carrito de compras">
                    <div class="card-description">Una vista detallada del carrito de compras, con opciones de pago seguras.</div>
                    <div class="card-author">Autor: Ana Martínez</div>
                </div>

                <div class="card card-design-interface">
                    <img src="https://via.placeholder.com/300" alt="Diseño del perfil de usuario">
                    <div class="card-description">Interfaz del perfil de usuario con acceso rápido a su historial y configuraciones.</div>
                    <div class="card-author">Autor: David Sánchez</div>
                </div>

                <div class="card card-design-interface">
                    <img src="https://via.placeholder.com/300" alt="Diseño de notificaciones">
                    <div class="card-description">Un diseño claro para las notificaciones del sistema y mensajes de confirmación.</div>
                    <div class="card-author">Autor: Elena Fernández</div>
                </div>
            </div>
        `;
        
        // Función para mostrar la sección correcta
        function showSection(section) {
            const mainContent = document.getElementById('main-content');
            if (section === 'user-stories') {
                mainContent.innerHTML = userStoriesHTML;
            } else if (section === 'interfaces') {
                mainContent.innerHTML = interfacesHTML;
            }
        }
        
        // Muestra las historias de usuario por defecto al cargar la página
        document.addEventListener('DOMContentLoaded', () => {
            showSection('user-stories');
        });

    </script>
</body>
</html>
