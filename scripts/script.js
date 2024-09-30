    // Funções para os botões
    function printPage() {
        window.print();
    }

    function sendWhatsAppMessage() {
        var message = "Olá!";
        var phoneNumber = "+5511999999999"; // Coloque o número do destinatário
        var url = "https://wa.me/" + phoneNumber + "?text=" + encodeURIComponent(message);
        window.open(url, '_blank');
    }