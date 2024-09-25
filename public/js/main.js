document.getElementById('btn-login').addEventListener('click', async function() {
    const email = document.getElementById('email-id').value;
    const pass = document.getElementById('pass-id').value;

    const response = await fetch('./app/controller/login.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: `email=${encodeURIComponent(email)}&pass=${encodeURIComponent(pass)}`
    });

    const result = await response.json();
    
    if (result[0] === 1) {
        window.location.href = './vista_datos.php'; 
    } else {
        alert(result[1]); 
    }
});
