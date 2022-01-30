const buttons = Array.from(document.getElementsByClassName('js--toggle-menu'));

buttons?.map(button => {
    button?.addEventListener('click', e => {
        let content = document.getElementsByClassName(`${button.dataset.content}`)[0];
        
        button.classList.toggle('active');
        content.classList.toggle('active');
    });
})