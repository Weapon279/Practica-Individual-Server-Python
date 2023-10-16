<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculadora de Divisas</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<div class="container p-5 my-5 bg-dark text-white">
<body class="container-fluid">
    <div class="d-flex flex-wrap justify-content-center">
        <div class="p-2">
            <h1>Calculadora de Divisas</h1>
            <label for="amount">Cantidad:</label>
            <input type="number" id="amount" class="form-control" placeholder="Ingrese la cantidad">

            <label for="fromCurrency">Divisa de origen:</label>
            <select id="fromCurrency" class="form-select">
                <option value="bitcoin">Bitcoin (BTC)</option>
            </select>

            <label for="toCurrency">Divisa de destino:</label>
            <select id="toCurrency" class="form-select">
                <option value="cardano">Cardano (ADA)</option>
                <option value="ethereum">Ethereum (ETH)</option>
            </select>

            <button onclick="convertCurrency()" class="btn btn-success mt-3">Convertir</button>

            <h3>Resultado:</h3>
            <div id="result"></div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
     <script>

    const pricesWs = new WebSocket('wss://ws.coincap.io/prices?assets=bitcoin,ethereum,monero,litecoin')

    pricesWs.onmessage = function (msg) {
        console.log(msg.data)
    }

      </script>
    <script>

        function convertCurrency() {
            const amount = document.getElementById('amount').value;
            const fromCurrency = document.getElementById('fromCurrency').value;
            const toCurrency = document.getElementById('toCurrency').value;

            axios.get(`https://api.coincap.io/v2/assets/${fromCurrency}/history?interval=d1`)
            .then(function (response) {
                const conversionRateFrom = response.data.data[0].priceUsd;
                
                axios.get(`https://api.coincap.io/v2/assets/${toCurrency}/history?interval=d1`)
                .then(function (response) {
                    const conversionRateTo = response.data.data[0].priceUsd;
                    const convertedAmount = (amount * conversionRateFrom) / conversionRateTo;

                    const resultElement = document.getElementById('result');
                    resultElement.innerHTML = `Convertir ${amount} ${fromCurrency} a ${toCurrency}: ${convertedAmount.toFixed(2)} ${toCurrency}`;
                })
                .catch(function (error) {
                    console.log(error);
                });
            })
            .catch(function (error) {
                console.log(error);
            });
        }
    </script>
</div>



</body>
</html>
