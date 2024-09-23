$(document).ready(function () {
    $('#fg').on('submit', function(e) {
        e.preventDefault(); // Impede o envio padrão do formulário
        var formData = $(this).serialize();
        $.ajax({
            type: "GET",
            url: "./actions/calculator.php",
            data: formData,
            success: function (response) {
                
            }, error: function (xhr, status, error) { 
                console.error('Erro ao enviar os dados: ' + error);
             }
        });
    });
   
});
