<script>
const elementosPotenciaDois = getDataFromAPI();
elementosPotenciaDois.then(function(result) {
    const ctx4 = document.getElementById('myChart4');

    const graficoDois = new Chart(ctx4, {
        type: 'line',
        data: {
        labels: result[0],
        datasets: [{
            label: 'Potência Ativa (kW)',
            data: result[2],
            borderWidth: 1,     
        }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: 'Potência Ativa em kW (Media Diarias)',
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