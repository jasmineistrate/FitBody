function searchUserApp(){
    return {
        userQuery:'',
        userRez:[],
        searchUser(){
            axios.get('/search/users', {
                params: {
                    query:this.userQuery
                  }
            }).then(response=>{
                this.userRez = response.data;
            })
        }
        
    }
}