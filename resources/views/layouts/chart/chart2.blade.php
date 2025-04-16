<script>
  var options2 = {
  chart: {
    height: "100%",
    type: 'bar'
  },
  plotOptions: {
    bar: {
      horizontal: true
    }
  },
  series: [{
    data: [{
      x: 'category A',
      y: 10
    }, {
      x: 'category B',
      y: 18
    }, {
      x: 'category C',
      y: 13
    }]
  }]
}

var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);

chart2.render();

</script>