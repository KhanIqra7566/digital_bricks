<script src="assets/bundles/libscripts.bundle.js"></script>
	<script src="assets/js/main.js"></script>
	<script>
		jQuery(function () {

			// Revenue and Cost
			initApexChart(document.querySelector("#apex-MyAnalytics"), {
				series: [{
					name: 'Revenue',
					data: [13, 23, 20, 8, 13, 27, 33, 12, 67, 22, 43, 21,]
				}, {
					name: 'Cost',
					data: [44, 55, 41, 67, 22, 43, 21, 49, 13, 23, 20, 8,]
				}],
				chart: {
					type: 'bar',
					height: 240,
					stacked: true,
					//stackType: '100%',
					toolbar: {
						show: false,
					},
				},
				colors: ['var(--theme-color1)', 'var(--accent-color)'],
				responsive: [{
					breakpoint: 480,
					options: {
						legend: {
							position: 'bottom',
							offsetX: -10,
							offsetY: 0
						}
					}
				}],
				xaxis: {
					categories: ['Jan', 'Feb', 'Marc', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
				},
				yaxis: {
					labels: {
						style: {
							colors: ['#ffffff'],
						}
					}
				},
				fill: {
					opacity: 1
				},
				dataLabels: {
					enabled: false,
				},
				legend: {
					position: 'bottom',
				},
				tooltip: {
					y: [{
						title: {
							formatter: function (val) {
								return val + " (K)"
							}
						}
					}, {
						title: {
							formatter: function (val) {
								return val + " (K)"
							}
						}
					}]
				},
			});

			// Sales Analytics
			initApexChart(document.querySelector("#apex-SalesAnalytics"), {
				series: [{
					name: 'Mobile',
					data: [31, 40, 28, 51, 42, 109, 100, 40, 28, 51, 42, 22]
				}, {
					name: 'Web',
					data: [11, 32, 42, 109, 100, 40, 28, 45, 32, 34, 52, 41]
				}],
				chart: {
					height: 270,
					type: 'area',
					toolbar: {
						show: false,
					}
				},
				colors: ['var(--theme-color2)', 'var(--theme-color5)'],
				fill: {
					type: "gradient",
					gradient: {
						//shade: "dark",
						//type: "horizontal",
						shadeIntensity: 0.5,
						gradientToColors: ['var(--theme-color2)', 'var(--theme-color5)'],
						inverseColors: true,
						opacityFrom: 1,
						opacityTo: 0.3,
						stops: [0, 100]
					}
				},
				dataLabels: {
					enabled: false
				},
				stroke: {
					curve: 'smooth',
					width: 1,
				},
				xaxis: {
					categories: ["Jan", "Feb", "March", "April", "May", "Jun", "July", "Aug", "Sept", "Oct", "Nov", "Dec",]
				},
			});

			// Team Performance
			initApexChart(document.querySelector("#apex-TeamPerformance"), {
				chart: {
					height: 240,
					type: "radialBar",
				},
				series: [67],
				colors: ["var(--theme-color1)"],
				plotOptions: {
					radialBar: {
						startAngle: -90,
						endAngle: 90,
						track: {
							background: 'var(--bs-border-color)',
							startAngle: -90,
							endAngle: 90,
						},
						dataLabels: {
							name: {
								show: false,
							},
							value: {
								fontSize: "30px",
								show: true
							}
						}
					}
				},
				fill: {
					type: "gradient",
					gradient: {
						shade: "dark",
						type: "horizontal",
						gradientToColors: ["var(--theme-color3)"],
						stops: [0, 100]
					}
				},
				stroke: {
					lineCap: "butt"
				},
				labels: ["Progress"]
			});

			initApexChart(document.querySelector("#apex-EmployeeSalary"), {
				series: [{
					data: [400, 430, 448, 690, 1100, 1200, 1380]
				}],
				colors: ["var(--theme-color1)"],
				chart: {
					type: 'bar',
					height: 256,
					toolbar: {
						show: false,
					},
				},
				plotOptions: {
					bar: {
						borderRadius: 4,
						horizontal: true,
					}
				},
				dataLabels: {
					enabled: false
				},
				xaxis: {
					categories: ['Design', 'Developer', 'Marketing', 'SOE', 'BD', 'HR', 'Sales'],
				}
			});
		});
	</script>

</body>


</html>