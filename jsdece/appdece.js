$(document).ready(function(){
	$.ajax({
		url: "http://localhost/editorial/jsdece/datadece.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var branch = [];
			var totaldece = [];
		
			for(var i in data) {
				branch.push("Branch " + data[i].branch);
				totaldece.push(data[i].totaldece);
				
			}



			var chartdata = {
				labels: branch,
				datasets : [
					{
						label: 'Branch Profit For December',
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						hoverBackgroundColor: "rgba(59, 89, 152, 1)",
						hoverBorderColor: "rgba(59, 89, 152, 1)",
						data: totaldece
					}
				]
			};

			var ctx = $("#mycanvasdece");

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