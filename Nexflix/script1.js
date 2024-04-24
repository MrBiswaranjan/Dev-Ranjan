document.addEventListener("DOMContentLoaded", function () {
    const languageSelect = document.getElementById('language-select');
    const englishContent = document.getElementById('english-content');
    const hindiContent = document.getElementById('hindi-content');
    
    // Event listener for language selection change
    languageSelect.addEventListener('change', function() {
        const selectedLanguage = languageSelect.value;

        // Hide all content divs
        englishContent.style.display = 'none';
        hindiContent.style.display = 'none';

        // Show content for the selected language
        if (selectedLanguage === 'en') {
            englishContent.style.display = 'block';
        } else if (selectedLanguage === 'hi') {
            hindiContent.style.display = 'block';
        }
        // Add conditions for other languages
    });
});
