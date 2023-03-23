const ctx = document.getElementById('histogram1').getContext('2d');
const ctx2 = document.getElementById('histogram2').getContext('2d');
const ctx3 = document.getElementById('histogram3').getContext('2d');
const ctx4 = document.getElementById('histogram4').getContext('2d');
const ChartOptions = {
  scales: {
    indexAxis: 'y',
    xAxes: [{
      barPercentage: 0.5,
      categoryPercentage: 1.5,
      ticks: {
        max: 12   ,
      }
    }, {
      display: false,
      ticks: {
        autoSkip: false,
        max: 12,
      }
    }],
    yAxes: [{
      ticks: {
        beginAtZero: false
      }
    }]
  }
};

var GlucoseNormal = {
  type: 'line',
  label: 'Kadar Glukosa Normal',
  data: 
   [120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120],
  borderColor: 'green',
  fill: false,
}


  var Glucose = {
    type: 'bar',
    label: 'Kadar Glukosa',
    data: [120, 50, 40, 36, 120,200,150,70,190,130,100,150],
    backgroundColor: '#6CBDCB',
  }
var Kolesterol = {
  label: "Kadar Kolesterol",
  data: [140, 60, 70, 50, 120,110,160,70,190,130,120,150],
  backgroundColor: '#6CBDCB',
}

var TekananDarah = {
  label: "Kadar Tekanan Darah",
  data: [140, 60, 70, 50, 120,110,160,70,190,130,120,150],
  backgroundColor: '#6CBDCB',
}

var AsamUrat = {
  label: "Kadar Asam Urat",
  data: [140, 60, 70, 50, 120,110,160,70,190,130,120,150],
  backgroundColor: '#6CBDCB',
}




const chart = new Chart(ctx,   {
  data: {
    labels: [ "Jan","Feb","Mar", "Apr","Mei","Juni","Juli","Aug","Sep","Okt","Nov","Dec"],
    datasets: [Glucose,GlucoseNormal]
  },
  options: ChartOptions
});

const chart2 = new Chart(ctx2,   {
  type: 'bar',
  data: {
    labels: [ "Jan","Feb","Mar", "Apr","Mei","Juni","Juli","Aug","Sep","Okt","Nov","Dec"],
    datasets: [Kolesterol]
  },
  options: ChartOptions
});

const chart3 = new Chart(ctx3,   {
  type: 'bar',
  data: {
    labels: [ "Jan","Feb","Mar", "Apr","Mei","Juni","Juli","Aug","Sep","Okt","Nov","Dec"],
    datasets: [TekananDarah]
  },
  options: ChartOptions
});

const chart4 = new Chart(ctx4,   {
  type: 'bar',
  data: {
    labels: [ "Jan","Feb","Mar", "Apr","Mei","Juni","Juli","Aug","Sep","Okt","Nov","Dec"],
    datasets: [AsamUrat]
  },
  options: ChartOptions
});