document.addEventListener("DOMContentLoaded", function () {
    const languageSelect = document.getElementById("language");
    const typeSelect = document.getElementById("type");
    const searchBar = document.getElementById("searchBar");
    const channels = document.querySelectorAll(".channel");

    languageSelect.addEventListener("change", filterChannels);
    typeSelect.addEventListener("change", filterChannels);
    searchBar.addEventListener("input", filterChannels);

    function filterChannels() {
        const selectedLanguage = languageSelect.value;
        const selectedType = typeSelect.value;
        const searchTerm = searchBar.value.toLowerCase();

        channels.forEach(function (channel) {
            const channelLanguage = channel.getAttribute("data-language");
            const channelType = channel.getAttribute("data-type");
            const channelName = channel.querySelector(".channel-info h2").textContent.toLowerCase();

            if ((selectedLanguage === "" || channelLanguage === selectedLanguage) &&
                (selectedType === "" || channelType === selectedType) &&
                (searchTerm === "" || channelName.includes(searchTerm))) {
                channel.style.display = "block";
            } else {
                channel.style.display = "none";
            }
        });
    }
});
