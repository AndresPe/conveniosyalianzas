<!-- BOOSTSTRAP -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- ICONOS DE FONTAWESOME -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">

<!-- HOJA DE ESTILOS -->
<link rel="stylesheet" href="../css/login.css">
<link rel="stylesheet" href="../assets/css/int.css">

<!-- FONTS -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

<style>
    #topnav {
    background-color: #c40c1c;
    overflow: hidden;
  }
    #topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }
    #topnav a:hover {
    background-color: #ddd;
    color: #000;
  }
    #topnav a.active {
    background-color: white;
    color: #c40c1c;
  }
    #topnav .icon {
    display: none;
  }
</style>

<header>
    <div id="navbarToggleExternalContent">
        <nav class="navbar navbar-light" id="topnav" style="background-color: #c40c1c;">
            <div> <img src="{{ asset('images/logo.png') }}" alt="all"> </div>
            <div> <a id="texto" href="{{  URL::route('ConveniosNac.index') }}"> Nacionales</a> </div>
            <div> <a id="texto" href="{{ url('/ConveniosInterLista') }}"> Internacionales</a> </div>
            <div> <a id="texto" href="{{ url('/ConveniosInterLista') }}"> Intercambios </a> </div>
            <div> <a id="texto" href="{{  URL::route('ConveniosNac.index') }}"> Mis Solicitudes</a> </div>
            <div> <a id="texto" > Salir</a> </div>
        </nav>
    </div>
</header>
