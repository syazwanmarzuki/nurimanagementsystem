$(document).ready(function(){
	$.ajax({
		url: "http://localhost/editorial/jsaug/dataaug.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var branch = [];
			var totalaug = [];
		
			for(var i in data) {
				branch.push("Branch " + data[i].branch);
				totalaug.push(data[i].totalaug);
				
			}



			var chartdata = {
				labels: branch,
				datasets : [
					{
						label: 'Branch Profit For August',
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						hoverBackgroundColor: "rgba(59, 89, 152, 1)",
						hoverBorderColor: "rgba(59, 89, 152, 1)",
						data: totalaug
					}
				]
			};

			var ctx = $("#mycanvasaug");

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