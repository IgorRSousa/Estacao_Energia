<script>
var url = 'http://localhost:8000/estacao-energia';

async function getDataFromAPI() {
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
    
    for(const elemento in resposta){
        datas.push(resposta[elemento].Data_Registro.slice(0, 10));
        tensaoFaseRS.push(Number(resposta[elemento].Tensao_Fase_RS_V));
        tensaoFaseST.push(Number(resposta[elemento].Tensao_Fase_ST_V));
        tensaoFaseTR.push(Number(resposta[elemento].Tensao_Fase_TR_V));
    }

    const respsostaFinal = [datas, tensaoFaseRS, tensaoFaseST]

    return await respsostaFinal;
}

const elementos = getDataFromAPI();
elementos.then(function(result) {
    const ctx = document.getElementById('myChart');

    const grafico = new Chart(ctx, {
        type: 'line',
        data: {
        labels: result[0],
        datasets: [{
            label: 'Tensão Fase RS',
            data: result[1],
            borderWidth: 1
        },{
            label: 'Tensão Fase ST',
            data: result[2],
            borderWidth: 1
        }]
        },
        options: {
        scales: {
            y: {
            beginAtZero: false
            }
        }
        }
    });
    console.log(result);
});
</script>
