<?

function redirectInIndexHtml(): void {
    header("Location: index.php");
    exit();
}

if(isset($_POST['login'])) {
    echo 'Нажата была кнопка с именем Войти';
} elseif(isset($_POST['register'])) {
    echo 'Нажата была кнопка с именем Зарегистрироваться';
}
