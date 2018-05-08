<html>

<head>

    <title> Sistema de cadastro</title>

</head>

<body>

<form action="/pagina-processa-dados-do-form" method="post">

    <div>
        <label for="sexo">Sexo:</label>
        <select>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
        </select>
    </div>

    <div>
        <label for="name">Nome:</label>
        <input type="text" id="name" />
    </div>

    <div>
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" id="sobrenome" />
    </div>

    <div>
        <label for="mail">E-mail:</label>
        <input type="email" id="mail" />
    </div>

    <div>
        <label for="telefone">Telefone:</label>
        <input type="number" id="telefone" />
    </div>

    <div>
        <label for="departamento">Departamento:</label>
        <select>
            <option value="vendas">Vendas</option>
            <option value="logistica">Logistica</option>
            <option value="rh">RH</option>
            <option value="portaria">Portaria</option>
        </select>
    </div>

    <div class="button">
        <button type="submit">Cadastrar</button>
    </div>
</form>
</body>
</html>