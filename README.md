<img src="https://media1.giphy.com/media/py2UYwTIX5SXm/giphy.gif?cid=ecf05e476vxqzc7bh90gvb2bjstuncdilztpwlmj7fbnxmjh&rid=giphy.gif&ct=g" width="100%">

# Task Force

A simpel to-do app as a school project. You can clone this repo or visit https://task-force.sofiadersen.com/ 
For Wunderlist+ visit and clone: https://github.com/sdersen/task-force/pull/4

The app allows the user to:

-   Create an account.
-   Login/Logout.
-   Edit account email and password.
-   Upload a profile image.
-   Create new tasks with title, description and deadline date. Edit, delete and mark them as done.
-   Mark tasks as uncompleted.
-   Create new task lists with title.
-   Edit and delete my task lists.
-   Delete my task lists along with all tasks.
-   Add a task to a list.
-   View all tasks.
-   View all tasks within a list.
-   View all tasks which should be completed today.

-   **Extra:**
-   I'm able to remove a task from a list.
-   I'm able to delete a user along with all their lists and tasks.


# Wunderlist+

# Features added from Wunderlist+:

-   Features added by [Chris M.](https://github.com/chrs-m)
    ```
    - Mark all tasks complete with one click.
    - Searching for tasks.
    - Add checklists (subtasks) to tasks.
    ```

# Installation

To install this project follow this list:

-   Clone the project

```
git clone https://github.com/sdersen/task-force
```

-   Start php server `php -S localhost:8000`

-   Open up you browser and paste in this link:
    `http://localhost:8000/`

# Code Review

Code review written by [Linnéa Eriksson](https://github.com/LinneaEriksson).

1. `styles.css:51` - The footer could be in it’s own css file.
2. `register.php:28` - On this line you could add minlength="16" so the user is forced to write 16 chars. The error message in php (that you have) is really good to keep if someone where to edit in the inspector. That way you are safe both backend and frontend! :)
3. `image.php:12` - The image file could be named after something that is unique for your user, for example the user id. That way there is no way they will have the same name as other users plus the image get replaced when you upload a new one.
4. If you click “list done” the list disappears on the site but is still in the database. It would be nice if the user could see completed lists! (It’s nice that all the tasks gets completed this way)
5. When you delete a user the profilepicture could be deleted.
6. You could add your uploads map or the files that users uploads as profile pictures to .gitignore.
7. If you try to create a user with the same email twice I get a fatal error on the site. (Did this by accident, wasn’t trying to set you up haha)
8. You could add a feature when you click the icon. Right now you get a pointer cursor when you hover but nothing happens if you click.
9. I really like the comments you’ve made on your functions. Even if you have made good function-names it gets a better over all view of the functions.
10. You have a really good communication with the user. It feels like you’ve covered most of the events with messages, good job!

# Testers

Tested by the following people:

1. Emma Hansson
2. Amanda Hultén
