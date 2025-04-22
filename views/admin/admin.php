<?php
session_start();
if (!isset($_SESSION['logado'])) {
    // header('Location: login.php');
    // exit();
}

include('../../includes/conexao.php');

// Filtros com sanitização básica
$filtroTipo = isset($_GET['tipo_site']) ? trim($_GET['tipo_site']) : '';
$dataInicio = isset($_GET['data_inicio']) ? trim($_GET['data_inicio']) : '';
$dataFim = isset($_GET['data_fim']) ? trim($_GET['data_fim']) : '';

// Tipos disponíveis
$tiposDisponiveis = [];
$resTipos = $conexao->query("SELECT DISTINCT tipo_site FROM contatos");
while ($row = $resTipos->fetch_assoc()) {
    $tiposDisponiveis[] = $row['tipo_site'];
}

// Contagem por tipo
$contagemPorTipo = [];
$resContagem = $conexao->query("SELECT tipo_site, COUNT(*) as total FROM contatos GROUP BY tipo_site");
while ($row = $resContagem->fetch_assoc()) {
    $contagemPorTipo[$row['tipo_site']] = $row['total'];
}
$totalContatos = array_sum($contagemPorTipo);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard de Contatos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="style_admin.css">        
</head>
<body>

<!-- SIDEBAR -->
<nav class="navbar navbar-dark bg-dark d-md-none fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <span class="navbar-brand ms-2">Painel Admin</span>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <!-- Menu lateral -->
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
      <div class="position-sticky pt-3">
        <h4 class="text-center text-white">Painel Admin</h4>
        <ul class="nav flex-column">
          <li class="nav-item"><a class="nav-link active" href="#"><i class="bi bi-house-door me-2"></i> Início</a></li>
          <li class="nav-item"><a class="nav-link" href="../contatos/contatos.php"><i class="bi bi-people me-2"></i> Contatos</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-box-arrow-right me-2"></i> Sair</a></li>
        </ul>
      </div>
    </nav>

    <!-- Conteúdo -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mt-3">Dashboard de Contatos</h2>
        <button class="btn btn-outline-secondary btn-sm" onclick="toggleTheme()">
          <i class="bi bi-moon-stars-fill"></i> Alternar Tema
        </button>
      </div>

      <!-- Filtros -->
      <div class="card mb-4 animate__animated animate__fadeIn">
        <div class="card-body">
          <form class="row g-3" method="GET">
            <div class="col-md-4">
              <label class="form-label">Tipo de Site</label>
              <select name="tipo_site" class="form-select">
                <option value="">Todos</option>
                <?php foreach ($tiposDisponiveis as $tipo): ?>
                  <option value="<?= htmlspecialchars($tipo) ?>" <?= $filtroTipo == $tipo ? 'selected' : '' ?>>
                    <?= htmlspecialchars($tipo) ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-md-3">
              <label class="form-label">Data Início</label>
              <input type="date" name="data_inicio" class="form-control" value="<?= htmlspecialchars($dataInicio) ?>">
            </div>
            <div class="col-md-3">
              <label class="form-label">Data Fim</label>
              <input type="date" name="data_fim" class="form-control" value="<?= htmlspecialchars($dataFim) ?>">
            </div>
            <div class="col-md-2 d-flex align-items-end">
              <button type="submit" class="btn btn-primary w-100">Filtrar</button>
            </div>
          </form>
        </div>
      </div>

      <!-- Cards -->
      <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
        <div class="col">
          <div class="card text-bg-primary animate__animated animate__fadeInUp">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-person-lines-fill me-2"></i>Total de Contatos</h5>
              <span class="badge bg-light text-primary fs-4"><?= $totalContatos ?></span>
            </div>
          </div>
        </div>
        <?php foreach ($contagemPorTipo as $tipo => $qtd): ?>
          <div class="col">
            <div class="card text-bg-success animate__animated animate__fadeInUp">
              <div class="card-body">
                <h5 class="card-title"><i class="bi bi-ui-checks me-2"></i><?= htmlspecialchars($tipo) ?></h5>
                <span class="badge bg-light text-success fs-4"><?= $qtd ?></span>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Gráficos -->
      <div class="row">
        <div class="col-lg-6 mb-4">
          <div class="card animate__animated animate__fadeIn">
            <div class="card-body">
              <h5 class="card-title">Distribuição de Contatos</h5>
              <div class="chart-container">
                <canvas id="graficoBarra"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-4">
          <div class="card animate__animated animate__fadeIn">
            <div class="card-body">
              <h5 class="card-title">Distribuição Percentual</h5>
              <div class="chart-container">
                <canvas id="graficoPizza"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Tabela -->
      <div class="card animate__animated animate__fadeIn">
        <div class="card-body">
          <h5 class="card-title">Lista de Contatos</h5>
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>E-mail</th>
                  <th>WhatsApp</th>
                  <th>Tipo de Site</th>
                  <th>Data</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $where = [];
                if ($filtroTipo) $where[] = "tipo_site = '" . $conexao->real_escape_string($filtroTipo) . "'";
                if ($dataInicio) $where[] = "DATE(data_envio) >= '" . $conexao->real_escape_string($dataInicio) . "'";
                if ($dataFim) $where[] = "DATE(data_envio) <= '" . $conexao->real_escape_string($dataFim) . "'";

                $sql = "SELECT * FROM contatos";
                if (!empty($where)) $sql .= " WHERE " . implode(" AND ", $where);
                $sql .= " ORDER BY data_envio DESC LIMIT 50";

                $resultado = $conexao->query($sql);
                if ($resultado->num_rows > 0) {
                  while ($linha = $resultado->fetch_assoc()) {
                    echo "<tr>
                            <td>" . htmlspecialchars($linha['nome']) . "</td>
                            <td>" . htmlspecialchars($linha['email']) . "</td>
                            <td>" . htmlspecialchars($linha['whatsapp']) . "</td>
                            <td>" . htmlspecialchars($linha['tipo_site']) . "</td>
                            <td>" . date('d/m/Y H:i', strtotime($linha['data_envio'])) . "</td>
                          </tr>";
                  }
                } else {
                  echo "<tr><td colspan='5' class='text-center'>Nenhum contato encontrado.</td></tr>";
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Tema
  function toggleTheme() {
    const currentTheme = document.documentElement.getAttribute('data-theme');
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
    document.documentElement.setAttribute('data-theme', newTheme);
    localStorage.setItem('theme', newTheme);
  }

  // Carregar tema salvo
  const savedTheme = localStorage.getItem('theme') || 'light';
  document.documentElement.setAttribute('data-theme', savedTheme);

  // Gráfico de Barras
  const ctxBarra = document.getElementById('graficoBarra').getContext('2d');
  new Chart(ctxBarra, {
    type: 'bar',
    data: {
      labels: <?= json_encode(array_keys($contagemPorTipo)) ?>,
      datasets: [{
        label: 'Contatos por Tipo',
        data: <?= json_encode(array_values($contagemPorTipo)) ?>,
        backgroundColor: '#0d6efd',
        borderColor: '#0d6efd',
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: { display: false },
        title: { display: true, text: 'Contatos por Tipo de Site' }
      },
      scales: {
        y: { beginAtZero: true }
      }
    }
  });

  // Gráfico de Pizza
  const ctxPizza = document.getElementById('graficoPizza').getContext('2d');
  new Chart(ctxPizza, {
    type: 'pie',
    data: {
      labels: <?= json_encode(array_keys($contagemPorTipo)) ?>,
      datasets: [{
        data: <?= json_encode(array_values($contagemPorTipo)) ?>,
        backgroundColor: ['#0d6efd', '#198754', '#dc3545', '#ffc107', '#6f42c1'],
        borderColor: '#ffffff',
        borderWidth: 2
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: { position: 'bottom' },
        title: { display: true, text: 'Distribuição Percentual' }
      }
    }
  });
</script>
</body>
</html>
