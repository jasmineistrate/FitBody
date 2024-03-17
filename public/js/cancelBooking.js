function confirmDeleteBooking(button){
    let bookingId = button.getAttribute('data-booking-id');
    let modal = document.getElementById('confirmation-modal');
    modal.style.display="flex";
    let yesButton = document.getElementById('yesConfirm');
    yesButton.setAttribute('bookingId', bookingId);
}

function deleteBooking(button){
    let bookingId = button.getAttribute('bookingId');
    axios.delete('/cancel/booking/' + bookingId).then(response=>{
        let modal = document.getElementById('confirmation-modal');
        modal.style.display="none";
        window.location.reload();
    })
}

function hideDeleteModal(){
    let modal = document.getElementById('confirmation-modal');
    modal.style.display="none";

}