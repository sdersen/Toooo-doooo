<?php require __DIR__ . '/app/autoload.php'; ?>
<?php require __DIR__ . '/views/header.php'; ?>

<article>
    <h1>Login</h1>

    <form action="app/users/register.php" method="post">
        <div class="mb-3">
            <label for="text">Name</label>
            <input class="form-control" type="text" name="name" id="name" placeholder="Namn Namnsson" required>
            <small class="form-text">Your full name.</small>
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="hello@email.com" required>
            <small class="form-text">Please provide the your email address.</small>
        </div>

        <div class="mb-3">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password" required>
            <small class="form-text">Please provide the your password (passphrase). Min X characters.</small>
        </div>

        <button type="submit" class="btn btn-primary">Register new user</button>
    </form>
</article>

<?php require __DIR__ . '/views/footer.php'; ?>
