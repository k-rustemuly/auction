document.addEventListener("moonshine:init", () => {
    MoonShine.onCallback('reloadPage', function(response, element, events, component) {
        window.location.reload()
    })
})
