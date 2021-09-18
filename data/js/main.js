const sub_nav = (id) => {
    let e = document.getElementById(id);
    if(e.style.display == 'none') e.style.display ='block';
    else if(e.style.display == 'block') e.style.display ='none';
}