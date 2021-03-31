<?php
require_once "header.php";
?>

<main class="conteudo">
    
    <div class="voltar"> 
        <a href="http://localhost/projetos/php-curso/Projeto-conversoes/">Página Inicial</a>
    </div>
    
    <div class="form-converter">
        <h1>Conversão de Massas</h1>

        <label>Valor: 
            <input type="number" name="campo-texto" class="campo-texto" id="campo-texto" placeholder="Digite o valor a ser convertido" maxlength="50">
        </label>
        <div class="col-6">
            <label>De:
                <select name="campo-entrada" id="campo-entrada"  class="slc-campo">
                    <option value="1">quilograma(kg)</option>
                    <option value="2">grama(g)</option>
                    <option value="3">miligrama(mg)</option>
                    <option value="4">decagrama(dag)</option>
                    <option value="5">decigrama(hg)</option>
                    <option value="6">centigrama(cg)</option>

                </select>

            </label>
        </div>
        <div class="col-6"> 

            <label>Para:
                <select name="campo-converter" id="campo-converter" class="slc-campo">
                    <option value="1">quilograma(kg)</option>
                    <option value="2">grama(g)</option>
                    <option value="3">miligrama(mg)</option>
                    <option value="4">decagrama(dag)</option>
                    <option value="5">decigrama(hg)</option>
                    <option value="6">centigrama(cg)</option>

                </select>
            </label>

        </div>
        <button class="btn-converter" type="submit" onclick="retornarValor()">Converter</button>


    </div>

    <div class="resultado">
        <h2>Resultado:</h2>
        <h3 id="retorno">Nenhum valor adicionado.</h3>
    </div>

</main>
<?php
require_once "footer.php";
?>