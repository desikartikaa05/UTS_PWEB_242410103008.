document.addEventListener("DOMContentLoaded", function() {
    const alerts = document.querySelectorAll(".alert");
    alerts.forEach(alert => {
        setTimeout(() => {
            alert.style.opacity = "0";
            alert.style.transition = "0.5s";
        }, 3000);
    });
});
