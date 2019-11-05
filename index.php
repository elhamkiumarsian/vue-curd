
<!doctype html>
<html>
	<head>
		<title>Insert Update and Delete records from MySQL with Vue.js</title>
		<script src="vue.js"></script>
		<script src='axios.min.js'></script>
        

		<style>
			input[type=text]{
				width: 100%;
			}
		</style>
	</head>
	<body>
    <div id='myapp'>
			
			<table border='1' width='80%' style='border-collapse: collapse;'>
				<tr>
					<th>Username</th>
					<th>Name</th>
					<th>Email</th>
					<th></th>
				</tr>

				<!-- Add -->
				<tr>
					<td><input type='text' v-model='username'></td>
					<td><input type='text' v-model='name'></td>
					<td><input type='text' v-model='email'></td>
					<td><input type='button' value='Add' @click='addRecord();'></td>
				</tr>

				<!-- Update/Delete -->
				<tr v-for='(user,index) in users'>
					<td><input type='text' v-model='user.username' ></td>
					<td><input type='text' v-model='user.name' ></td>
					<td><input type='text' v-model='user.email' ></td>
					<td><input type='button' value='Update' @click='updateUser(index,user.id);'>&nbsp;
                    <input type='button' value='Delete' @click='deleteRecord(index,user.id)'></td>
				</tr>
			</table>
			
		</div>
<script src='app.js'></script>
    </body>
</html> 
</body>
</html>