document.addEventListener("DOMContentLoaded", function() {
    const selector = document.getElementById('product'); // Corrigido para o select com id 'product'
    selector.addEventListener('input', function(){
        var id = selector.value; // Agora acessa o valor corretamente
        $(document).ready(function(){
                // Fazendo a requisição AJAX
                $.ajax({
                    url: './actions/get_product_info.php', 
                    type: 'GET',  
                    data: { id: id },
                    dataType: 'json',   
                    success: function(response) {
                        $('#title').html(response.product['product']); 
                        $('#bio').html(response.product['bio']); 
                        $('#img').css('background-image', 'url(' + response.product['img'] + ')');
                    },
                    error: function(xhr, status, error) {
                        console.error('Erro: ' + error);
                    }
                });
            });
        });
    });

