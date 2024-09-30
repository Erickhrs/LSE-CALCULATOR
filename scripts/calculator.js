$(document).ready(function () {
    // Função de enviar o formulário
    function submitForm(formId) {
        $(formId).on('submit', function (e) {
            e.preventDefault(); // Impede o envio padrão do formulário
            var formData = $(this).serialize();
            $.ajax({
                type: "GET",
                url: "./actions/calculator.php",
                data: formData,
                success: function (response) {
                    // Exibe os dados no formato HTML desejado
                    $('#result_container').html(`
                        <div class="result-item">
                            <span class="label">Produto: </span> <span id="result_product">${response.product}</span>
                        </div>
                        <div class="result-item">
                            <span class="label">Preço: R$ ${response.price_per_label}</span> <span id="result_price"></span>
                        </div>
                        <div class="result-item">
                            <span class="label">Quantidade: ${response.quantity}</span> <span id="result_quantity"></span>
                        </div>
                        <div class="result-item">
                            <span class="label">Total: R$ ${response.total}</span> <span id="result_total"></span>
                        </div>
                        <div id="buttons_actions">
                            <button onclick="printPage()">Imprimir</button>
                            <button onclick="sendWhatsAppMessage()">Mandar msg Whatsapp</button>
                        </div>
                    `);
                }, 
                error: function (xhr, status, error) { 
                    console.error('Erro ao enviar os dados: ' + error);
                }
            });
        });
    }

    // Chama a função para cada formulário
    submitForm('#fg');
    submitForm('#eb');
    submitForm('#pe');


});
