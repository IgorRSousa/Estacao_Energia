<script>
const elementosPotencia = getDataFromAPI();
elementosPotencia.then(function(result) {
    const ctx3 = document.getElementById('myChart3');

    const graficoDois = new Chart(ctx3, {
        type: 'line',
        data: {
        labels: result[0],
        datasets: [{
            label: 'Demanda de Potencia (kW)',
            data: result[1],
            borderWidth: 1,     
        }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: 'Demanda Diarias de potencia em kW',
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