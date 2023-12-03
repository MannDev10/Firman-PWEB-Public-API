const SoundtrackList = [
    { label: "Main Theme", audio: "./assets/audios/main_theme.mp3" },
    { label: "Valstrax", audio: "./assets/audios/valstrax.mp3" },
    { label: "Fatalis", audio: "./assets/audios/fatalis.mp3" },
    { label: "Galvenus", audio: "./assets/audios/glavenus.mp3" },
    { label: "Astalos", audio: "./assets/audios/astalos.mp3" },
    { label: "Mizutsune", audio: "./assets/audios/mizutsune.mp3" },
    { label: "Gammoth", audio: "./assets/audios/gammoth.mp3" },
];

const WeaponList = [
    { label: "Great Sword", image: "./assets/images/great_sword.png" },
    { label: "Long Sword", image: "./assets/images/long_sword.png" },
    {
        label: "Sword and Shield",
        image: "./assets/images/sword_and_shield.png",
    },
    { label: "Dual Blades", image: "./assets/images/dual_blade.png" },
    { label: "Hammer", image: "./assets/images/hammer.png" },
    { label: "Hunting Horn", image: "./assets/images/hunting_horn.png" },
    { label: "Lance", image: "./assets/images/lance.png" },
    { label: "Gunlance", image: "./assets/images/gunlance.png" },
    { label: "Switch Axe", image: "./assets/images/switch_axe.png" },
    { label: "Charge Blade", image: "./assets/images/charge_blade.png" },
    { label: "Insect Glaive", image: "./assets/images/insect_glaive.png" },
    { label: "Light Bowgun", image: "./assets/images/light_bowgun.png" },
    { label: "Heavy Bowgun", image: "./assets/images/heavy_bowgun.png" },
    { label: "Bow", image: "./assets/images/bow.png" },
];

function SoundtrackLoop(data) {
    const soundtracks = document.getElementById("soundtracks");
    for (var i = 0; i < data.length; i++) {
        let list = `<div class="audio-row">
                <h3 style="font-weight: 400">${data[i].label}</h3>
                <audio src="${data[i].audio}" controls></audio>
              </div>`;
        soundtracks.innerHTML += list;
    }
}
SoundtrackLoop(SoundtrackList);

function WeaponLoop(data) {
    const weapons = document.getElementById("weapons");
    for (var i = 0; i < data.length; i++) {
        let list = `<div class="image-column">
                  <img
                    src="${data[i].image}"
                    class="image-size"
                    alt=""
                  />
                  <h3 class="image-text">${data[i].label}</h3>
                </div>`;
        weapons.innerHTML += list;
    }
}
WeaponLoop(WeaponList);
