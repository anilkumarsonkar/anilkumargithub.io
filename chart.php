<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    

</head>
<body>
    <div class="chart-container">
        <canvas id="myChart"></canvas>
    </div>
    <button id="updateChart">Update Chart</button>
</body>
<script>
    // Get a reference to the chart canvas element and create a chart context
const ctx = document.getElementById('myChart').getContext('2d');

// Initialize the chart with some data
const initialData = {
    labels: ['Label 1', 'Label 2', 'Label 3'],
    datasets: [{
        label: 'Data',
        data: [10, 20, 30],
        backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)'],
        borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)'],
        borderWidth: 1
    }]
};

const myChart = new Chart(ctx, {
    type: 'bar',
    data: initialData,
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// Function to update the chart with new data
document.getElementById('updateChart').addEventListener('click', () => {
    const newData = {
        labels: ['Label 1', 'Label 2', 'Label 3'],
        datasets: [{
            label: 'Data',
            data: [Math.random() * 50, Math.random() * 50, Math.random() * 50],
            backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)'],
            borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)'],
            borderWidth: 1
        }]
    };

    myChart.data = newData;
    myChart.update();
});

</script>
</html>
