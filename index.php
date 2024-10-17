<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-mentor</title>
    <link rel="stylesheet" href="diseño.css">
    <link rel="shortcut icon" href="img/Logo.png">
</head>
<body>
    
    <div id="welcome" class="welcome-container fade-out">
        <img src="img/logo.png" alt="Logo" class="logo"><p></p>
        <span class="welcome-text">Bienvenido a E-Mentor</span>
    </div>

    <script>
        setTimeout(() => {
            document.getElementById("welcome").style.display = "none";
            window.location.href = "inicio.php";
        }, 3000);
    </script>

</body>
</html>