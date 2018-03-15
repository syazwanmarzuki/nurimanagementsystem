$(document).ready(function(){
	$.ajax({
		url: "http://localhost/editorial/js/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var branch = [];
			var totaljan = [];
		
			for(var i in data) {
				branch.push("Branch " + data[i].branch);
				totaljan.push(data[i].totaljan);
				
			}



			var chartdata = {
				labels: branch,
				datasets : [
					{
						label: 'Branch Profit For January',
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						hoverBackgroundColor: "rgba(59, 89, 152, 1)",
						hoverBorderColor: "rgba(59, 89, 152, 1)",
						data: totaljan
					}
				]
			};

			var ctx = $("#mycanvas");

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