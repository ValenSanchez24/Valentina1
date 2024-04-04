<!DOCTYPE html>
<html>
<head>
    

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>
<body>
    <br>


    <style>
.btn-green {
  background-color: #4CAF50;
  color: white;
  border: none;
}

.btn-purple {
  background-color: #673AB7;
  color: white;
  border: none;
}

.btn-bottom {
  bottom: 2px;
  width: 100px;
  border-radius: 5px; /* Ajusta el valor para el redondeo deseado */
  margin: 5px; /* Separa los botones de la esquina */
  text-align: center;
}
        </style>

    <a class="nav-link btn-bottom btn-green" href="{{url('cliente')}}">Clientes</a>
  
    <a class="nav-link btn-bottom btn-purple" href="{{url('pedido')}}">Pedidos</a>

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>




</body>
</html>