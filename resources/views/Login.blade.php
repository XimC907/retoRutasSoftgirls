<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js"
        integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous">
    </script>
</head>

<body style="margin: 0; height: 100vh; display: flex; justify-content: center; align-items: center; background-color: #e9f5f3; font-family: Arial, sans-serif;">

  <div id="Login" style="background-color: rgb(73, 219, 183); padding: 40px 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); text-align: center;">

    <div style="margin-bottom: 20px;">
      <label for="inputEmail" style="display: block; margin-bottom: 8px; font-weight: bold; color: white;">Email</label>
      <input type="email" id="inputEmail" style="width: 250px; padding: 10px; border: none; border-radius: 6px;" placeholder="correo@ejemplo.com">
    </div>

    <div style="margin-bottom: 20px;">
      <label for="inputPassword" style="display: block; margin-bottom: 8px; font-weight: bold; color: white;">Password</label>
      <input type="password" id="inputPassword" style="width: 250px; padding: 10px; border: none; border-radius: 6px;" placeholder="Contraseña">
    </div>

    <button type="button" style="padding: 10px 20px; background-color: #ffffff; color: #2c8f7c; border: none; border-radius: 6px; font-weight: bold; cursor: pointer; transition: background-color 0.3s;">
      Registrarse
    </button>

  </div>

</body>

</html>