$(function () {
    $.getJSON("js/automoveis.json", function (data) {
        // Função para preencher a tabela
        function fillTable() {
            for (var i = 0; i < data['automoveis'].length; i++) {
                var row = $("<tr>");
                row.append("<td scope='col'>" + data['automoveis'][i]['MARCA'] + "</td>");
                row.append("<td scope='col'>" + data['automoveis'][i]['CARRO'] + "</td>");
                row.append("<td scope='col'>" + data['automoveis'][i]['CAMBER_DIANTEIRO_MIN'] + "</td>");
                row.append("<td scope='col'>" + data['automoveis'][i]['CAMBER_DIANTEIRO_MAX'] + "</td>");
                row.append("<td scope='col'>" + data['automoveis'][i]['CASTER_DIANTEIRO_MIN'] + "</td>");
                row.append("<td scope='col'>" + data['automoveis'][i]['CASTER_DIANTEIRO_MAX'] + "</td>");
                row.append("<td scope='col'>" + data['automoveis'][i]['CONVERGENCIA_DIANTEIRA_MIN'] + "</td>");
                row.append("<td scope='col'>" + data['automoveis'][i]['CONVERGENCIA_DIANTEIRA_MAX'] + "</td>");
                row.append("<td scope='col'>" + data['automoveis'][i]['CAMBER_TRASEIRA_MIN'] + "</td>");
                row.append("<td scope='col'>" + data['automoveis'][i]['CAMBER_TRASEIRA_MAX'] + "</td>");
                row.append("<td scope='col'>" + data['automoveis'][i]['CONVERGENCIA_TRASEIRA_MIN'] + "</td>");
                row.append("<td scope='col'>" + data['automoveis'][i]['CONVERGENCIA_TRASEIRA_MAX'] + "</td>");
                $("#TableData").append(row);
            }
// samuel ama o JOBSON
        }
        fillTable(); // Preencha a tabela inicialmente
        // Função para filtrar a tabela com base na pesquisa
        $("#searchButton").on("click", function () {
            var searchTerm = $("#searchInput").val().toLowerCase();
            $("#TableData tr").each(function () {
                var veiculo = $(this).find("td:eq(0)").text().toLowerCase(); // Segunda coluna (nome do veículo)
                if (veiculo.includes(searchTerm)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
});