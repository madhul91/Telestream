document.addEventListener("DOMContentLoaded", function () {
    const languageSelect = document.getElementById("language");
    const typeSelect = document.getElementById("type");
    const channels = document.querySelectorAll(".channel");

    languageSelect.addEventListener("change", filterChannels);
    typeSelect.addEventListener("change", filterChannels);

    function filterChannels() {
        const selectedLanguage = languageSelect.value;
        const selectedType = typeSelect.value;

        channels.forEach(function (channel) {
            const channelLanguage = channel.getAttribute("data-language");
            const channelType = channel.getAttribute("data-type");

            if ((selectedLanguage === "" || channelLanguage === selectedLanguage) &&
                (selectedType === "" || channelType === selectedType)) {
                channel.style.display = "block";
            } else {
                channel.style.display = "none";
            }
        });
    }
});
