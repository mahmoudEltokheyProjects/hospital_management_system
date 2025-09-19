document.querySelectorAll('.switch-language').forEach(item => {
    item.addEventListener('click', function(e) {
        // Update the button immediately
        const newLocale = this.getAttribute('data-locale');
        const newFlag = this.getAttribute('data-flag');
        const newLanguageName = this.textContent.trim();

        document.getElementById('currentLanguage').innerHTML = `
            ${newLanguageName}
            <img src="${newFlag}" alt="${newLanguageName}" class="ml-2">
        `;

        // Allow the default link behavior to reload the page
    });
});
