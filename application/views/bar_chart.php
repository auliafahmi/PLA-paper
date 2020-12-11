
  <div class="container">
    <div class="col-md-6">
      <canvas id="hr-chart"></canvas>
    </div>
  </div>
 
  <!-- javascript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 

   <script>
    const cData = JSON.parse('<?= $chart_data; ?>');
    console.log(cData);
    // const title = "Paper Dosen";
    color = ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850", "#c3253f", "#def456", "#cab123"];

    Chart.defaults.scale.ticks.beginAtZero = true;

    const dataObj = {
        labels: cData.label,
        datasets: [
            {
                label: "Paper",
                data: cData.data,
                borderWidth: 1,
                backgroundColor: color,
                borderColor: "#bcbcbc",
                fill: false
            }
        ]
    }

    const options = {
        legend: { display: false },
        title: {
          display: false,
        }
    }

    // Bar Chart
    const barChart = document.getElementById("hr-chart");
    new Chart(barChart, {
        type: "horizontalBar",
        data: dataObj,
        options: options
    });
</script>