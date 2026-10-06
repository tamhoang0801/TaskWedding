function clickTitle() {
    const firstIntro = document.querySelector(".first_Intro");
    const secondIntro = document.querySelector(".second_Intro");
    const button = document.querySelector(".button_Title");
    const titleLeft = document.querySelector(".left_Title");
    const titleRight = document.querySelector(".right_Title");
    const dropLight = document.querySelector(".drop_Light");
    const titleWedding = document.querySelector(".title_Wedding");

    button.addEventListener("click", () => {
        firstIntro.style.display = "none";
        secondIntro.style.display = "none";
        button.style.display = "none";

        dropLight.classList.add("active");
        titleLeft.classList.add("active");
        titleRight.classList.add("active");

        titleRight.addEventListener("animationend", () => {
            titleWedding.classList.add("finished");
        });
    });
}
function introTitle() {
    const firstIntro = document.querySelector(".first_Intro");
    const secondIntro = document.querySelector(".second_Intro");

    firstIntro.addEventListener("animationend", () => {
        firstIntro.classList.add("done");
        secondIntro.classList.add("active");
    });

    secondIntro.addEventListener("animationend", () => {
        secondIntro.classList.add("done");
    });
    setTimeout(() => {
        const button = document.querySelector(".button_Title");
        button.style.display = "block";
        
    }, 7000);
    

}
function countdown(){
    let timeMarrieds = new Date("2026-11-28T09:00:00").getTime();
    
    setInterval(() => {
        let timeCurrent = new Date().getTime();

        let countdownValue = timeMarrieds - timeCurrent;

        const days = document.querySelector("#days");
        const hours = document.querySelector("#hours");
        const minutes = document.querySelector("#minutes");
        const seconds = document.querySelector("#seconds");

        days.textContent = Math.floor(
            countdownValue / (24 * 60 * 60 * 1000));
        hours.textContent = Math.floor(
            countdownValue % (24 * 60 * 60 * 1000) /
            (60 * 60 * 1000) );
        minutes.textContent = Math.floor(
            countdownValue % (24 * 60 * 60 * 1000) %
            (60 * 60 * 1000) /
            (60 * 1000));
        seconds.textContent = Math.floor( 
            countdownValue % (24 * 60 * 60 * 1000) %
            (60 * 60 * 1000) %
            (60 * 1000) /
            1000 );
    }, 1000);

}
function guestName() {
    const params = new URLSearchParams(window.location.search);
    const guest = params.get("guest");

    const guestElement = document.querySelector(".guest_Name");

    if (guest) {
        guestElement.textContent = guest;
    } else {
        guestElement.textContent = "Quý khách";
    }
}
function insertAnimation(){
    const buttonIntro = document.querySelector(".button_Title");
    const conIntroMarried = document.querySelector(".con_Intro_Married");
    const introBrideGroom = document.querySelector(".intro_Bride_Groom");
    const placeInfor = document.querySelector(".place_Infor");
    const confirmAttendance = document.querySelector(".confirm_Attendance");
    const countdown = document.querySelector(".countdown");
    const loveStory = document.querySelector(".love_Story");
    const introAlbum = document.querySelector(".intro_Album");
    const albumItems = document.querySelector(".album_Items");
    const finalItems = document.querySelector(".final_Items");
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
                buttonIntro.addEventListener("click", () => {
                    setTimeout(() => {
                        if (entry.target === conIntroMarried) {
                            const items = conIntroMarried.querySelectorAll(
                                ".item_Intro_Married"
                            );
                            items[0].classList.add("left_Animation");
                            items[2].classList.add("right_Animation");
                        }
                    },2000);
                });
                
            
            if (entry.target === introBrideGroom) {
                const groom = introBrideGroom.querySelector(".name_Groom_Item");
                const bride = introBrideGroom.querySelector(".name_Bride_Item");
                groom.classList.add("left_Animation");
                bride.classList.add("right_Animation");
            }
            if (entry.target === placeInfor) {
                const items = placeInfor.querySelectorAll(
                    ".place_Infor_Item"
                );
                items[0].classList.add("left_Animation");
                items[1].classList.add("right_Animation");
            }
            if (entry.target === confirmAttendance) {
                const title = confirmAttendance.querySelector(".title_CA");
                const quote = confirmAttendance.querySelector(".quote_CA");
                const form = confirmAttendance.querySelector(".form_CA");
                title.classList.add("left_Animation");
                quote.classList.add("right_Animation");
                form.classList.add("left_Animation");
            }
            if (entry.target === countdown) {
                const title = countdown.querySelector(".title_Countdown");
                const items = countdown.querySelectorAll(
                    ".countdown_Item"
                );
                title.classList.add("left_Animation");  
            }
            if (entry.target === loveStory) {
                const title = loveStory.querySelector(".title_LS");
                const image = loveStory.querySelector(".img_LS");
                const content = loveStory.querySelector(".contain_LS");
                title.classList.add("left_Animation");
                image.classList.add("right_Animation");
                content.classList.add("left_Animation");
            }
            if (entry.target === introAlbum) {
                const images = introAlbum.querySelectorAll(
                    ".intro_Album_Item"
                );
                images[0].classList.add("left_Animation");
                images[1].classList.add("right_Animation");
            }
            if (entry.target === albumItems) {
                const images = albumItems.querySelectorAll(
                    ".img_Item"
                );
                images.forEach((image, index) => {

                    if (index % 2 === 0) {
                        image.classList.add("left_Animation");
                    } else {
                        image.classList.add("right_Animation");
                    }
                });
            }
            if (entry.target === finalItems) {
                const title = finalItems.querySelector("h4");
                const quote = finalItems.querySelector(".quote_Final");
                const image = finalItems.querySelector(".img_Final");
                title.classList.add("left_Animation");
                quote.classList.add("right_Animation");
                image.classList.add("left_Animation");
            }
        });
    });
    observer.observe(conIntroMarried);
    observer.observe(introBrideGroom);
    observer.observe(placeInfor);
    observer.observe(confirmAttendance);
    observer.observe(countdown);
    observer.observe(loveStory);
    observer.observe(introAlbum);
    observer.observe(albumItems);
    observer.observe(finalItems);
}
function playAudio(){
    const clickAudio = document.querySelector(".link_Music i");
    const audio = document.querySelector(".link_Music audio");
    clickAudio.addEventListener("click", (value, index)=>{
        if(audio.paused){
            audio.play();
            clickAudio.classList.add("fa-volume-high");
            clickAudio.classList.remove("fa-volume-xmark");
        }
        else {
            audio.pause();
            clickAudio.classList.remove("fa-volume-high");
            clickAudio.classList.add("fa-volume-xmark");

        }
    });
}
function contentLS() {
    const loveStory = "model/loveStory.json";
    const containLS = document.querySelector(".contain_LS");
    const inputField = document.querySelector(".input_LS");

    fetch(loveStory)
        .then((res) => {
            if (!res.ok) {
                throw new Error(`Không thể tải file: ${res.status}`);
            }

            return res.json();
        })
        .then((data) => {
            console.log("Love Story:", data);

            // Xóa nội dung cũ
            containLS.innerHTML = "";

            // Render ra contain_LS
            data.forEach((paragraph) => {
                const p = document.createElement("p");

                p.textContent = paragraph;

                containLS.appendChild(p);
            });

            // Đưa nội dung vào textarea
            inputField.value = data.join("\n\n");
        })
        .catch((error) => {
            console.error("Lỗi:", error);
        });
}
function editStory() {
    const inputField = document.querySelector(".input_LS");
    const buttonSubmit = document.querySelector(".submit_Edit");
    const containLS = document.querySelector(".contain_LS");

    buttonSubmit.addEventListener("click", () => {

        // Lấy nội dung textarea
        const data = inputField.value
            .split(/\n\s*\n/)
            .filter(item => item !== "");

        // Xóa nội dung cũ
        const loveStoryAPI = "model/loveStory_API.php";
        fetch(loveStoryAPI, {
            method: "PUT",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(data)
        })
        .then((res) => {
            if (!res.ok) {
                throw new Error(`Không thể cập nhật file: ${res.status}`);
            }

            return res.json();
        })
        .then((result) => {
            console.log("Kết quả:", result);
            containLS.innerHTML = "";
            result.data.forEach((paragraph) => {
                const p = document.createElement("p");

                p.textContent = paragraph;

                containLS.appendChild(p);
            });
            inputField.value = result.data.join("\n\n");
        })
        .catch((error) => {
            console.error("Lỗi:", error);
        });
    });
}
function displayEditButton() {
    const containerEditIcon = document.querySelector(".container_EditIcon");
    containerEditIcon.innerHTML = '<i class="fa-solid fa-pen-to-square"></i>';
    const editIcon = containerEditIcon.querySelector(".fa-pen-to-square");
    const formEditLS = document.querySelector(".form_EditLS");

    editIcon.addEventListener("click", () => {
        formEditLS.style.display = "block";
    });
    const CloseIcon = formEditLS.querySelector(".fa-xmark");
    CloseIcon.addEventListener("click", () => {
        formEditLS.style.display = "none";
    });
}
function start() {
    // displayEditButton();
    contentLS();
    editStory();
    introTitle();
    clickTitle();
    countdown();
    guestName();
    insertAnimation();
    playAudio();
}
start();