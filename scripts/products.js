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

                        document.getElementById('eb').style.display = 'none'; 
                        document.getElementById('fg').style.display = 'none'; 
                        document.getElementById('pe').style.display = 'none'; 

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
            });
        });
    });

