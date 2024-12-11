<?php
    // страница register
?>

<form class="border rounded p-4 w-50 mx-auto" method="POST" action="./handlers/handle_register.php">
    <h3 class="text-center">Регистрация</h3>
    <div class="mb-3">
        <label for="names" class="form-label">Имена</label>
        <input type="names" class="form-control" id="names" name="names" value="<?php echo $flash['data']['names'] ?? '' ?>">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Имейл</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $flash['data']['email'] ?? '' ?>">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Парола</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="mb-3">
        <label for="repeat_password" class="form-label">Повтори парола</label>
        <input type="password" class="form-control" id="repeat_password" name="repeat_password">
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="is_admin" id="user" value="1" checked>
            <label class="form-check-label" for="user">Потребител</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="is_admin" id="admin" value="2">
            <label class="form-check-label" for="admin">Администратор</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mx-auto">Регистрирай се</button>
</form>