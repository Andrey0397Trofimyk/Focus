import { overflow } from "../../libs/overflow";

const buttons = Array.from(document.getElementsByClassName('js--toggle-menu')),
    removeButton = document.getElementsByClassName('js--menu-close')[0];

buttons?.map(button => {
    button?.addEventListener('click', function(e) {
        removeAll(buttons.filter(el => el != button));
        let content = document.getElementsByClassName(`${button.dataset.content}`)[0];
        if(!this.classList.contains('active')) {
            console.log(1);
            this.classList.add('active');
            content.classList.add('active');
            overflow();
        } else {
            this.classList.remove('active');
            content.classList.remove('active');    
        }
    });
});

removeButton?.addEventListener('click', e => {
    removeAll(buttons);
});

function removeAll(el) {
    console.log(2);
    el.map(item => {
        item.classList.remove('active');
        document.getElementsByClassName(`${item.dataset.content}`)[0]
        .classList.remove('active');
    })
    overflow(false);
}