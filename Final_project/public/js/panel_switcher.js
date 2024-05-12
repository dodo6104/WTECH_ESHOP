function toggleSwitch(panelId){

    // first we get all input panels and hide them
    var inputPanels = document.getElementsByClassName('input-panel');

    for(var i = 0; i < inputPanels.length; i++){
        inputPanels[i].style.display = 'none';

        var inputEntries = inputPanels[i].querySelectorAll('.input-entry, .password-entry');
        
        // now we clear contents from all inputs
        // if input's class is 'password-entry', it is ensured that its type is reset back to 'password'
        for(var g = 0; g < inputEntries.length; g++){
            inputEntries[g].value = "";

            if (inputEntries[g].classList.contains('password-entry') && inputEntries[g].type === 'text') {
                inputEntries[g].type = 'password';
            }
        }
    }


    var element = document.getElementById(panelId);
    element.style.display = 'flex';

    if (panelId === "log-in-panel"){
        window.history.pushState({}, '', '/login');
    }
    else if (panelId === "register-panel"){
        window.history.pushState({}, '', '/register');
    }
}