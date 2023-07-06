document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.ms_form');
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');

    const errorMessage = document.getElementById('errorTech');

    const name = document.getElementById('name');
    const surname = document.getElementById('surname');
    const eMail = document.getElementById('email');
    const address = document.getElementById('address');
    const city = document.getElementById('city');
    const errorNameMessageEmpty = document.getElementById('errorNameEmpty');
    const errorSurnameMessageEmpty = document.getElementById('errorSurnameEmpty');

    const errorAddressMessageEmpty = document.getElementById('errorAddressEmpty');
    const errorCityMessageEmpty = document.getElementById('errorCityEmpty');

    

    form.addEventListener('submit', function(event) 

    {
       

        let checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked);

        if (!checkedOne) {
            event.preventDefault();
            errorMessage.textContent ='Select at least one technology' ;
        }
      

        if(name.value === '' ) {
                event.preventDefault();
                errorNameMessageEmpty.textContent ='Field must not be empty';

             } 

        if(surname.value === '' ) {
                event.preventDefault();
                errorSurnameMessageEmpty.textContent ='Field must not be empty';

             } 

        if(address.value === '' ) {
                event.preventDefault();
                errorAddressMessageEmpty.textContent ='Field must not be empty';

             } 
        
        if(city.value === '' ) {
                event.preventDefault();
                errorCityMessageEmpty.textContent ='Field must not be empty';

             } 
        
   
    });
});



