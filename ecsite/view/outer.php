<!DOCTYPE html>
<html>

<head>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <title>OnLineShop</title>
    <style>
      .nav-item{
      display: flex;
	    margin: 0 auto;
	    padding: 0 5%;
	    width: 94%;
        }

    .nav-itemlog{
      padding: 0 0.5%;
    }

    #serch_icn{
      margin:0 1%;
      color:white;
    }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>

<body background="../img/watercolor_00395.jpeg">
<div class="container-fluid"style="background-color: #000000;">
  <div class="row">

  <nav class=".fixed-top navbar navbar-expand-md navbar-dark " aria-label="Fourth navbar example" >
      <div class="container-fluid"style="background-color: #000000;">
        <a class="navbar-brand" href="index.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
        </svg>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./Outer.php">outer</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link active" href="./Tops.php">tops</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link active" href="./Bottoms.php">bottom</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link active" href="./Shose.php">shose</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link active" href="./Accesory_etc.php">accessory/etc</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link active" href="./Look.php">look</a>
            </li>
          </ul>
          
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16" id=serch_icn>
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
          
          <form role="search">
            <input class="form-control" type="search" placeholder="search" aria-label="Search">
          </form>
          
          <li class="nav-itemlog">
            <a class="nav-link active" href="login.php">login</a>
          </li>
         
            <a class="navbar-brand" href="cart.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
            </a>
        </div>
        </ul>
      </div>
    </nav>
  </div>
</div>

  <div name="maindiv" class="container">
  	<div class="row  gy-5 gx-3 mt-1 mr-1 ml-1 mb-5">

  	<div class="col-6 col-md-3">
  		<div class="card" style="border-style:none;">
        <button>
        <a href="top1.html" class="img">
      		<img src="../public/img_site/outer/Outer_1.jpg" class="card-img-top" alt="..." >
      			<div class="card-body">
        </a>
              <h5 class="card-title">ウールジッパージャケット</h5>
              <div class="iro">
      				 <p class="card-text">¥121,000</p>
              </div>
      			</div>
        </button>
  		</div>
  	</div>

  	<div class="col-6 col-md-3">
  		<div class="card" style="border-style:none;">
        <button>
        <a href="top1.html" class="img">
      		<img src="../public/img_site/outer/Outer_2.jpg" class="card-img-top" alt="..." >
      			<div class="card-body">
        </a>
              <h5 class="card-title">ウールジッパージャケット</h5>
              <div class="iro">
      				 <p class="card-text">¥121,000</p>
              </div>
      			</div>
        </button>
  		</div>
  	</div>

  	<div class="col-6 col-md-3">
  		<div class="card" style="border-style:none;">
        <button>
        <a href="top1.html" class="img">
      		<img src="../public/img_site/outer/Outer_3.jpg" class="card-img-top" alt="..." >
      			<div class="card-body">
        </a>
              <h5 class="card-title">ウールジッパージャケット</h5>
              <div class="iro">
      				 <p class="card-text">¥121,000</p>
              </div>
      			</div>
        </button>
  		</div>
  	</div>

    <div class="col-6 col-md-3">
  		<div class="card" style="border-style:none;">
        <button>
        <a href="top1.html" class="img">
      		<img src="../public/img_site/outer/Outer_4.jpg" class="card-img-top" alt="..." >
      			<div class="card-body">
        </a>
              <h5 class="card-title">ウールジッパージャケット</h5>
              <div class="iro">
      				 <p class="card-text">¥121,000</p>
              </div>
      			</div>
        </button>
  		</div>
  	</div>
  	</div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </body>

</html>
