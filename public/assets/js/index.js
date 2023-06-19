

window.addEventListener('DOMContentLoaded', ()=> {
    lucide.createIcons()
    let profileBtn = document.querySelector("#profile-ctn")
    let profileDrop = document.querySelector("#profile-drop")
    console.log(profileBtn)
    profileBtn.addEventListener('click', ()=> {
        console.log('click')
        profileDrop.classList.toggle('profile-active')
    })
})
