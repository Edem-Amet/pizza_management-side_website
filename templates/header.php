<head>
	<title>Ninja Pizza</title>
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="styles.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


</head>
<body>
<!--	<nav class="white z-depth-0">
    <div class="container">
      <a href="#" class="brand-logo brand-text">Ninja Pizza</a>
      <ul id="nav-mobile" class="right hide-on-small-and-down">
        <li><a href="#" class="btn brand z-depth-0">Add a Pizza</a></li>
      </ul>
    </div>
  </nav>
-->


  <!-- navbar -->
  <nav class="navbar navbar-expand-md navbar-light pt-4 pb-4">
    <div class="container-xl">
      <!-- navbar brand / title -->
      <a href="index.php" class="navbar-brand" href="#intro">
        <span class="fw-bold " id="title-description">
          Deezys Pizza
        </span>
      </a>
      <!-- toggle button for mobile nav -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
       aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation" id="nav-tg">
        <span class="navbar-toggler-icon" id="nav-tog-icon"></span>
      </button>

      <!-- navbar links -->
      <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#menu">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about us">About Us</a>
          </li>
          <li class="nav-item ms-2 d-none d-md-inline">
            <a href="add.php" class="btn btn-secondary" href="#pricing">Add Pizza</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
