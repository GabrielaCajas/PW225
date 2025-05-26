<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Tarefas</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background-color: #f3e5f5; /* Tom de lilás mais claro para o fundo */
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            padding-top: 60px; /* Espaço para a barra superior (que não vamos detalhar agora) */
            box-sizing: border-box;
        }

        .container {
            background-color: #e1bee7; /* Tom de lilás para o container do formulário */
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            padding: 30px;
            width: 450px; /* Ajuste da largura */
        }

        .nova-categoria {
            background-color: #ce93d8; /* Tom de lilás mais claro para o título */
            color: #4a148c;
            padding: 15px 20px;
            border-radius: 8px;
            font-weight: bold;
            font-size: 1.1em;
            margin-bottom: 25px;
            text-align: left;
        }

        .form-group {
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
        }

        label {
            color: #333;
            font-weight: bold;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="date"] {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 1em;
            box-sizing: border-box;
            width: 100%;
            margin-bottom: 5px; /* Espaço entre o input e o indicador */
        }

        .input-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .input-label {
            width: auto; /* Deixa o label ocupar o espaço necessário */
            margin-right: 15px;
        }

        .input-field {
            flex-grow: 1;
        }

        .required, .optional {
            font-size: 0.9em;
            font-weight: bold;
            margin-left: 10px;
        }

        .required {
            color: #d32f2f;
        }

        .optional {
            color: #757575;
        }

        .add-task-button {
            background-color: #9c27b0; /* Tom de roxo para o botão */
            color: white;
            border: none;
            border-radius: 8px;
            padding: 14px 24px;
            font-size: 1.1em;
            cursor: pointer;
            width: 100%;
            text-align: center;
            font-weight: bold;
            margin-top: 30px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .add-task-button:hover {
            background-color: #7b1fa2;
        }

        .plus-icon {
            display: block;
            margin-top: 20px;
            text-align: center;
            font-size: 2.5em;
            color: #9c27b0;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #c2a8ef;">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center me-4">
            <div class="logo"><img class="logo" src="Logo-Photoroom.png" style="width:  80px; height: 80px;"></div>
        </div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link text-dark fw-medium" href="#">Eventos</a></li>
            <li class="nav-item"><a class="nav-link text-dark fw-medium" href="#">Check-in</a></li>
            <li class="nav-item"><a class="nav-link text-dark fw-medium" href="#">Tarefas diárias</a></li>
            <li class="nav-item"><a class="nav-link text-dark fw-medium" href="#">Criar categoria</a></li>
        </ul>
        <div class="d-flex align-items-center gap-3">
            <i class="bi bi-person-circle fs-4"></i>
            <input type="text" class="form-control form-control-sm" placeholder="Pesquisar" style="max-width: 200px; border-radius: 5px;">
            <i class="bi bi-list fs-4"></i>
        </div>
    </div>
</nav>
    <div class="container">
        <div class="nova-categoria">Nova categoria</div>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Ex: Comprar pão">
            <div class="input-row">
                <div></div> <span class="required">Obrigatório</span>
            </div>
        </div>
        <div class="form-group">
            <label for="data_inicio">Data de início:</label>
            <input type="date" id="data_inicio" name="data_inicio">
            <div class="input-row">
                <div></div>
                <span class="required">Obrigatório</span>
            </div>
        </div>
        <div class="form-group">
            <label for="data_fim">Data de fim:</label>
            <input type="date" id="data_fim" name="data_fim">
            <div class="input-row">
                <div></div>
                <span class="optional">Opcional</span>
            </div>
        </div>
        <div class="form-group">
            <label for="tempo_diario">Tempo diário:</label>
            <input type="text" id="tempo_diario" name="tempo_diario" placeholder="Ex: 30 minutos">
            <div class="input-row">
                <div></div>
                <span class="required">Obrigatório</span>
            </div>
        </div>
        <button type="button" class="add-task-button">Adicionar tarefa diária</button>
        <div class="plus-icon">+</div>
    </div>
</body>
</html>