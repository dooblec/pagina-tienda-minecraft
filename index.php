<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Minecraft</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var isLoggedIn = <?php echo isset($_SESSION['usuario']) ? 'true' : 'false'; ?>;
            var loginNav = document.getElementById('login-nav');
            var logoutNav = document.getElementById('logout-nav');

            if (isLoggedIn) {
                loginNav.style.display = 'none';
                logoutNav.style.display = 'block';
            } else {
                loginNav.style.display = 'block';
                logoutNav.style.display = 'none';
            }
        });
    </script>
</head>
<body>
    <header>
        <div class="header-content">
            <h1>Bienvenido a la Tienda de Minecraft</h1>
            <img src="sword-icon.png" alt="Espada" class="sword-icon">
        </div>
        <nav>
            <a href="index.php">Inicio</a>
            <a id="login-nav" href="login.php">Iniciar sesión</a>
            <a id="logout-nav" href="logout.php" style="display:none;">Cerrar sesión</a>
            <a href="register.php">Registrarse</a>
            <a href="rcoins.html">Comprar R-Coins</a>
            <a href="unbans.html">Comprar Unban</a>
        </nav>
    </header>
    <main>
        <!-- Contenido de la tienda -->
    </main>
    <footer>
        <p>&copy; 2024 Tienda de Minecraft</p>
    </footer>
</body>
</html>
