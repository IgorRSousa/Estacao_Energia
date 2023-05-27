<script>
    async function getDataFromAPI() {
        var url = 'http://localhost:8000/estacao-energia';
        
        const resposta = await fetch(url).then(function(response) {
            if (response.ok) {
                return response.json();
            } else {
                throw new Error("Erro: " + response.status);
            }
        });
        
        const datas = [];
        const tensaoFaseRS = [];
        const tensaoFaseST = [];
        const tensaoFaseTR = [];
        const correnteFaseR = [];
        const correnteFaseS = [];
        const correnteFaseT= [];
        
        for(const elemento in resposta){
            datas.push(resposta[elemento].Data_Registro.slice(0, 10));
            tensaoFaseRS.push(Number(resposta[elemento].Tensao_Fase_RS_V));
            tensaoFaseST.push(Number(resposta[elemento].Tensao_Fase_ST_V));
            tensaoFaseTR.push(Number(resposta[elemento].Tensao_Fase_TR_V));
        }

        const respsostaFinal = [datas, tensaoFaseRS, tensaoFaseST, tensaoFaseTR]

        return await respsostaFinal;
    }
</script>

<script>
const elementosTensao = getDataFromAPI();
elementosTensao.then(function(result) {
    const ctx1 = document.getElementById('myChart1');

    const graficoDois = new Chart(ctx1, {
        type: 'line',
        data: {
        labels: result[0],
        datasets: [{
            label: 'Tensão Fase RS (V)',
            data: result[1],
            borderWidth: 1,     
        },{
            label: 'Tensão Fase ST (V)',
            data: result[2],
            borderWidth: 1
        },{
            label: 'Tensão Fase TR (V)',
            data: result[3],
            borderWidth: 1,
        }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: 'Comparativo das Medías Diárias das Tensões',
                }
            },
            scales: {
                y: {
                beginAtZero: false
                }
            }
        }
    });
});
</script>