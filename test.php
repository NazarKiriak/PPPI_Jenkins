function generateRandomPassword($length = 10) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $password;
}

$randomPassword = generateRandomPassword(12);
echo "Випадковий пароль: $randomPassword";


function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// Приклад використання:
$emailToCheck = 'test@example.com';
if (isValidEmail($emailToCheck)) {
    echo "Email-адреса $emailToCheck валідний.";
} else {
    echo "Email-адреса $emailToCheck невалідний.";
}


function alwaysFalse() {
    return false;
}

// Приклад використання:
if (alwaysFalse()) {
    echo "Эта строка не должна появиться.";
}


function executeDatabaseQuery($db, $query) {
    try {
        $stmt = $db->prepare($query);
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        // Не оброблює помилку!
        return false;
    }
}

// Приклад використання:
$db = new PDO('mysql:host=localhost;dbname=mydb', 'username', 'password');
$sqlQuery = 'INSERT INTO users (username, email) VALUES ("testuser", "test@example.com")';
if (executeDatabaseQuery($db, $sqlQuery)) {
    echo "Запрос виконаний успішно.";
} else {
    echo "Помилка при використання запроса.";
}

