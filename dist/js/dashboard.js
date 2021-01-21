/* global Chart:false */

$(document).ready(function () {
  $.ajax({
    type: "GET",
    url: "http://localhost:1498/propuestaventa",
    dataType: "JSON",
    success: function (response) {

      let ventas = 0, total = 0, pendientes = 0;

      const marcas = {};

      response.forEach(json => {
        const marca = json.vehiculoVender.vehiculo.marca;

        if (!marcas[marca]) {
          marcas[marca] = 1;
        } else {
          marcas[marca]++;
        }

        if (json.estado === "aceptada") {
          total += json.presupuesto;
          ventas++;
        } else if (json.estado === "pendiente") {
          pendientes++;
        }

      });


      _inicarResumen();

      $('#num-ventas').text(ventas);
      $('#total').text(total);
      $('#num-reparaciones').text(pendientes);

      _iniciarDonut(marcas);
    }
  });

  const _inicarResumen = function () {
    const salesChartCanvas = $('#salesChart').get(0).getContext('2d')

    const salesChartData = {
      labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'],
      datasets: [
        {
          label: 'Digital Goods',
          backgroundColor: 'rgba(60,141,188,0.9)',
          borderColor: 'rgba(60,141,188,0.8)',
          pointRadius: false,
          pointColor: '#3b8bba',
          pointStrokeColor: 'rgba(60,141,188,1)',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data: [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label: 'Electronics',
          backgroundColor: 'rgba(210, 214, 222, 1)',
          borderColor: 'rgba(210, 214, 222, 1)',
          pointRadius: false,
          pointColor: 'rgba(210, 214, 222, 1)',
          pointStrokeColor: '#c1c7d1',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data: [65, 59, 80, 81, 56, 55, 40]
        }
      ]
    }

    const salesChartOptions = {
      maintainAspectRatio: false,
      responsive: true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines: {
            display: false
          }
        }],
        yAxes: [{
          gridLines: {
            display: false
          }
        }]
      }
    }

    new Chart(salesChartCanvas, {
      type: 'line',
      data: salesChartData,
      options: salesChartOptions
    })
  }

  const _iniciarDonut = function (marcas) {
    const marcasOrdenadas = Object.keys(marcas).sort((a, b) => marcas[b] - marcas[a]);


    const labels = new Array;
    const data = new Array;
    for (let index = 0; index <= 5; index++) {
      const marca = marcasOrdenadas[index];
      const num = marcas[marca];

      $(`#donut-${index}`).text(marca);
      labels.push(marca);
      data.push(num);
    }


    const pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    const pieData = {
      labels: labels,
      datasets: [
        {
          data: data,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de']
        }
      ]
    }

    const pieOptions = {
      legend: {
        display: false
      }
    }

    new Chart(pieChartCanvas, {
      type: 'doughnut',
      data: pieData,
      options: pieOptions
    })
  }
});