
document.addEventListener("DOMContentLoaded", async () => {
    let response = await fetch('services/getEstado.php');
    let data = await response.json();
    localStorage.status = data.eventStatus;
    if(localStorage.status === 'postinicial') {
        document.getElementById('nav-agenda').style.display = 'none';
    }
});