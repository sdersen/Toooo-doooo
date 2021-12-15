<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';

if (isset($_POST['title'])) {
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $doneBy = $_POST['date'];
    $id = $_SESSION['user']['id'];
    $createdDate = date("Y-m-d");

    // var_dump($id);
    //Oklart om denna ska deklareras här?

    // $errors = [];

    $statement = $database->prepare('INSERT INTO tasks (title, description, created_at, completed_by, user_id) VALUES (:title, :description, :created_at, :completed_by, :user_id);');
    $statement->bindParam(':title', $title, PDO::PARAM_STR);
    $statement->bindParam(':description', $description, PDO::PARAM_STR);
    $statement->bindParam(':completed_by', $doneBy, PDO::PARAM_STR);
    $statement->bindParam(':created_at', $createdDate, PDO::PARAM_STR);
    $statement->bindParam(':user_id', $id, PDO::PARAM_INT);

    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    // Här behöver jag komma på hur man går direkt till inloggat läga och skapa session
    // if ($user['email'] === $email && password_verify($hashedPassword, $user['password'])) {

    //     $_SESSION['user'] = [
    //         'id' => $user['id'],
    //         'name' => $user['name'],
    //         'email' => $user['email']
    //     ];
    //     redirect('/index.php');
    // } else {
    //     redirect('/login.php');
    // }
    redirect('/');
};
