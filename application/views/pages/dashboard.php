<!-- <div class="container-fluid">
    <div class="row">
        <div class="col-md-2 bg-secondary dashboard-side"> -->
        <!-- <div class="dashboard-side"> -->
            <!-- <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Data Dosen</a></li>
            </ul> -->
        <!-- </div> -->
        <!-- </div> -->
        <div class="col-md-10 dashboard-main">
          <!-- <h2 class="text-center"><?= $title; ?></h2> -->
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <canvas id="hr-chart"></canvas>
                <canvas id="doughnut-chart"></canvas>
              </div>
            <div class="col-md-6">
                <canvas id="bar-chart"></canvas>
                <canvas id="line-chart"></canvas>
            </div> 
          </div>
        </div>
        </div>
    </div>
</div>
<!--  
<script src="<?= base_url(); ?>assets/js/Chart.min.js"></script>
<script>
    const cData = JSON.parse('<?= $chart_data; ?>');
    console.log(cData);
    const title = "Publikasi Paper Dosen";
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
          display: true,
          text: title,
          fontSize: 20
        }
    }

    // Bar Chart
    const barChart = document.getElementById("bar-chart");
    new Chart(barChart, {
        type: "bar",
        data: dataObj,
        options: options
    });

    const hrChart = document.getElementById("hr-chart");
    new Chart(hrChart, {
        type: "horizontalBar",
        data: dataObj,
        options: options
    });

        // Line Chart
    const lineChart = document.getElementById("line-chart");
    new Chart(lineChart, {
        type: "line",
        data: dataObj,
        options: options
    });

    // Doughnut Chart
    const doughnutChart = document.getElementById("doughnut-chart");
    new Chart(doughnutChart, {
        type: "doughnut",
        data: dataObj,
        options: options
    });
</script> -->