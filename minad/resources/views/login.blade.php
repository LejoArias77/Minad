<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../resources/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body>
<section class="vh-100" style="background:linear-gradient( black, white);">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="../../resources/img/log3.jpg"
                alt="login img" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" width="100%"  />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form>

                  <div class="d-flex justify-content-center mb-4 pb-4">
                    <img src="../../resources/img/logoJB.svg" alt="" width="60%"  >
                  </div>

                  <h5 class="title fw-normal mb-3 pb-3" ">Ingresa a tu cuenta</h5>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="form2Example17" class="form-control form-control-lg" placeholder="Ingrese su usuario"/>
                    <label class="form-label" for="form2Example17">Usuario</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="form2Example27" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Contraseña</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-secondary btn-lg btn-block" type="button">Ingresar</button>
                  </div>
                </form>

                <div class="d-flex justify-content-center">
                   <img src="../../resources/img/imgService.png" alt="imgservice" width="10%">
                   <br>               
                </div>
                <h4 class="slogan">CALIDAD Y SERVICIO</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>

</html>