import Pristine from 'pristinejs';

let form = document.getElementsByClassName('js--search')[0],
    pristine = new Pristine(form, {
        classTo: 'js--search',
        errorClass: 'danger',
        successClass: 'success',
    });

form?.addEventListener('submit', function(e) {
    e.preventDefault();
    
    if(pristine.validate()) {
        form.submit();
    }
})