<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleFile/main.css">
    <!-- <link rel="stylesheet" href="styleFile/index.css"> -->

    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <title>Thiệp mời đám cưới</title>
</head>
<body>
    <header class="title_Wedding">
        <div class="left_Title"></div>
        <div class="right_Title"></div>
        <div class="title_Intro">
            <div class="first_Intro">
                Ta đi qua bao nhiêu con đường, gặp gỡ bao nhiêu người,
            </div>
            <div class="second_Intro">
                chỉ để tìm một người cùng ta viết tiếp hành trình của đời mình.
            </div>
        </div>
        <button class="button_Title">Khám phá ngay</button>
        <div class="drop_Light"></div>
    </header>
    <main class="website">
        <div class="background">  
        </div>
        <div class="content_Main">
            <div class="con_Intro_Married">
                <img src="link_Images/Ảnh intro.jpg" alt="" class="img_Intro">
                <div class="name_Intro">
                    <div class="item_Intro_Married ">PHƯỚC TIẾN</div>
                    <div class="item_Intro_Married">
                        <img src="link_Images/hearts.png" class="img_Heart" alt="">
                    </div>
                    <div class="item_Intro_Married ">PHƯƠNG LINH</div>
                    <div class="intro_Final">W E  <div class="space"></div> G E T  <div class="space"></div> M A R R I E D !</div>
                </div>
            </div>
            <div class="quote">
                <p>
                    "Và chẳng nghe rằng tình yêu<br>
                    Thương nhau đến lúc bạc đầu còn thương."
                </p>
            </div>
            <div class="intro_Bride_Groom">
                <div class="intro_Groom">
                    <div class="name_Groom_Item ">
                        <div class="title_Name_Groom">Chú rể</div>
                        <div class="name_Groom">Phước Tiến</div>
                    </div>
                    <img src="link_Images/ảnh chú rể.jpg" alt="" class="img_Intro_Groom">
                </div>
                <div class="intro_Bride">
                    <img src="link_Images/ảnh cô dâu.jpg" alt="" class="img_Intro_Bride">
                    <div class="name_Bride_Item ">
                        <div class="title_Name_Bride">Cô dâu</div>
                        <div class="name_Groom">Phương Linh</div>
                    </div>
                    
                </div>
            </div>
            <div class="guest">
                <div class="guest_Item">TRÂN TRỌNG KÍNH MỜI !</div>
                <div class="guest_Item guest_Name">Em Minh Tâm</div>
                <div class="guest_Item">TỚI DỰ </div>
            </div>
            <div class="place_Infor">
                <div class="place_Infor_Item ">
                    <div class="title_PI">LỄ THÀNH HÔN</div>
                    <div class="value_PI_Contain">
                        <div class="value_PI_Item">09H00 - Thứ Bảy</div>
                        <div class="value_PI_Item">28.02.2026</div>
                        <div class="value_PI_Item">( Tức ngày 12 tháng 01 năm Bính Ngọ)</div>
                    </div>
                </div>

                <div class="place_Infor_Item ">
                    <div class="title_PI">TIỆC CƯỚI NHÀ TRAI</div>
                    <div class="value_PI_Contain">
                        <div class="value_PI_Item">11H00 - Thứ Bảy</div>
                        <div class="value_PI_Item">28.02.2026</div>
                        <div class="value_PI_Item">( Tức ngày 12 tháng 01 năm Bính Ngọ)</div>
                    </div>
                </div>
            </div>
            <div class="address">
                <div class="title_Add">TẠI: TƯ GIA NHÀ TRAI</div>
                <div class="name_Add">Thôn Gia Độ, Xã Triệu Bình, Tỉnh Quảng Trị</div>
                <button class="link_Map" onclick="window.open('https://www.google.com/maps/place/%C4%90%E1%BB%99i+2,+Tri%E1%BB%87u+%C4%90%E1%BB%99,+Tp.+%C4%90%C3%B4ng+H%C3%A0,+Qu%E1%BA%A3ng+Tr%E1%BB%8B,+Vi%E1%BB%87t+Nam/@16.8458862,107.1297241,17z/data=!3m1!4b1!4m6!3m5!1s0x3140e676b4b4fe89:0x2ead14ece49738ab!8m2!3d16.8457924!4d107.1329442!16s%2Fg%2F12hsw0ykd?entry=ttu&g_ep=EgoyMDI2MDkwOS4wIKXMDSoASAFQAw%3D%3D')">Xem chỉ đường</button>
            </div>
            <div class="confirm_Attendance">
                <div class="title_CA">XÁC NHẬN THAM DỰ</div>
                <div class="quote_CA">Hãy xác nhận sự có mặt của bạn để chúng mình chuẩn bị đón tiếp một cách chu đáo nhất.
                    Trân thành cảm ơn!
                </div>
                <form action="model/message.php" class="form_CA" method="POST">
                    <input type="text" name="name" id="" class="name_CA" placeholder="Tên của bạn" required>
                    <input type="text" name="message" id="" class="message_CA" placeholder="Gửi lời chúc" required>
                    <div class="contain_Option">
                        <div class="option_Item">
                            <input type="radio" name="confirm" class="option" value="yes" required>
                            <span>Tôi sẽ tham gia</span>
                        </div>
                        <div class="option_Item">
                            <input type="radio" name="confirm" class="option" value="no" required>
                            <span>Thật tiếc mình bận mất rồi</span>
                        </div>
                        <div class="option_Item">
                            <input type="radio" name="confirm" class="option" value="maybe" required>
                            <span>Tôi sẽ cân nhắc</span>
                        </div>
                    </div>
                    <button type="submit" class="submit_CA">Xác nhận và gửi lời chúc </button>
                </form>
            </div>
            <div class="countdown">
                <div class="title_Countdown">Countdown</div>                
                <div class="countdown_Contain">
                    <div class="countdown_Item">
                        <div class="countdown_Number" id="days">00</div>
                        <div class="countdown_Label">DAYS</div>
                    </div>
                    <div class="countdown_Item">
                        <div class="countdown_Number" id="hours">00</div>
                        <div class="countdown_Label">HOURS</div>
                    </div>

                    <div class="countdown_Item">
                        <div class="countdown_Number" id="minutes">00</div>
                        <div class="countdown_Label">MINUTES</div>
                    </div>

                    <div class="countdown_Item">
                        <div class="countdown_Number" id="seconds">00</div>
                        <div class="countdown_Label">SECONDS</div>
                    </div>
                </div>
            </div>
            <div class="love_Story">
                
                <div class="title_LS">Câu chuyện tình yêu</div>
                <img src="link_Images/ảnh love store.webp" alt="" class="img_LS">

                <div class="container_EditIcon">
                    
                </div>
                <div class="form_EditLS">
                    <div class="content_LS">
                        <i class="fa-solid fa-xmark"></i>
                        <h4>Câu chuyện tình yêu</h4>
                        <textarea type="text" name="love_story" id="" class="input_LS" rows="5"></textarea>
                        <button type="submit" class="submit_Edit">Chỉnh sửa</button>
                    </div>
                </div>
                <div class="contain_LS">
                   
                </div>
            </div>
            <div class="album">
                <div class="intro_Album">
                    <img src="link_Images/album ảnh 8.jpg" alt="" class="intro_Album_Item ">
                    <img src="link_Images/album ảnh 9.jpg" alt="" class="intro_Album_Item ">
                </div>
                <div class="title_Album">ALBUM</div>
                <div class="quote_Album">Như cánh cửa thời gian kết nối những chuyến đi
                    đã qua và thời khắc hiện tại, Mỗi bức ảnh là
                    một câu chuyện của hành trình cảm xúc!
                </div>
                <div class="contain_Album">
                    <div class="album_Items">
                        <img src="link_Images/album ảnh 1.jpg" alt="" class="img_Item ">
                        <img src="link_Images/album ảnh 2.jpg" alt="" class="img_Item ">
                        <img src="link_Images/album ảnh 3.jpg" alt="" class="img_Item ">
                        <img src="link_Images/album ảnh 4.jpg" alt="" class="img_Item ">
                        <img src="link_Images/album ảnh 5.jpg" alt="" class="img_Item ">
                        <img src="link_Images/album ảnh 6.jpg" alt="" class="img_Item ">
                    </div>
                    <div class="final_Items">
                        <div class="title_Final">
                            <h4 class="">Thank you !</h4>
                            <div class="quote_Final ">
                                Sự hiện diện của quý khách là món quà ý nghĩa, là lời chúc phúc tuyệt vời nhất đối với gia đình chúng tôi, xin kính chúc quý khách cùng gia đình - bình an - hạnh phúc.
                                Rất hân hạnh được đón tiếp
                            </div>
                        </div>

                        <img src="link_Images/album ảnh 7.jpg" alt="" class="img_Final">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="link_Music">
            <audio src="linkMusic/2026-09-19-23-51-28.mp3" ></audio>
            <i class="fa-solid fa-volume-xmark "></i>
        </div>
    </main>
    
    <script src="script/index.js"></script>

</body>
</html>