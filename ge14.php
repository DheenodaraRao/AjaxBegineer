<!DOCTYPE html>
<html>
<body>
<h1>List of Politicians</h1>

<p id="pol">
	<table id="myTable" style="border: 1px solid black; padding: 10px;">
		<tr>
			<th >Name</th>
			<th>Party</th>
		</tr>
		<table>
</p>

<script>
	var xhr = new XMLHttpRequest();
	
	xhr.onreadystatechange = function() {
		
		if(xhr.readyState == 4 && xhr.status == 200) {
			
			var politicians = JSON.parse(xhr.responseText);
			
			console.log(politicians);
			var table = document.getElementById("myTable");
			for(var i = 0; i < politicians.length; i++){
				var row = table.insertRow(-1);
				var cell1 = row.insertCell(0);
				cell1.innerHTML = politicians[i].name;

				var cell2 = row.insertCell(1);
				cell2.innerHTML = politicians[i].party;			}
		}
		
	}


	
	xhr.open('GET', 'api-data.php', true);
	xhr.send();
</script>
</body>
</html>