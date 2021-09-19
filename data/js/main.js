const sub_nav = (id) => {
    let e = document.getElementById(id);
    if(e.style.display == 'none') e.style.display = 'flex';
    else if(e.style.display == 'flex') e.style.display ='none';
}