<script src="<?= base_url(); ?>assets/js/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
<script>
    // Membuat warna acak
    function getRandomColor() {
        let letters = '0123456789ABCDEF'.split('');
        let color = '#';
        for (let i = 0; i < 6; i++ ) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

    // membuat warna acak untuk tiap dosen
    function getRandomColorEachDosen(count) {
        let data =[];
        for (let i = 0; i < count; i++) {
            data.push(getRandomColor());
        }
        return data;
    }

    const cData = JSON.parse('<?= $chart_data; ?>');
    // console.log(cData);
    const title = "Publikasi Paper Dosen";
    let color = getRandomColorEachDosen(cData.data.length);
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
        },
        plugins: {
            datalabels: {
                color: '#fff',
                borderWidth: 2,
                borderColor: '#fff',
                backgroundColor: (color) => {
                    return color.dataset.backgroundColor;
                }
            }
        }
    }

    const axisLabel = {
        scales: {
            xAxes: {
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'Jumlah Publikasi Paper'
                }
            }
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
        options: 
            options
         
    });

    //     // Line Chart
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
        options: {
            options,
            legend: {
                display: true,
                position: 'right'
            },
            plugins: {
            datalabels: {
                color: '#fff',
                borderWidth: 2,
                borderColor: '#fff',
                backgroundColor: (color) => {
                    return color.dataset.backgroundColor;
                }
            }
        }
        }
            
    });
</script>