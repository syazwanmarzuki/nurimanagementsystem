$(document).ready(function(){
	$.ajax({
		url: "http://localhost/editorial/jsapril/dataapril.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var branch = [];
			var totalapril = [];
		
			for(var i in data) {
				branch.push("Branch " + data[i].branch);
				totalapril.push(data[i].totalapril);
				
			}



			var chartdata = {
				labels: branch,
				datasets : [
					{
						label: 'Branch Profit For April',
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						hoverBackgroundColor: "rgba(59, 89, 152, 1)",
						hoverBorderColor: "rgba(59, 89, 152, 1)",
						data: totalapril
					}
				]
			};

			var ctx = $("#mycanvasapril");

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