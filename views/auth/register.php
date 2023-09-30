<?php $title = "Register"; ?>
<?php require __DIR__ . '/../templates/header.php'; ?>

<body>
    <div class="container">
        <h1>Register</h1>
        <?php if ($vm->error) { ?>
            <p class="text-warning">
                <?php echo ($vm->error) ?>
            </p>
        <?php } ?>
        <form action="" method='post'>
            <input type="hidden" name="csrf_token" value="<?php echo ($vm->csrf) ?>">
            <div>
                <label for="username">Nom d'utilisateur</label>
                <input class="form-control" type="text" name="username" id="username"
                    value="<?php echo (\Utils\Security::xss_safe($vm->username)); ?>" required>
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input class="form-control" type="password" name="password" id="password" required>
            </div>
            <div>
                <label for="password_confirmation">Confirmation de mot de passe</label>
                <input class="form-control" type="password" name="password_confirmation" id="password_confirmation"
                    required>
            </div>
            <button class="btn btn-primary">Créer</button>
        </form>
    </div>
</body>

<?php require __DIR__ . '/../templates/footer.php'; ?>
