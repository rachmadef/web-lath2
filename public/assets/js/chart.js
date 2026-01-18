(function () {
  "use strict";

  const dzChartlist = (function () {
		const chartBarRunning = function() {
		  const chartBarRunningOptions = {
			series: [
			  {
				name: 'Profit ',
				data: [30, 80 , 100, 60, 40],
			  },
			  {
				name: 'Loss',
				data: [55, 60, 80, 90, 70]
			  }
			],
			chart: {
			  type: 'bar',
			  height: 250,
			  toolbar: {
				show: false,
			  },
			},
			plotOptions: {
			  bar: {
				horizontal: false,
				columnWidth: '80%',
				borderRadius: 2,
			  },
			},
			colors: ['rgba(255,255,255,0.3)', '#B3E719'],
			dataLabels: {
			  enabled: false,
			},
			markers: {
			  shape: "circle",
			},
			legend: {
			  show: false,
			  fontSize: '12px',
			  labels: {
				colors: 'rgba(255,255,255,0.6)',
			  },
			  markers: {
				width: 18,
				height: 18,
				strokeWidth: 0,
				strokeColor: '#fff',
				radius: 12,
			  }
			},
			stroke: {
			  show: true,
			  width: 6,
			  colors: ['transparent']
			},
			grid: {
			  borderColor: 'transparent',
			},
			xaxis: {
			  categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu'],
			  axisBorder: {
			  show: false,
		  },
		  axisTicks: {
			  show: false,
		  },
			  labels: {
				style: {
				  colors: 'rgba(255,255,255,0.6)',
				  fontSize: '13px',
				  fontFamily: 'Red Hat Display',
				  fontWeight: 500,
				  cssClass: 'apexcharts-xaxis-label',
				},
			  },
			  crosshairs: {
				show: false,
			  }
			},
			yaxis: {
			  show: false,
			  labels: {
				offsetX: -16,
				style: {
				  colors: 'rgba(255,255,255,0.6)',
				  fontSize: '13px',
				  fontFamily: 'Red Hat Display',
				  fontWeight: 100,
				  cssClass: 'apexcharts-xaxis-label',
				},
			  },
			},
			fill: {
			  opacity: 1,
			  colors: ['#5F8279', '#B3E719'],
			},
			tooltip: {
			  y: {
				formatter: function (val) {
				  return "$ " + val + " thousands";
				}
			  }
			},
			responsive: [{
			  breakpoint: 575,
			  options: {
				plotOptions: {
				  bar: {
					columnWidth: '80%',
				  },
				},
				chart: {
				  height: 250,
				}
			  }
			}]
		  };

		  const chartElement = document.querySelector("#chartBarRunning");
		  if (chartElement) {
			const chartBarRunningObject = new ApexCharts(chartElement, chartBarRunningOptions);
			chartBarRunningObject.render();
		  }
		}

		const growChart = function() {
			var options = {
			  series: [{
			  name: 'Website Blog',
			  type: 'column',
			  data: [2026, 3025, 1025, 1550, 3025, 2525, 4390, 2800]
			}, {
			  name: 'Social Media',
			  type: 'line',
			  data: [2026, 3025, 1025, 1550, 3025, 2525, 4390, 2800	]
			}],
			chart: {
			  height: 345,
			  type: 'line',
			  toolbar: {
				show: false,
				},
				zoom: {
			enabled: false,
				},
			},
			plotOptions: {
				bar: {
					horizontal: false,
					columnWidth: '50%',
					borderRadius: 4,
				},
			},
			colors: ['rgba(255,255,255, 0.1)', 'rgba(255,255,255, 0.4)'],
				dataLabels: {
				  enabled: false,
			},
			stroke: {
			  width: [0, 1],
			  dashArray: 4, 
			  colors: ['rgba(255,255,255,0.3)','rgba(255,255,255,0.4)'],
			},
			markers: {
			  size: [5,5],
			  strokeWidth: [0,0],
			  strokeColors: ['#fff','#fff'],
			  border:0,
			  colors: 'rgba(255,255,255,0.4)',
			},
			
			dataLabels: {
			  enabled: false
			},
			grid: {
				show: false,
			},
			yaxis: {show: false},
			legend: {
				show: false,
			},
			
			xaxis: {
			  categories:['2025','2024','2023','2022','2021','2020','2019','2018'],
			  axisBorder: {
				show: true,	
				  color: "rgba(255,255,255,0.1)",
				  offsetY: 10
			  },
			  axisTicks: {
				show: false,
			  },
			  labels: {
				style: {
				  colors: "rgba(255,255,255,0.4)",
				  fontSize: "13px",
				  fontFamily: "Roboto",
				  fontWeight: 400,
				  cssClass: "apexcharts-xaxis-label",
				},
			  },
			  crosshairs: {
				show: false,
			  },
			},
			};

			var chart = new ApexCharts(document.querySelector("#grow-chart"), options);
			chart.render();
		}	

		return {
		  init: function () {
		  },
		  load: function () {
			chartBarRunning();
			growChart();
		  },
		  resize: function () {
		  }
		};
	})();

	document.addEventListener("DOMContentLoaded", function () {
	});

	window.addEventListener("load", function () {
		setTimeout(function () {
		  dzChartlist.load();
		}, 1000);
	});

	window.addEventListener("resize", function () {
		dzChartlist.resize();
	});

})();
