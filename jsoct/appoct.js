$(document).ready(function(){
	$.ajax({
		url: "http://localhost/editorial/jsoct/dataoct.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var branch = [];
			var totaloct = [];
		
			for(var i in data) {
				branch.push("Branch " + data[i].branch);
				totaloct.push(data[i].totaloct);
				
			}



			var chartdata = {
				labels: branch,
				datasets : [
					{
						label: 'Branch Profit For October',
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						hoverBackgroundColor: "rgba(59, 89, 152, 1)",
						hoverBorderColor: "rgba(59, 89, 152, 1)",
						data: totaloct
					}
				]
			};

			var ctx = $("#mycanvasoct");

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