<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Pie Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>
    <div class="chart-container">
        <canvas id="myPieChart"></canvas>
    </div>
    <button id="updateChart">Update Chart</button>
</body>
<script>
    // Get a reference to the pie chart canvas element and create a chart context
const pieCtx = document.getElementById('myPieChart').getContext('2d');

// Initialize the pie chart with some data
const initialData = {
    labels: ['Label 1', 'Label 2', 'Label 3'],
    datasets: [{
        data: [30, 40, 30], // Specify data values here
        backgroundColor: ['rgba(255, 99, 132, 0.5)', 'rgba(54, 162, 235, 0.5)', 'rgba(255, 206, 86, 0.5)'],
        borderWidth: 1
    }]
};

const pieChart = new Chart(pieCtx, {
    type: 'pie',
    data: initialData
});

// Function to update the pie chart with new data
document.getElementById('updateChart').addEventListener('click', () => {
    const newData = {
        labels: ['Label 1', 'Label 2', 'Label 3'],
        datasets: [{
            data: [Math.random() * 50, Math.random() * 50, Math.random() * 50], // Generate random data
            backgroundColor: ['rgba(255, 99, 132, 0.5)', 'rgba(54, 162, 235, 0.5)', 'rgba(255, 206, 86, 0.5)'],
            borderWidth: 1
        }]
    };

    pieChart.data = newData;
    pieChart.update();
});

</script>
</html>
