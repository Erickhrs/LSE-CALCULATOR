<?php
require('./requires/connection.php');

// Verificando a conexão
if ($mysqli->connect_error) {
    die("Conexão falhou: " . $mysqli->connect_error);
}

// Consultando os dados da tabela
$sql = "SELECT * FROM tabelametros";
$result = $mysqli->query($sql);

// Verificando se há resultados
if ($result->num_rows > 0) {
    // Início da tabela HTML
    echo '<table border="1" id="tabela-metros">';
    echo '<tr>
            <th>Comprimento</th>
            <th>Cores</th>
            <th>12mm</th>
            <th>15mm</th>
            <th>18mm</th>
            <th>22mm</th>
            <th>25mm</th>
            <th>30mm</th>
            <th>33mm</th>
            <th>36mm</th>
            <th>40mm</th>
            <th>45mm</th>
            <th>50mm</th>
            <th>60mm</th>
            <th>70-100mm</th>
          </tr>';
    
    // Saindo dados de cada linha
    while ($row = $result->fetch_assoc()) {
        echo '<tr data-id="' . $row['ID'] . '">'; // Supondo que a tabela tem uma coluna 'id'
        echo '<td>' . htmlspecialchars($row['comprimento']) . '</td>'; // Não editável
        echo '<td>' . htmlspecialchars($row['cores']) . '</td>'; // Não editável
        echo '<td class="editable">' . htmlspecialchars($row['12mm']) . '</td>';
        echo '<td class="editable">' . htmlspecialchars($row['15mm']) . '</td>';
        echo '<td class="editable">' . htmlspecialchars($row['18mm']) . '</td>';
        echo '<td class="editable">' . htmlspecialchars($row['22mm']) . '</td>';
        echo '<td class="editable">' . htmlspecialchars($row['25mm']) . '</td>';
        echo '<td class="editable">' . htmlspecialchars($row['30mm']) . '</td>';
        echo '<td class="editable">' . htmlspecialchars($row['33mm']) . '</td>';
        echo '<td class="editable">' . htmlspecialchars($row['36mm']) . '</td>';
        echo '<td class="editable">' . htmlspecialchars($row['40mm']) . '</td>';
        echo '<td class="editable">' . htmlspecialchars($row['45mm']) . '</td>';
        echo '<td class="editable">' . htmlspecialchars($row['50mm']) . '</td>';
        echo '<td class="editable">' . htmlspecialchars($row['60mm']) . '</td>';
        echo '<td class="editable">' . htmlspecialchars($row['70-100mm']) . '</td>';
        echo '</tr>';
    }
    
    // Fim da tabela HTML
    echo '</table>';
} else {
    echo "0 resultados encontrados";
}

// Fechando a conexão
$mysqli->close();
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('.editable').click(function() {
        var currentCell = $(this);
        var currentValue = currentCell.text();
        var newValue = prompt('Edite o valor:', currentValue);

        // Verifica se o novo valor é diferente do atual e não é vazio
        if (newValue !== null && newValue !== currentValue && newValue !== '') {
            var rowId = currentCell.closest('tr').data('id');

            // Enviando a nova informação via AJAX
            $.ajax({
                url: './actions/update.php', // Script PHP para atualizar os dados
                type: 'POST',
                data: {
                    id: rowId,
                    field: currentCell.index(), // Índice da coluna
                    value: newValue
                },
                success: function(response) {
                    alert('Atualização realizada com sucesso!');
                    currentCell.text(newValue); // Atualiza a célula com o novo valor
                },
                error: function(xhr, status, error) {
                    alert('Erro ao atualizar: ' + error);
                }
            });
        }
    });
});
</script>