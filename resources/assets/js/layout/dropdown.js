import { overflow } from '@/libs/overflow';

const buttons = Array.from(document.getElementsByClassName('js--toggle-menu')),
    buttonsClose = Array.from(document.getElementsByClassName('js--close-menu'));
    
let activeArea;

buttons?.map(button => {

    button.addEventListener('click', function() {

        let content = document.getElementsByClassName(this.dataset.content)[0];
        
        activeArea = [this, content];

        hideAll(activeArea);
        
        if(this.classList.contains('active')) {
            
            activeArea.map(el => el.classList.remove('active'));

            overflow(false);
            
            document.removeEventListener('click', documentWatch);
        } else {

            activeArea.map(el => el.classList.add('active'));

            overflow();

            document.addEventListener('click', documentWatch);
        }
    })
});

function documentWatch(e) {

    const isButton = e.target == activeArea[0] || activeArea[0].contains(e.target),
          isContent = e.target == activeArea[1] || activeArea[1].contains(e.target),
          isActive = activeArea[0].classList.contains('active');

    if(!isButton && !isContent && isActive) {

        overflow(false);

        hideAll()
    };
}

buttonsClose?.map(button => {
    button.addEventListener('click', function() {

        overflow(false);

        hideAll();
    })
})

function hideAll(filterArr = []) {

    let allButtons = buttons.filter(el => !filterArr.includes(el)),
    allContents = new Set(allButtons.map(el => document.getElementsByClassName(el.dataset.content)[0]));

    allButtons.concat(Array.from(allContents)).map(el => el.classList.remove('active'));
}
