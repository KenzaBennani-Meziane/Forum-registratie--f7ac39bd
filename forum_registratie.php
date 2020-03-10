<!doctype html>
    <form action="registratie_handler.php" method="post">
        <input type="text" name="username">
        <label for="username" id="username">Username</label>
            <br>
        <input type="email" name="email">
        <label for="email" id="email">Email</label>
            <br>
        <input type="number" name="age" min="7" max="70">
        <label for="age" id="age">Age</label>
            <br>
        <input type="submit" value="Submit" name="send">
    </form>
</html>