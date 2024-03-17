function app(){
    return {
        bookingData: '',
        allClasses:[],
        selectOption(){
            let selected = document.getElementsByClassName('options-booking');
            this.bookingData = this.displayClass(this.allClasses[0].start, this.allClasses[0].end, this.allClasses[0].date);
        },
        getClasses(){
            axios.get('/classes/all').then(response =>{
                this.allClasses = response.data;
                console.log(this.allClasses);
                this.selectOption();
            })
        },
        selectOptionId(id){
            //this.bookingData
            for(let i = 0; i< this.allClasses.length; i++)
            {
                if(id == this.allClasses[i].id)
                {
                    this.bookingData = this.displayClass(this.allClasses[i].start, this.allClasses[i].end, this.allClasses[i].date);
                }
            }
        },
        displayClass(start , end , date){
            return "Starts at: " + start + "<br> Ends at: " + end + "<br> Date: " +  date;
        },
        init(){
            this.getClasses();
        }
    }
}