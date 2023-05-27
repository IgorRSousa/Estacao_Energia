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
        const demandaKW = [];
        const potenciaAtiva = [];
        
        for(const elemento in resposta){
            datas.push(resposta[elemento].Data_Registro.slice(0, 10));
            demandaKW.push(Number(resposta[elemento].Demanda_kW));
            potenciaAtiva.push(Number(resposta[elemento].Potencia_Ativa_kW));
        }

        const respsostaFinal = [datas, demandaKW, potenciaAtiva]

        return await respsostaFinal;
    }
</script>