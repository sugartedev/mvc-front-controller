<form action="../../public/index.php" method="get">
    <label for="nombre">Nombre:</label>

    <input
        type="text"
        id="nombre"
        name="nombre"
        required
    >

    <button type="submit" name="action" value="saludar">
        Saludar
    </button>

    <button type="submit" name="action" value="despedirse">
        Despedirse
    </button>
</form>