$(document).ready(function(){
	$.ajax({
		url: "http://localhost/editorial/jsfeb/datafeb.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var branch = [];
			var totalfeb = [];
		
			for(var i in data) {
				branch.push("Branch " + data[i].branch);
				totalfeb.push(data[i].totalfeb);
				
			}



			var chartdata = {
				labels: branch,
				datasets : [
					{
						label: 'Branch Profit For February',
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						hoverBackgroundColor: "rgba(59, 89, 152, 1)",
						hoverBorderColor: "rgba(59, 89, 152, 1)",
						data: totalfeb
					}
				]
			};

			var ctx = $("#mycanvasfeb");

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