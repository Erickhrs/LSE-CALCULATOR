<?php
require_once('./requires/protect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/new-layout.css">
    <link rel="stylesheet" href="./styles/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="./assets/logo.ico" type="image/x-icon">

    <title>Calculadora</title>
</head>

<body>


    <div class="floating-buttons">
        <a href="./home.php" class="floating-button" title="Voltar para a Home">
            <i class='bx bx-home'></i>
        </a>
        <a href="./edit_bd.php" class="floating-button" title="editar infos">
            <i class='bx bx-edit'></i>
        </a>
    </div>

    <div class="calculator-container">
        <div class="calculator-menu">
            <div class="logo">
                <img src="./assets/logo.png" alt="LSetiquetas">
            </div>
            <div class="calculator-title">
                <h2>Calculadora de Produtos</h2>
            </div>
            <div class="calculator-options">
                <select name="product" id="product">
                    <?php include_once('./includes/get_products.php');?>
                </select>
                <form class="forms" id="eb">
                    <div>

                        <select name="width" id="width_in">
                            <option value="" selected>Largura</option>
                            <option value="12">12mm</option>
                            <option value="15">15mm</option>
                            <option value="18">18mm</option>
                            <option value="22">22mm</option>
                            <option value="25">25mm</option>
                            <option value="30">30mm</option>
                            <option value="33">33mm</option>
                            <option value="36">36mm</option>
                            <option value="40">40mm</option>
                            <option value="45">45mm</option>
                            <option value="50">50mm</option>
                            <option value="60">60mm</option>
                            <option value="61">61mm</option>
                            <option value="62">62mm</option>
                            <option value="63">63mm</option>
                            <option value="64">64mm</option>
                            <option value="65">65mm</option>
                            <option value="66">66mm</option>
                            <option value="67">67mm</option>
                            <option value="68">68mm</option>
                            <option value="69">69mm</option>
                            <option value="70">70mm</option>
                            <option value="71">71mm</option>
                            <option value="72">72mm</option>
                            <option value="73">73mm</option>
                            <option value="74">74mm</option>
                            <option value="75">75mm</option>
                            <option value="76">76mm</option>
                            <option value="77">77mm</option>
                            <option value="78">78mm</option>
                            <option value="79">79mm</option>
                            <option value="80">80mm</option>
                            <option value="81">81mm</option>
                            <option value="82">82mm</option>
                            <option value="83">83mm</option>
                            <option value="84">84mm</option>
                            <option value="85">85mm</option>
                            <option value="86">86mm</option>
                            <option value="87">87mm</option>
                            <option value="88">88mm</option>
                            <option value="89">89mm</option>
                            <option value="90">90mm</option>
                            <option value="91">91mm</option>
                            <option value="92">92mm</option>
                            <option value="93">93mm</option>
                            <option value="94">94mm</option>
                            <option value="95">95mm</option>
                            <option value="96">96mm</option>
                            <option value="97">97mm</option>
                            <option value="98">98mm</option>
                            <option value="99">99mm</option>
                            <option value="100">100mm</option>

                        </select>
                    </div>
                    <div>
                        <input type="number" name="height" min="20" placeholder="Comprimento">
                    </div>
                    <div>

                        <select name="colors" id="colors_in">
                            <option value="" selected>Cores</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                    <div>

                        <select name="wire" id="wire_in">
                            <option value="" selected>Tipo de fio</option>
                            <option value="metalizado_pd">Lurex Metalizado Prata e Dourado</option>
                            <option value="metalizado">Lurex Metalizado Colors</option>
                            <option value="poliester">Poliester</option>
                            <option value="rayon">Rayon</option>
                            <option value="twolight">TwoLight</option>
                            <option value="trilobal">trilobal</option>
                        </select>
                    </div>
                    <div>

                        <select name="quality" id="quality_in">
                            <option value="" selected>Qualidade</option>
                            <option value="tafeta">Tefetá</option>
                            <option value="mad">Meia Alta Definição</option>
                            <option value="ad">Alta Definição</option>
                            <option value="ad2">AD2</option>
                            <option value="sad">SAD</option>
                        </select>
                    </div>
                    <div>
                        <select name="fold" id="fold_in">
                            <option value="" selected>Tipo de Dobra</option>
                            <option value="cortada">Só cortada</option>
                            <option value="clip">Clip</option>
                            <option value="mitra">Mitra</option>
                            <option value="meio">Ao meio</option>
                            <option value="laterais">Laterais</option>
                        </select>
                    </div>
                    <div>

                        <select name="iron-on" id="iron-on_in">
                            <option value="" selected>Termo colante</option>
                            <option value="no">Não</option>
                            <option value="yes">Sim</option>
                        </select>
                    </div>
                    <div>
                        <input type="number" name="units" placeholder="Unidades"" min=" 5000" value="5000">
                    </div>
                    <div>
                        <select name="virtual" id="virtual">
                            <option value="" selected>Internet</option>
                            <option value="no">Não</option>
                            <option value="yes">Sim</option>
                        </select>
                    </div>
                    <input name="product" value="eb" style="display: none;">
                    <button type="submit">Calcular</button>
                </form>
                <form class="forms" id="fg">
                    <div>
                        <select name="width" id="width_in">
                            <option value="" selected>Largura</option>
                            <option value="12">12mm</option>
                            <option value="15">15mm</option>
                            <option value="18">18mm</option>
                            <option value="22">22mm</option>
                            <option value="25">25mm</option>
                            <option value="30">30mm</option>
                            <option value="33">33mm</option>
                            <option value="36">36mm</option>
                            <option value="40">40mm</option>
                            <option value="45">45mm</option>
                            <option value="50">50mm</option>
                            <option value="60">60mm</option>
                            <option value="61">61mm</option>
                            <option value="62">62mm</option>
                            <option value="63">63mm</option>
                            <option value="64">64mm</option>
                            <option value="65">65mm</option>
                            <option value="66">66mm</option>
                            <option value="67">67mm</option>
                            <option value="68">68mm</option>
                            <option value="69">69mm</option>
                            <option value="70">70mm</option>
                            <option value="71">71mm</option>
                            <option value="72">72mm</option>
                            <option value="73">73mm</option>
                            <option value="74">74mm</option>
                            <option value="75">75mm</option>
                            <option value="76">76mm</option>
                            <option value="77">77mm</option>
                            <option value="78">78mm</option>
                            <option value="79">79mm</option>
                            <option value="80">80mm</option>
                            <option value="81">81mm</option>
                            <option value="82">82mm</option>
                            <option value="83">83mm</option>
                            <option value="84">84mm</option>
                            <option value="85">85mm</option>
                            <option value="86">86mm</option>
                            <option value="87">87mm</option>
                            <option value="88">88mm</option>
                            <option value="89">89mm</option>
                            <option value="90">90mm</option>
                            <option value="91">91mm</option>
                            <option value="92">92mm</option>
                            <option value="93">93mm</option>
                            <option value="94">94mm</option>
                            <option value="95">95mm</option>
                            <option value="96">96mm</option>
                            <option value="97">97mm</option>
                            <option value="98">98mm</option>
                            <option value="99">99mm</option>
                            <option value="100">100mm</option>

                        </select>
                    </div>
                    <div>
                        <label for="height">Comprimento(metros)</label>
                        <input type="number" name="height" min="300" max="5000">
                    </div>
                    <div>
                        <label for=" color">Cores</label>
                        <select name="colors" id="colors_in">
                            <option value="" selected>Cores</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                    <div>

                        <select name="wire" id="wire_in">
                            <option value="" selected>Tipo de fio</option>
                            <option value="metalizado_pd">Lurex Metalizado Prata e Dourado</option>
                            <option value="metalizado">Lurex Metalizado Colors</option>
                            <option value="poliester">Poliester</option>
                            <option value="rayon">Rayon</option>
                            <option value="twolight">TwoLight</option>
                            <option value="trilobal">trilobal</option>
                        </select>
                    </div>
                    <div>

                        <select name="quality" id="quality_in">
                            <option value="" selected>Qualidade</option>
                            <option value="tafeta">Tefetá</option>
                            <option value="mad">Meia Alta Definição</option>
                            <option value="ad">Alta Definição</option>
                            <option value="ad2">AD2</option>
                            <option value="sad">SAD</option>
                        </select>
                    </div>



                    <div>

                        <select name="virtual" id="virtual">
                            <option value="" selected>Internet</option>
                            <option value="no">Não</option>
                            <option value="yes">Sim</option>
                        </select>
                    </div>
                    <input type="hidden" name="units" min="5000" value="1">
                    <input name="product" value="fg" style="display: none;">
                    <button type="submit" value="ep">Calcular</button>
                </form>
                <form class="forms" id="pe">
                    <div>

                        <select name="width" id="width_in">
                            <option value="" selected>Largura</option>
                            <option value="12">12mm</option>
                            <option value="15">15mm</option>
                            <option value="18">18mm</option>
                            <option value="22">22mm</option>
                            <option value="25">25mm</option>
                            <option value="30">30mm</option>
                            <option value="33">33mm</option>
                            <option value="36">36mm</option>
                            <option value="40">40mm</option>
                            <option value="45">45mm</option>
                            <option value="50">50mm</option>
                            <option value="60">60mm</option>
                            <option value="61">61mm</option>
                            <option value="62">62mm</option>
                            <option value="63">63mm</option>
                            <option value="64">64mm</option>
                            <option value="65">65mm</option>
                            <option value="66">66mm</option>
                            <option value="67">67mm</option>
                            <option value="68">68mm</option>
                            <option value="69">69mm</option>
                            <option value="70">70mm</option>
                            <option value="71">71mm</option>
                            <option value="72">72mm</option>
                            <option value="73">73mm</option>
                            <option value="74">74mm</option>
                            <option value="75">75mm</option>
                            <option value="76">76mm</option>
                            <option value="77">77mm</option>
                            <option value="78">78mm</option>
                            <option value="79">79mm</option>
                            <option value="80">80mm</option>
                            <option value="81">81mm</option>
                            <option value="82">82mm</option>
                            <option value="83">83mm</option>
                            <option value="84">84mm</option>
                            <option value="85">85mm</option>
                            <option value="86">86mm</option>
                            <option value="87">87mm</option>
                            <option value="88">88mm</option>
                            <option value="89">89mm</option>
                            <option value="90">90mm</option>
                            <option value="91">91mm</option>
                            <option value="92">92mm</option>
                            <option value="93">93mm</option>
                            <option value="94">94mm</option>
                            <option value="95">95mm</option>
                            <option value="96">96mm</option>
                            <option value="97">97mm</option>
                            <option value="98">98mm</option>
                            <option value="99">99mm</option>
                            <option value="100">100mm</option>

                        </select>
                    </div>
                    <div>

                        <input type="number" name="height" min="20" placeholder="Comprimento">
                    </div>
                    <div>

                        <select name="colors" id="colors_in">
                            <option value="" selected>Cores</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                    <div>

                        <select name="wire" id="wire_in">
                            <option value="" selected>Tipo de fio</option>
                            <option value="metalizado_pd">Lurex Metalizado Prata e Dourado</option>
                            <option value="metalizado">Lurex Metalizado Colors</option>
                            <option value="poliester">Poliester</option>
                            <option value="rayon">Rayon</option>
                            <option value="twolight">TwoLight</option>
                            <option value="trilobal">trilobal</option>
                        </select>
                    </div>
                    <div>

                        <select name="quality" id="quality_in">
                            <option value="" selected>Qualidade</option>
                            <option value="tafeta">Tefetá</option>
                            <option value="mad">Meia Alta Definição</option>
                            <option value="ad">Alta Definição</option>
                            <option value="ad2">AD2</option>
                            <option value="sad">SAD</option>
                        </select>
                    </div>
                    <div>
                        <label for="ironed">Engomada</label>
                        <select name="ironed" id="ironed_in">
                            <option value="no">Não</option>
                            <option value="yes">Sim</option>
                        </select>
                    </div>
                    <div>

                        <select name="iron-on" id="iron-on_in">
                            <option value="" selected>Termo colante</option>
                            <option value="no">Não</option>
                            <option value="yes">Sim</option>
                        </select>
                    </div>
                    <div>
                        <label for="adhesive">Fita Adesiva</label>
                        <select name="adhesive" id="adhesive">
                            <option value="no">Não</option>
                            <option value="yes">Sim</option>
                        </select>
                    </div>
                    <div>

                        <input type="number" name="units" placeholder="Unidades"" min=" 100" value="100">
                    </div>
                    <div>

                        <select name="virtual" id="virtual">
                            <option value="" selected>Internet</option>
                            <option value="no">Não</option>
                            <option value="yes">Sim</option>
                        </select>
                    </div>
                    <input name="product" value="pe" style="display: none;">
                    <button type="submit">Calcular</button>
                </form>
            </div>
            <div class="actions">
                <button class="reset">Resetar</button>
                <button class="calculate">Calcular</button>
            </div>
        </div>

        <div class="calculator-preview">
            <h2>Resumo Produto</h2>
            <table class="preview-table">
                <tr>
                    <td>Produto</td>
                    <td>Etiqueta Bordada</td>
                </tr>
                <tr>
                    <td>Largura</td>
                    <td>40 mm</td>
                </tr>
                <tr>
                    <td>Comprimento</td>
                    <td>450 mm</td>
                </tr>
                <tr>
                    <td>Cores</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>Tipo de Fio</td>
                    <td>Poliéster</td>
                </tr>
                <tr>
                    <td>Resolução</td>
                    <td>Alta Definição</td>
                </tr>
                <tr>
                    <td>Termocolante</td>
                    <td>Sim</td>
                </tr>
                <tr>
                    <td>Engomado</td>
                    <td>Sim</td>
                </tr>
                <tr>
                    <td>Fita Adesiva</td>
                    <td>Sim</td>
                </tr>
                <tr>
                    <td>Fundo Preenchido</td>
                    <td>Sim</td>
                </tr>
                <tr>
                    <td>Corte a Laser</td>
                    <td>Sim</td>
                </tr>
                <tr>
                    <td>Quantidade</td>
                    <td>5.000</td>
                </tr>
                <tr>
                    <td>Internet</td>
                    <td>Sim</td>
                </tr>
                <tr>
                    <td>Valor Uni.</td>
                    <td>R$ 0,0043</td>
                </tr>
                <tr>
                    <td>Valor (M.I.)</td>
                    <td>R$ 43,00</td>
                </tr>
                <tr>
                    <td>Total Pedido</td>
                    <td><strong>R$ 129,00</strong></td>
                </tr>
            </table>
            <div class="preview-actions">
                <button class="whatsapp">WhatsApp</button>
                <button class="print">Imprimir</button>
                <button class="save-pdf">Salvar PDF</button>
            </div>
        </div>
    </div>


</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="./scripts/script.js"></script>
<script src="./scripts/products.js"></script>
<script src="./scripts/calculator.js"></script>

</html>