<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/resources/css/styles.css">
    <title>Pasteleria Los Cariñosos</title>
</head>
<body>
    <header>
      <div style="background-color: #FF9494;">
        <h1 style="color:white; text-align:center;">Dulces Delicias </h1>
      </div>
<hr>
        <nav>
            <ul class="nav justify-content-center" >
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{asset('/')}}">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{asset('/producto')}}">Producto</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{asset('/categoria')}}">Categorias</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{asset('/cliente')}}">Clientes</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{asset('/empleado')}}">Empleados</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{asset('/venta')}}">Ventas</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{asset('/detalle')}}">Detalles</a>
                  </li>
                  
              </ul> 
        </nav>
       <hr>
    </header>
    <main>
        @yield('contenido')
    </main>
    <footer>
        <div class="card" style="text-align: center">
          <div class="card-header" style="background-color: #545B77;">
            <h5 style="color: white; border-bottom: 3px dotted white; padding: 10px; font-size: 1.5rem;">Dream Team</h5>
            <div class="row row-align">
              <div class="col-sm-12 col-md-6 col-lg-6">
                <p style="color: white;font-size: 0.8rem;">Alvarado Ibarra Manuel Alejandro </p>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6">
                <p style="color: white;font-size: 0.8rem;">Gonzalez Escobedo Yulissa Thaily</p>
              </div>
            </div>
            <div class="row row-align">
              <div class="col-sm-12 col-md-6 col-lg-6">
                <p style="color: white;font-size: 0.8rem;">Hernandez Garcia Hector Felipe </p>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6">
                <p style="color: white;font-size: 0.8rem;">Messa Sanchez Aranzazu Jimena</p>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">Derechos Reservados.</h5>
            <p class="card-text"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
              <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
            </svg>  Bienvenido a la pasteleria mas dulce</p>
            <a href="/" class="btn" style="background-color: #FF9494; color: white;">Pagina Principal</a>
          </div>
        </div>
    </footer>
    <style>
        .nav-item:hover{
            background-color: #FFD1D1 !important;
        }
        .nav-link,.nav-link:hover{
            color: black !important; 
            
        }
    </style>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>
</html>