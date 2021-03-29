let prev, current, next;
let navMenu = document.querySelector("#navMenu");
let loadScreen = document.querySelector('#loadScreen');





loadScreen.focus();
['keydown','click','contextmenu'].forEach(event=>loadScreen.addEventListener(event,function(e){
    e.preventDefault();
    // loadScreen.classList.add('bounceOut')
    loadScreen.classList.add('fadeOut');
    loadScreen.classList.add('animated');
    loadScreen.removeAttribute('tabindex');
    [...navMenu.children].forEach(item=>item.setAttribute('tabindex',0));
    setTimeout(()=>loadScreen.remove(),1000);
}));


[prev,current,next]= initCurrent(navMenu);

current.classList.add('arrow')
// authentication
let authentication = ['a','u','t','h','e','n','t','i','c','a','t','i','o','n'];
let authCodePosition=0;
let auth =['a','u','t','h'];
count = 0;

document.body.addEventListener('keydown', function (e) {

    current.focus();
    requiredKey = auth[authCodePosition];


    if(e.key ===requiredKey){
        authCodePosition++;
        if(authCodePosition===auth.length){
            authComplete(navMenu);
            authCodePosition=0;
        }
    }
    if (e.key === 'ArrowDown') {
        goDown(navMenu);
        console.log(current);
    }
    if (e.key === 'ArrowUp') {
        goUp(navMenu);
        console.log(current);
    }

    if(e.key === 'Enter')
    {   count++;
        if(count>1) {
            switch (current.getAttribute('id')) {
                case 'games':
                    location.href = "/routes/games/index.php";
                    break;
                case 'emulators':
                    location.href = "/routes/emulators/index.php";
                    break;
                case 'options':
                    location.href = "/routes/options/index.php";
                    break;
                case 'howToPlay':
                    location.href = "/routes/howToPlay/index.php";
                    break;
                case 'about':
                    location.href = "/routes/about/index.php";
                    break;
                case 'login':
                    location.href = "/routes/login/index.php";
                    break;

            }
        }


    }
});


document.body.addEventListener('mouseover',function (e){
    if(e.target.closest('a')){
        current.classList.remove('arrow');
        current = e.target.closest('a');
        e.target.closest('a').classList.add('arrow');
    }
});

document.body.addEventListener('mouseout',function (e){
    if(e.target.closest('a')){
        current.classList.add('arrow');
        e.target.closest('a').classList.remove('arrow');

    }
})


