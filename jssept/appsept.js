$(document).ready(function(){
	$.ajax({
		url: "http://localhost/editorial/jssept/datasept.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var branch = [];
			var totalsept = [];
		
			for(var i in data) {
				branch.push("Branch " + data[i].branch);
				totalsept.push(data[i].totalsept);
				
			}



			var chartdata = {
				labels: branch,
				datasets : [
					{
						label: 'Branch Profit For September',
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						hoverBackgroundColor: "rgba(59, 89, 152, 1)",
						hoverBorderColor: "rgba(59, 89, 152, 1)",
						data: totalsept
					}
				]
			};

			var ctx = $("#mycanvassept");

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