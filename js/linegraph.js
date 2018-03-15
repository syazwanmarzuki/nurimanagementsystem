$(document).ready(function(){
	$.ajax({
		url : "http://localhost/editorial/js/linedata.php",
		type : "GET",
		success : function(data){
			console.log(data);

			var year = [];
			var totaljan = [];
			var totalfeb = [];
			var totalmac = [];
			var totalapril = [];
			var totalmay = [];
			var totaljun = [];
			var totaljuly = [];
			var totalaug = [];
			var totalsept = [];
			var totaloct = [];
			var totalnov = [];
			var totaldece = [];

			for(var i in data) {
				year.push("Year " + data[i].year);
				totaljan.push(data[i].totaljan);
				totalfeb.push(data[i].totalfeb);
				totalmac.push(data[i].totalmac);
				totalapril.push(data[i].totalapril);
				totalmay.push(data[i].totalmay);
				totaljun.push(data[i].totaljun);
				totaljuly.push(data[i].totaljuly);
				totalaug.push(data[i].totaljuly);
				totalsept.push(data[i].totalsept);
				totaloct.push(data[i].totaloct);
				totalnov.push(data[i].totalnov);
				totaldece.push(data[i].totaldece);
			}

			var chartdata = {
				labels: year,
				datasets: [
					{
						label: "January",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
						pointHoverBorderColor: "rgba(59, 89, 152, 1)",
						data: totaljan
					},
					{
						label: "February",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(29, 202, 255, 0.75)",
						borderColor: "rgba(29, 202, 255, 1)",
						pointHoverBackgroundColor: "rgba(1, 202, 255, 5)",
						pointHoverBorderColor: "rgba(29, 202, 255, 1)",
						data: totalfeb
					},
					{
						label: "March",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(211, 72, 54, 0.75)",
						borderColor: "rgba(211, 72, 54, 1)",
						pointHoverBackgroundColor: "rgba(211, 72, 54, 1)",
						pointHoverBorderColor: "rgba(211, 72, 54, 1)",
						data: totalmac
					},

					{
						label: "April",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
						pointHoverBorderColor: "rgba(59, 89, 152, 1)",
						data: totalapril
					},

					{
						label: "May",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(29, 202, 255, 0.75)",
						borderColor: "rgba(29, 202, 255, 1)",
						pointHoverBackgroundColor: "rgba(1, 202, 255, 5)",
						pointHoverBorderColor: "rgba(29, 202, 255, 1)",
						data: totalmay
					},

					{
						label: "June",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(211, 72, 54, 0.75)",
						borderColor: "rgba(211, 72, 54, 1)",
						pointHoverBackgroundColor: "rgba(211, 72, 54, 1)",
						pointHoverBorderColor: "rgba(211, 72, 54, 1)",
						data: totaljun
					},

					{
						label: "July",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
						pointHoverBorderColor: "rgba(59, 89, 152, 1)",
						data: totaljuly
					},

					{
						label: "August",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(29, 202, 255, 0.75)",
						borderColor: "rgba(29, 202, 255, 1)",
						pointHoverBackgroundColor: "rgba(1, 202, 255, 5)",
						pointHoverBorderColor: "rgba(29, 202, 255, 1)",
						data: totalaug
					},

					{
						label: "September",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(211, 72, 54, 0.75)",
						borderColor: "rgba(211, 72, 54, 1)",
						pointHoverBackgroundColor: "rgba(211, 72, 54, 1)",
						pointHoverBorderColor: "rgba(211, 72, 54, 1)",
						data: totalsept
					},

					{
						label: "October",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
						pointHoverBorderColor: "rgba(59, 89, 152, 1)",
						data: totaloct
					},

					{
						label: "November",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(211, 72, 54, 0.75)",
						borderColor: "rgba(211, 72, 54, 1)",
						pointHoverBackgroundColor: "rgba(211, 72, 54, 1)",
						pointHoverBorderColor: "rgba(211, 72, 54, 1)",
						data: totalnov
					},

										{
						label: "December",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
						pointHoverBorderColor: "rgba(59, 89, 152, 1)",
						data: totaldece
					},

				]
			};

			var ctx = $("#mycanvas");

			var LineGraph = new Chart(ctx, {
				type: 'line',
				data: chartdata
			});
		},
		error : function(data) {

		}
	});
});