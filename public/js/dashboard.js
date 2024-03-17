document.addEventListener('DOMContentLoaded', function() {
  fetch('/dash/data')
      .then(response => response.json())
      .then(data => {
          const xValues = data.map(entry => entry.month);
          const yValues = data.map(entry => entry.total);
          const barColors = ["red", "green", "blue", "orange", "brown"];

          new Chart("myChart", {
              type: "bar",
              data: {
                  labels: xValues,
                  datasets: [{
                      backgroundColor: barColors,
                      data: yValues
                  }]
              },
              options: {
                  legend: { display: false },
                  title: {
                      display: true,
                  },
                  scales: {
                      xAxes: [{
                          ticks: {
                              beginAtZero: false,
                              min: 1, // Start at 1
                              max: 12 // End at 12
                          }
                      }],
                      yAxes: [{
                          ticks: {
                              beginAtZero: true
                          }
                      }]
                  }
              }
          });
      })
      .catch(error => console.error('Error fetching data:', error));
});