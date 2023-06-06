const ctx = document.getElementById('histogram1').getContext('2d');
const ctx2 = document.getElementById('histogram2').getContext('2d');
const ctx3 = document.getElementById('histogram3').getContext('2d');
const ctx4 = document.getElementById('histogram4').getContext('2d');
var tahunGlucose = document.getElementById('Glucose').value;
var tahunKolesterol = document.getElementById('Kolesterol').value;
var tahunBloodPress = document.getElementById('BloodPress').value;
var tahunUridAcid = document.getElementById('UridAcid').value;
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


var GlucoseData = `SELECT * FROM glucoses WHERE YEAR(Periode) = ${tahunGlucose} AND MONTH(Periode) BETWEEN 1 AND 12`;
var GlucoseNormal = {
  type: 'line',
  label: 'Kadar Glukosa Normal',
  data: 
   [120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120],
  borderColor: 'green',
  fill: false,
}
var KolesterolNormal = {
  type: 'line',
  label: 'Kadar Kolesterol Normal',
  data: 
   [67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67],
  borderColor: 'green',
  fill: false,
}
var BloodNormal = {
  type: 'line',
  label: 'Kadar Tekanan Darah Normal',
  data: 
   [98, 98, 98, 98, 98, 98, 98, 98, 98, 98, 98, 98],
  borderColor: 'green',
  fill: false,
}
var AcidNormal = {
  type: 'line',
  label: 'Kadar Asam Urat Normal',
  data: 
   [4.5, 4.5, 4.5, 4.5, 4.5, 4.5, 4.5, 4.5, 4.5, 4.5, 4.5, 4.5],
  borderColor: 'green',
  fill: false,
}


  var Glucose = {
    type: 'bar',
    label: 'Kadar Glukosa',
    data: GlucoseData,
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
  type: 'bar',
  data: {
    labels: [ "Jan","Feb","Mar", "Apr","Mei","Juni","Juli","Aug","Sep","Okt","Nov","Dec"],
    datasets: [GlucoseNormal,Glucose]
  },
  options: ChartOptions
});

const chart2 = new Chart(ctx2,   {
  type: 'bar',
  data: {
    labels: [ "Jan","Feb","Mar", "Apr","Mei","Juni","Juli","Aug","Sep","Okt","Nov","Dec"],
    datasets: [KolesterolNormal,Kolesterol]
  },
  options: ChartOptions
});

const chart3 = new Chart(ctx3,   {
  type: 'bar',
  data: {
    labels: [ "Jan","Feb","Mar", "Apr","Mei","Juni","Juli","Aug","Sep","Okt","Nov","Dec"],
    datasets: [BloodNormal,TekananDarah]
  },
  options: ChartOptions
});

const chart4 = new Chart(ctx4,   {
  type: 'bar',
  data: {
    labels: [ "Jan","Feb","Mar", "Apr","Mei","Juni","Juli","Aug","Sep","Okt","Nov","Dec"],
    datasets: [AcidNormal,AsamUrat]
  },
  options: ChartOptions
});