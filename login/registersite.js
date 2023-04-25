function validateForm() {
    const password_wdh = document.getElementById('password_wdh').value;
    const password = document.getElementById('password').value;

    if (password_wdh != password) {
        alert('Die Passwörter sind nicht gleich.');
        return false;
    }

    if (!password.match(/[|\\/~^:,;?!&%$@*+]/)){
        alert('Nutzen sie bitte Sonderzeichen.');
        return false;
    }

    const username = document.getElementById('name').value;

    if (username.length < 5){
        alert('Nutze einen längeren Username.');
        return false;
    }

    return true;
}