<div class="container-fluid" style="background-color: #000000;">
    <div class="row">

        <nav class="navbar navbar-expand-md navbar-dark " aria-label="Fourth navbar example">
            <div class="container-fluid" style="background-color: #000000;">
                <a class="navbar-brand" href="../view/Index.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                    </svg>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample04">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../view/Outer.php">outer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../view/Tops.php">tops</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../view/Bottoms.php">bottoms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../view/Shoes.php">shoes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../view/Accesory_etc.php">accessory/etc</a>
                        </li>
                    </ul>

                    <form action="../view/Search.php" method="post">
                        <div class="d-flex">
                            <button class="btn" type="submit" id="button-addon" onclick="location.href='../view/Search.php'" name="keyword"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="#fff" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" /></svg></button>
                            <input name="keyword" type="text" class="form-control" placeholder="キーワードを入力">
                        </div>
                    </form>

                    <li class="nav-itemlog">
                        <a class="nav-link active" href="../view/Login.php">login</a>
                    </li>
                    <a class="navbar-brand" href="../view/Cart.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>