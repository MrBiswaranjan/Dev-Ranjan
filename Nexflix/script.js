<script>
    // Function to display success message with animation
    function showSuccessMessage(message, redirectUrl) {
        const successMessage = document.createElement('div');
        successMessage.classList.add('success-message');
        successMessage.textContent = message;
        document.body.appendChild(successMessage);

        setTimeout(() => {
            successMessage.classList.add('show');
            setTimeout(() => {
                window.location.href = redirectUrl; // Redirect after 3 seconds
            }, 3000);
        }, 100);
    }
</script>
