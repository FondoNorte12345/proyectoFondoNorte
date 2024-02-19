<div class="px-3 py-2 text-bg-dark border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                <li>
                    <a href="index.php" class="nav-link text-white">
                        <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                            <use xlink:href="#home" />
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                            <use xlink:href="#grid" />
                        </svg>
                        Products
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white" onclick="openNav()">
                        <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                            <use xlink:href="#people-circle" />
                        </svg>
                        Mi cesta<span class="badge text-bg-light rounded-pill align-text-bottom"
                            id="cant_productos"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="px-3 py-2 border-bottom mb-3">
    <div class="container d-flex flex-wrap justify-content-center">
        <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
            <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>
        <div class="text-end">
            <?php
            if (isset($_SESSION['user'])) {
                echo '<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
                echo $_SESSION['user'];
                echo '</a>';
                echo '<ul class="dropdown-menu">';
                echo '<li><a class="dropdown-item" href="logout.php">Cerrar sesión</a></li>';
                echo '<li><a class="dropdown-item" href="micuenta.php">Mi cuenta</a></li>';
                echo '</ul>';
                echo '</li>';
            } else {
                echo '<a href="login.php"<button type="button" class="btn btn-light text-dark me-2">Login</button></a>';
            }

            ?>

        </div>
    </div>
</div>
<script>

    

    function openNav() {
        document.getElementById("sidebar").style.width = "380px";
    }

    function closeNav() {
        document.getElementById("sidebar").style.width = "0";
    }

</script>