$(document).ready(function(){
	$.ajax({
		url: "http://localhost/editorial/jsmac/datamac.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var branch = [];
			var totalmac = [];
		
			for(var i in data) {
				branch.push("Branch " + data[i].branch);
				totalmac.push(data[i].totalmac);
				
			}



			var chartdata = {
				labels: branch,
				datasets : [
					{
						label: 'Branch Profit For March',
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						hoverBackgroundColor: "rgba(59, 89, 152, 1)",
						hoverBorderColor: "rgba(59, 89, 152, 1)",
						data: totalmac
					}
				]
			};

			var ctx = $("#mycanvasmac");

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