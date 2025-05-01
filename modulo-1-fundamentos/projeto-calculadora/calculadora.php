<?php
$resultado = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = $_POST['num1'] ?? 0;
    $num2 = $_POST['num2'] ?? 0;
    $operador = $_POST['operador'] ?? '+';

    switch ($operador) {
        case '+':
            $resultado = $num1 + $num2;
            break;
        case '-':
            $resultado = $num1 - $num2;
            break;
        case '*':
            $resultado = $num1 * $num2;
            break;
        case '/':
            $resultado = $num2 != 0 ? $num1 / $num2 : 'Divisão por zero!';
            break;
        default:
            $resultado = 'Operador inválido';
    }
}
?>

<form method="post">
    <input type="number" name="num1" required>
    <select name="operador">
        <option value="+">+</option>
        <option value="-">−</option>
        <option value="*">×</option>
        <option value="/">÷</option>
    </select>
    <input type="number" name="num2" required>
    <button type="submit">Calcular</button>
</form>

<?php if ($resultado !== ''): ?>
    <p>Resultado: <?= $resultado ?></p>
<?php endif; ?>
