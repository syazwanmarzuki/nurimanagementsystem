$(document).ready(function(){
	$.ajax({
		url: "http://localhost/editorial/jsnov/datanov.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var branch = [];
			var totalnov = [];
		
			for(var i in data) {
				branch.push("Branch " + data[i].branch);
				totalnov.push(data[i].totalnov);
				
			}



			var chartdata = {
				labels: branch,
				datasets : [
					{
						label: 'Branch Profit For November',
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						hoverBackgroundColor: "rgba(59, 89, 152, 1)",
						hoverBorderColor: "rgba(59, 89, 152, 1)",
						data: totalnov
					}
				]
			};

			var ctx = $("#mycanvasnov");

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