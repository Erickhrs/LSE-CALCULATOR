<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Calculadora</title>
</head>

<body>
    <nav>
        <img src="./assets/logo.png" alt="logo">
    </nav>
    <main id="root">
        <div id="img">
            <div id="product_info">
                <h3 id="title">Etiqueta Bordada</h3>
                <span id="bio">As etiquetas bordadas da LS Etiquetas são confeccionadas para aplicação no vestuário,
                    como
                    roupas,
                    roupas íntimas e moda praia, cama, mesa e banho. Também são usadas em tapetes, bolsas, malas, enfim,
                    na confecção em geral.

                    Indispensáveis para a identidade do produto nossas etiquetas bordadas podem ser produzidas em
                    diferentes tipos de fio, com até oito cores, variados padrões de dobra e corte, em alta definição,
                    tafetá, metalizadas, termocolantes e cortadas a laser.

                    Além de etiquetas personalizadas com marcas, logotipos, coleções e outros, a LS Etiquetas
                    confecciona etiquetas com instruções de lavagem, composição de material, tamanhos e outros padrões
                    técnicos exigidos pelo mercado.</span>
            </div>
        </div>
        <div id="calculator">
            <div class="input_container" id="product_in">
                <select name="product" id="product">
                    <?php include_once('./includes/get_products.php');?>
                </select>
            </div>

            <form class="forms" id="eb">
                <div>
                    <label for="width">Largura</label>
                    <select name="width" id="width_in">
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
                    <label for="height">Comprimento(mm)</label>
                    <input type="number" name="height" min="20">
                </div>
                <div>
                    <label for="color">Cores</label>
                    <select name="colors" id="colors_in">
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
                    <label for="wire">Tipo de Fio</label>
                    <select name="wire" id="wire_in">
                        <option value="metalizado_pd">Lurex Metalizado Prata e Dourado</option>
                        <option value="metalizado">Lurex Metalizado Colors</option>
                        <option value="poliester">Poliester</option>
                        <option value="rayon">Rayon</option>
                        <option value="twolight">TwoLight</option>
                        <option value="trilobal">trilobal</option>
                    </select>
                </div>
                <div>
                    <label for="quality">Qualidade</label>
                    <select name="quality" id="quality_in">
                        <option value="tafeta">Tefetá</option>
                        <option value="mad">Meia Alta Definição</option>
                        <option value="ad">Alta Definição</option>
                        <option value="ad2">AD2</option>
                        <option value="sad">SAD</option>
                    </select>
                </div>
                <div>
                    <label for="fold">Tipo de dobra</label>
                    <select name="fold" id="fold_in">
                        <option value="cortada">Só cortada</option>
                        <option value="clip">Clip</option>
                        <option value="mitra">Mitra</option>
                        <option value="meio">Ao meio</option>
                        <option value="laterais">Laterais</option>
                    </select>
                </div>
                <div>
                    <label for="iron-on">Termo colante</label>
                    <select name="iron-on" id="iron-on_in">
                        <option value="no">Não</option>
                        <option value="yes">Sim</option>
                    </select>
                </div>
                <div>
                    <label for="units">Unidades</label>
                    <input type="number" name="units" min="5000" value="5000">
                </div>
                <div>
                    <label for="virtual">Loja virtual</label>
                    <select name="virtual" id="virtual">
                        <option value="no">Não</option>
                        <option value="yes">Sim</option>
                    </select>
                </div>
                <input name="product" value="eb" style="display: none;">
                <button type="submit">Calcular</button>
            </form>
            <form class="forms" id="fg">
                <div>
                    <label for="width">Largura</label>
                    <select name="width" id="width_in">
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
                    <label for="wire">Tipo de Fio</label>
                    <select name="wire" id="wire_in">
                        <option value="metalizado_pd">Lurex Metalizado Prata e Dourado</option>
                        <option value="metalizado">Lurex Metalizado Colors</option>
                        <option value="poliester">Poliester</option>
                        <option value="rayon">Rayon</option>
                        <option value="twolight">TwoLight</option>
                        <option value="trilobal">trilobal</option>
                    </select>
                </div>
                <div>
                    <label for="quality">Qualidade</label>
                    <select name="quality" id="quality_in">
                        <option value="tafeta">Tefetá</option>
                        <option value="mad">Meia Alta Definição</option>
                        <option value="ad">Alta Definição</option>
                        <option value="ad2">AD2</option>
                        <option value="sad">SAD</option>
                    </select>
                </div>



                <div>
                    <label for="virtual">Loja virtual</label>
                    <select name="virtual" id="virtual">
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
                    <label for="width">Largura</label>
                    <select name="width" id="width_in">
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
                    <label for="height">Comprimento(mm)</label>
                    <input type="number" name="height" min="20">
                </div>
                <div>
                    <label for="color">Cores</label>
                    <select name="colors" id="colors_in">
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
                    <label for="wire">Tipo de Fio</label>
                    <select name="wire" id="wire_in">
                        <option value="metalizado_pd">Lurex Metalizado Prata e Dourado</option>
                        <option value="metalizado">Lurex Metalizado Colors</option>
                        <option value="poliester">Poliester</option>
                        <option value="rayon">Rayon</option>
                        <option value="twolight">TwoLight</option>
                        <option value="trilobal">trilobal</option>
                    </select>
                </div>
                <div>
                    <label for="quality">Qualidade</label>
                    <select name="quality" id="quality_in">
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
                    <label for="iron-on">Termocolante</label>
                    <select name="iron-on" id="iron-on_in">
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
                    <label for="units">Unidades</label>
                    <input type="number" name="units" min="100" value="100">
                </div>
                <div>
                    <label for="virtual">Loja virtual</label>
                    <select name="virtual" id="virtual">
                        <option value="no">Não</option>
                        <option value="yes">Sim</option>
                    </select>
                </div>
                <input name="product" value="pe" style="display: none;">
                <button type="submit">Calcular</button>
            </form>
        </div>
    </main>
    <div id="result_container">
        <div class="result-item" style="display: flex;justify-content: center;">
            <span class="label" style="text-align: center;">Vazio</span>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="./scripts/script.js"></script>
<script src="./scripts/products.js"></script>
<script src="./scripts/calculator.js"></script>

</html>