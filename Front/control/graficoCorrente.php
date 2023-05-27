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
    const correnteFaseR = [];
    const correnteFaseS = [];
    const correnteFaseT= [];
    
    for(const elemento in resposta){
        datas.push(resposta[elemento].Data_Registro.slice(0, 10));
        correnteFaseR.push(Number(resposta[elemento].Corrente_Fase_R_A));
        correnteFaseS.push(Number(resposta[elemento].Corrente_Fase_S_A));
        correnteFaseT.push(Number(resposta[elemento].Corrente_Fase_T_A));
    }

    const respsostaFinal = [datas, correnteFaseR, correnteFaseS, correnteFaseT]

    return await respsostaFinal;
}

const elementosCorrente = getDataFromAPI();
elementosCorrente.then(function(result) {
    const ctx2 = document.getElementById('myChart2');

    const graficoDois = new Chart(ctx2, {
        type: 'line',
        data: {
        labels: result[0],
        datasets: [{
            label: 'Corrente Fase R (A)',
            data: result[1],
            borderWidth: 1,     
        },{
            label: 'Corrente Fase S (A)',
            data: result[2],
            borderWidth: 1
        },{
            label: 'Corrente Fase T (A)',
            data: result[3],
            borderWidth: 1,
        }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: 'Comparativo das Medías Diárias das Correntes',
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