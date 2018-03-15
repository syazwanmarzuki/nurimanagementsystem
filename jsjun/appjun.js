$(document).ready(function(){
	$.ajax({
		url: "http://localhost/editorial/jsjun/datajun.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var branch = [];
			var totaljun = [];
		
			for(var i in data) {
				branch.push("Branch " + data[i].branch);
				totaljun.push(data[i].totaljun);
				
			}



			var chartdata = {
				labels: branch,
				datasets : [
					{
						label: 'Branch Profit For June',
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						hoverBackgroundColor: "rgba(59, 89, 152, 1)",
						hoverBorderColor: "rgba(59, 89, 152, 1)",
						data: totaljun
					}
				]
			};

			var ctx = $("#mycanvasjun");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});