function initCurrent(element){
    current = element.firstElementChild;
    next = current.nextElementSibling;
    prev = element.lastElementChild;

    return [prev,current,next];
}

function goUp(element){
    [prev, current, next] = [
        prev.previousElementSibling || element.lastElementChild,
        prev,
        current,
    ];
    current.classList.add('arrow');
    prev.classList.remove('arrow');
    next.classList.remove('arrow');
    current.focus();
}

function goDown(element){
    [prev, current, next] = [
        current,
        next,
        next.nextElementSibling || element.firstElementChild,
    ];
    prev.classList.remove('arrow');
    current.classList.add('arrow');
    current.focus();
}

function authComplete(element){
    let li = document.createElement('li');
    li.classList.add('menu');
    li.setAttribute('tabindex',0);
    li.id="login";
    let a = document.createElement('a');
    a.innerText="login";
    a.href="/routes/login/index.php";
    li.append(a);
    element.append(li);
    li.classList.add('animated-login');
    li.classList.add('fadeIn');
    const audio = new Audio("/assets/audio/S1_BF.wav");
    audio.volume=0.05;
    audio.play();
    setTimeout(()=>['animated-login','fadeIn'].forEach(item=>li.classList.remove(item)),1000);
    return false;
}