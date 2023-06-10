const ctx = document.getElementById('histogram1').getContext('2d');
const ctx2 = document.getElementById('histogram2').getContext('2d');
const ctx3 = document.getElementById('histogram3').getContext('2d');
const ctx4 = document.getElementById('histogram4').getContext('2d');
const canvas1 = document.getElementById('histogram1');
const canvas2 = document.getElementById('histogram2');
const canvas3 = document.getElementById('histogram3');
const canvas4 = document.getElementById('histogram4');
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
        beginAtZero: true
      }
    }]
  }
};



var GlucoseData = JSON.parse(canvas1.getAttribute('aria-data'));
var KolesterolData = JSON.parse(canvas2.getAttribute('aria-data'));
var BloodData = JSON.parse(canvas3.getAttribute('aria-data'));
var UridData = JSON.parse(canvas4.getAttribute('aria-data'));
if (GlucoseData.length === 1) {
  GlucoseData.push(GlucoseData[0]);
}
if (KolesterolData.length === 1) {
  KolesterolData.push(KolesterolData[0]);
}
if (UridData.length === 1) {
  UridData.push(UridData[0]);
}
if (BloodData.length === 1) {
  BloodData.push(BloodData[0]);
}
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
  data: KolesterolData,
  backgroundColor: '#6CBDCB',
}

var TekananDarah = {
  label: "Kadar Tekanan Darah",
  data: BloodData,
  backgroundColor: '#6CBDCB',
}

var AsamUrat = {
  label: "Kadar Asam Urat",
  data: UridData,
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