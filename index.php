<?php require __DIR__ . '/app/autoload.php'; ?>
<!-- Tog bort autoload och la denna för att kunna använda tasks -->
<?php require __DIR__ . '/views/header.php'; ?>

<article>
    <h1><?php echo $config['title']; ?></h1>
    <p>This is the home page.</p>
    <?php
    if (isset($_SESSION['user'])) : ?>
        <p style="font-weight: bold;"><?php echo 'Welcome ' . htmlspecialchars($_SESSION['user']['name']) . '!'; ?></p>
        <button class="open-create-task-btn">+</button>
        <section class="create-task-container hidden">

            <form action="app/tasks/create.php" method="post">
                <div class="mb-3">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" name="title" id="title" placeholder="An amazing title" required>
                    <small class="form-text">Please enter a titl for your task.</small>
                </div>
                <div class="mb-3">
                    <label for="description">Description</label>
                    <input class="form-control" type="text" name="description" id="description">
                    <small class="form-text">Please provide the your description.</small>
                </div>
                <div class="mb-3">
                    <label for="date">Dedline</label>
                    <input type="date" name="date" id="date">
                    <small class="form-text">Add a deadline</small>
                </div>
                <button type="submit" class="btn btn-primary">Create task</button>
            </form>

        </section>
        <section>
            <?php foreach (getTasks($_SESSION['user']['id'], $database) as $task) : ?>
                <article class="task-container">
                    <h3 class="task-title"><?= $task['title']; ?></h3>
                    <p class="task-description"><?= $task['description']; ?></p>
                    <span>Deadline</span><span><?= $task['completed_at']; ?></span>

                    <button class="edit-task-btn">Edit</button>
                    <form action="app/tasks/done.php" method="POST">
                        <button class="done-task-btn" type="submit">Done</button>
                        <input type="hidden" id="done_id" name="done_id" value="<?= $task['id'] ?>">
                    </form>
                    <form action="app/tasks/addToList.php" method="POST">
                        <label for="list">Add to list</label>
                        <select name="list" id="list">
                            <?php
                            foreach (getLists($_SESSION['user']['id'], $database) as $list) : ?>
                                <option value="<?= $list['id']; ?>"><?= $list['title']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <input type="hidden" id="task_id" name="task_id" value="<?= $task['id'] ?>">
                        <button type="submit">add task</button>
                    </form>

                    <div class="edit-container hidden">
                        <form action="app/tasks/update.php" method="post">
                            <div class="mb-3">
                                <label for="title">Title</label>
                                <input class="form-control" type="text" name="title" id="title" placeholder="An amazing title">
                                <small class="form-text">Please enter a title for your task.</small>
                            </div>

                            <div class="mb-3">
                                <label for="description">Description</label>
                                <input class="form-control" type="text" name="description" id="description">
                                <small class="form-text">Please provide the your description.</small>
                            </div>

                            <div class="mb-3">
                                <label for="date">Dedline</label>
                                <input type="date" name="date" id="date">
                                <small class="form-text">Add a deadline</small>
                            </div>

                            <input type="hidden" id="id" name="id" value="<?= $task['id'] ?>">

                            <button type="submit" class="btn btn-primary">Update task</button>
                        </form>
                        <form action="app/tasks/delete.php" method="post">
                            <input type="hidden" id="delete_id" name="delete_id" value="<?= $task['id'] ?>">
                            <button type="submit" class="btn btn-primary">Delete</button>
                        </form>
                    </div>
                </article>
            <?php endforeach; ?>
        </section>
    <?php endif; ?>
</article>

<?php require __DIR__ . '/views/footer.php'; ?>
