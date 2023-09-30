<nav class="border-bottom mb-5">
    <div class="d-flex flex-wrap justify-content-center py-3 container">
        <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
            <a href="/" class="fs-4 text-decoration-none mb-0 text-white">Black market 👻</a>
        </div>

        <?php if (isset($_SESSION['username'])) { ?>
            <div class="text-end">
                <a href="" class="ms-2">Achats</a>
                <a href="" class="ms-2">Ventes</a>
                <a href="/marketplace/sell" class="ms-2">Vendre</a>
                <a href="/auth/deconnect" class="btn btn-outline-light ms-2">Déconnection</a>
            </div>

        <?php } else { ?>
            <div class="text-end">
                <a href="/auth/login" class="btn btn-outline-light me-2">Connexion</a>
                <a href="/auth/register" class="btn btn-warning">Création de Compte</a>
            </div>
        <?php } ?>
    </div>
</nav>