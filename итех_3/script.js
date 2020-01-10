let elem1, elem2, elemTMP;

function selectImg(id) {
    elem1 = document.getElementById(id);
    elem1.style.border = 'solid 5px green';
    elem2 = document.getElementById((Number(id)+1));
    elem_1 = document.getElementById((Number(id)-1));
}

function onclickDown() {
    let swap = elem1.src;
    elem1.src = elem2.src;
    elem2.src = swap;
    elem1.style.border = 'solid 0 green';
}

function onclickUp() {
    let swap = elem1.src;
    elem1.src = elem_1.src;
    elem_1.src = swap;
    elem1.style.border = 'solid 0 green';
}

function keydown() {
	document.addEventListener( "keydown", event => {
        if(event.code == 'KeyU') onclickUp();
        if(event.code == 'KeyD') onclickDown();
    });
}
keydown();

function selectSize (selectSize) {
    let valueSize = selectSize.options[selectSize.selectedIndex].value;
    for (let i = 0; i < 7; i++) {
         document.getElementsByTagName("img").item(i).style = `width: ${valueSize}px;`;
    }
}