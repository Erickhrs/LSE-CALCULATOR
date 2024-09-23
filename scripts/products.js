document.addEventListener("DOMContentLoaded", function() {
    const selector = document.getElementById('product'); // Seleciona o campo select com o id 'product'

    // Função para fazer a requisição e atualizar a interface
    function fetchProductInfo() {
        var id = selector.value; // Pega o valor selecionado no select
        $.ajax({
            url: './actions/get_product_info.php', 
            type: 'GET',  
            data: { id: id },
            dataType: 'json',   
            success: function(response) {
                // Atualiza os elementos da página com as informações do produto
                $('#title').html(response.product['product']); 
                $('#bio').html(response.product['bio']); 
                $('#img').css('background-image', 'url(' + response.product['img'] + ')');

                // Esconde as seções por padrão
                document.getElementById('eb').style.display = 'none'; 
                document.getElementById('fg').style.display = 'none'; 
                document.getElementById('pe').style.display = 'none'; 

                // Mostra a seção correta com base no produto selecionado
                if (response.product['product'] == 'Etiqueta Bordada'){
                    document.getElementById('eb').style.display = 'grid'; 
                } else if (response.product['product'] == 'Fita/Galão'){
                    document.getElementById('fg').style.display = 'grid'; 
                } else if (response.product['product'] == 'Patch/Emblema') {
                    document.getElementById('pe').style.display = 'grid'; 
                }
            },
            error: function(xhr, status, error) {
                console.error('Erro: ' + error);
            }
        });
    }

    // Executa a função ao carregar a página
    fetchProductInfo();

    // Adiciona o evento de mudança ao campo select
    selector.addEventListener('input', fetchProductInfo);
});
