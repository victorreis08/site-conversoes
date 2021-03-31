function retornarValor() {

    //variaveis dos campos
    var valor = $("#campo-texto").val()
    var entrada = $("#campo-entrada").val()
    var converter = $("#campo-converter").val()

    $.ajax({
        type: "GET",
        url: "php/converter.php",
        data: {
            valor: valor,
            entrada: entrada,
            converter: converter
        },
        error: function () {
            alert("erro")
        },
        success: function (result) {
            if (result != 0) {
                document.querySelector(".resultado").style.visibility = "visible"
                $("#retorno").html(result)
            } else {
                alert("error")
            }
        }

    })//fechar ajax
}//fechar função