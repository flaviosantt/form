document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault();
    const formData = new FormData(this);
    const response = document.getElementById("response");

    fetch("send.php", { method: "POST", body: formData })
    .then(res => res.json())
    .then(data => {
        response.style.color = data.status === "success" ? "green" : "red";
        response.innerText = data.message;
        if(data.status === "success") document.getElementById("contactForm").reset();
    })
    .catch(() => {
        response.style.color = "red";
        response.innerText = "Erro ao enviar.";
    });
});
