<?php
$etapas_estudo = [
    ["titulo" => "Fundamentos do PHP", "status" => "Concluído", "tipo" => "success", "url" => "basico/01variaveis.php"],
    ["titulo" => "Manipulação de Dados e SQL", "status" => "Em Andamento", "tipo" => "warning", "url" => "#"],
    ["titulo" => "Arquitetura MVC", "status" => "Pendente", "tipo" => "default", "url" => "#"],
    ["titulo" => "Segurança e Autenticação", "status" => "Urgente", "tipo" => "error", "url" => "#"],
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Estudos | Airbnb Style</title>
    <style>
        :root {
            --airbnb-rausch: #FF385C;
            --airbnb-dark: #222222;
            --airbnb-gray: #717171;
            --airbnb-border: #DDDDDD;
            --airbnb-bg: #FFFFFF;
            
            /* Cores de Status Airbnb Style */
            --bg-success: #e6f4ea;
            --text-success: #1e7e34;
            --bg-warning: #fef9e7;
            --text-warning: #856404;
            --bg-error: #fff8f6;
            --text-error: #c13515;
            --bg-default: #f7f7f7;
            --text-default: #222222;
        }

        body {
            font-family: Circular, -apple-system, BlinkMacSystemFont, Roboto, "Helvetica Neue", sans-serif;
            background-color: var(--airbnb-bg);
            color: var(--airbnb-dark);
            margin: 0;
            padding: 40px 24px;
            display: flex;
            justify-content: center;
        }

        .container {
            width: 100%;
            max-width: 600px;
        }

        header {
            margin-bottom: 32px;
            border-bottom: 1px solid var(--airbnb-border);
            padding-bottom: 16px;
        }

        h1 {
            font-size: 32px;
            font-weight: 600;
            margin: 0;
            color: var(--airbnb-dark);
            letter-spacing: -0.02em;
        }

        .study-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 16px;
        }

        .card {
            display: flex;
            flex-direction: column;
            padding: 16px;
            text-decoration: none;
            color: inherit;
            border: 1px solid var(--airbnb-border);
            border-radius: 12px;
            transition: box-shadow 0.2s ease;
        }

        .card:hover {
            box-shadow: 0 6px 16px rgba(0,0,0,0.12);
            border-color: transparent;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 8px;
        }

        .title {
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 4px;
        }

        .subtitle {
            font-size: 14px;
            color: var(--airbnb-gray);
            margin-bottom: 12px;
        }

        /* Labels no estilo Airbnb */
        .status-badge {
            display: inline-flex;
            align-items: center;
            font-size: 12px;
            font-weight: 600;
            padding: 4px 12px;
            border-radius: 4px; /* Menos arredondado que Apple */
            text-transform: none;
        }

        .success { background: var(--bg-success); color: var(--text-success); }
        .warning { background: var(--bg-warning); color: var(--text-warning); }
        .error   { background: var(--bg-error); color: var(--text-error); }
        .default { background: var(--bg-default); color: var(--text-default); border: 1px solid var(--airbnb-border); }

        .action-text {
            color: var(--airbnb-rausch);
            font-size: 14px;
            font-weight: 600;
            text-decoration: underline;
            margin-top: 8px;
        }
    </style>
</head>
<body>

<div class="container">
    <header>
        <h1>Cronograma de Estudo</h1>
    </header>
    
    <div class="study-grid">
        <?php foreach ($etapas_estudo as $etapa): ?>
            <a href="<?= $etapa['url'] ?>" class="card">
                <div class="card-header">
                    <div class="title"><?= $etapa['titulo'] ?></div>
                    <span class="status-badge <?= $etapa['tipo'] ?>">
                        <?= $etapa['status'] ?>
                    </span>
                </div>
                <div class="subtitle">Etapa técnica obrigatória</div>
                <div class="action-text">Ver detalhes</div>
            </a>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>