function renderDB() {
    const api = "/model/message_API.php";

    fetch(api)
        .then(res => res.json())
        .then(data => {
            const guestList = document.querySelector("#guest_List");
            if (!data || data.length === 0) {
                guestList.innerHTML = `
                    <div class="no_Data" style="font-size: 30px; padding: 20px;">
                        Không có dữ liệu.
                    </div>
                `;
                return;
            }
            let count = 0;
            let html = data.reverse().map(element => {
                
                if(element.confirm==="yes") {
                    count++;
                }
                return `<div class="guest_Items">
                    
                    <div class="guest_Item_Value sort_Massage">${element.name}</div>
                    <div class="guest_Item_Value">${element.message}</div>
                    <div class="guest_Item_Value">${element.confirm}</div>
                    <div class="guest_Item_Value">${element.date}</div>
                </div>
                
            `}).join("");
            let totalGuest = document.querySelector(".total_Guest_Value");
            totalGuest.innerHTML=`${count}`;

            guestList.innerHTML = html;
        })
        .catch(error => {
            console.error("Lỗi:", error);
        });
}

renderDB();