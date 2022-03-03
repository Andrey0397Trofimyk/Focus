let languages = Array.from(document.getElementsByClassName('js--languages'));

languages?.map(el => {
    el.addEventListener('click', function(e) {
        e.preventDefault();

        languages.filter(item => item != el)
        .map(item => item.classList.remove('active'));
        
        el.classList.add('active');
    })
})