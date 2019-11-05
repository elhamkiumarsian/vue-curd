var app = new Vue({
    el: '#myapp',
    data: {
        users: "",
        userid: 0,
        username: "",
        name: "",
        email: ""
    },
    methods: {
        getAllUsers: function(){
            axios.post('ajaxfile.php', {
                request: 1
            })
            .then(function (response) {
                app.users = response.data;
            })
            .catch(function (error) {
                console.log(error);
            });
        },
        updateUser:function(index,id){
            // Read value from Textbox
			var name = this.users[index].name;
            var email = this.users[index].email;
                        
            axios.post('ajaxfile.php', {
                request: 2,
				id: id,
				name: name,
				email: email
            })
            .then(function (response) {
                alert(response.data);
            })
            .catch(function (error) {
                console.log(error);
            });
        },
        deleteUser:function(index,id){
            axios.post('ajaxfile.php', {
                request: 3,
				id: id
            })

            .then(function (response) {
                // Remove index from users
                app.users.splice(index, 1);
                alert(response.data);
            })
            .catch(function (error) {
                console.log(error);
            });
        }
    },
    mounted: function () {
        console.log('Hello from Vue!')
        this. getAllUsers()
      },
      
    
})

