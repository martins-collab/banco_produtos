<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>

    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>

    <form action="../servidor/validate.php" method="POST" name="form_uniformes" id="form_uniformes">
        <h1>Cadastro - Uniformes</h1>
        
        <input type="text" name="nome_comprador" placeholder="Nome do comprador">
        <input type="text" name="nome_uniforme" placeholder="Nome no uniforme">
        <input type="text" name="cargo" placeholder="Cargo do uniforme">

        <legend>Data da compra</legend>
        <input type="date" name="data">
        
        <legend>Camiseta normal</legend>
        <select name="tamanho_uniforme" id="tamanho_uniforme">
            <option value="0">Escolher</option>
            <option value="normal - P">Normal P</option>
            <option value="normal - M">Normal M</option>
            <option value="normal - G">Normal G</option>
            <option value="normal - GG">Normal GG</option>
            <option value="normal - ExG">Normal ExG</option>

            <option value="babylook - P">babylook P</option>
            <option value="babylook - M">babylook M</option>
            <option value="babylook - G">babylook G</option>
            <option value="babylook - GG">babylook GG</option>
            <option value="babylook - ExG">babylook ExG</option>
        </select>

        <input type="submit" value="Cadastrar" id="btn" name="btn">

    </form>
    
</body>
</html>