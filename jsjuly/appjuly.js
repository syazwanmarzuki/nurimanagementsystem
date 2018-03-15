$(document).ready(function(){
	$.ajax({
		url: "http://localhost/editorial/jsjuly/datajuly.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var branch = [];
			var totaljuly = [];
		
			for(var i in data) {
				branch.push("Branch " + data[i].branch);
				totaljuly.push(data[i].totaljuly);
				
			}



			var chartdata = {
				labels: branch,
				datasets : [
					{
						label: 'Branch Profit For July',
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						hoverBackgroundColor: "rgba(59, 89, 152, 1)",
						hoverBorderColor: "rgba(59, 89, 152, 1)",
						data: totaljuly
					}
				]
			};

			var ctx = $("#mycanvasjuly");

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