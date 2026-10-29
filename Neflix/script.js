var danhSachPhim = [
    {
        id: 1,
        ten: "Cảnh sát trưởng Labrado",
        thoiLuong: 20,
        banner: "../anh/anh1.jpg",
        trailer: "https://www.youtube.com/embed/bBHouM1lwLo"
    },
    {
        id: 2,
        ten: "Haikyu người khổng lồ tí hon",
        thoiLuong: 15,
        trailer: "https://www.youtube.com/embed/GxNMcEFVzkw"
    },
    {
        id: 3,
        ten: "Haikyu người khổng lồ tí hon",
        thoiLuong: 15,
        trailer: "https://www.youtube.com/embed/GxNMcEFVzkw"
    },
    {
        id: 4,
        ten: "Haikyu người khổng lồ tí hon",
        thoiLuong: 15,
        trailer: "https://www.youtube.com/embed/GxNMcEFVzkw"
    },
    {
        id: 5,
        ten: "Haikyu người khổng lồ tí hon",
        thoiLuong: 15,
        trailer: "https://www.youtube.com/embed/GxNMcEFVzkw"
    },
    {
        id: 6,
        ten: "Haikyu người khổng lồ tí hon",
        thoiLuong: 15,
        trailer: "https://www.youtube.com/embed/GxNMcEFVzkw"
    },
    {
        id: 7,
        ten: "Haikyu người khổng lồ tí hon",
        thoiLuong: 15,
        trailer: "https://www.youtube.com/embed/GxNMcEFVzkw"
    },
    {
        id: 8,
        ten: "Haikyu người khổng lồ tí hon",
        thoiLuong: 15,
        trailer: "https://www.youtube.com/embed/GxNMcEFVzkw"
    },
    {
        id: 9,
        ten: "Haikyu người khổng lồ tí hon",
        thoiLuong: 15,
        trailer: "https://www.youtube.com/embed/GxNMcEFVzkw"
    },
    {
        id: 10,
        ten: "Haikyu người khổng lồ tí hon",
        thoiLuong: 15,
        trailer: "https://www.youtube.com/embed/GxNMcEFVzkw"
    },
];

function xemTrailer() {
    // Ẩn banner đi
    document.getElementsByClassName("banner")[0].style = "display:none";
    // Hiển thị trailer
    document.getElementsByClassName("banner")[1].style = "display:block";

}

function timPhim(id) {
    for (var i = 0; i < danhSachPhim.length; i++) {
        if (danhSachPhim[i].id === id) {
            return danhSachPhim[i];
        }
    }
    return null;
}

// id của video đang chiếu ở banner lớn
var dangPhat = null;

function xemTrailer(id) {
    var banner = document.getElementById("banner");
    var phim = timPhim(id);

    if (!banner || !phim || !phim.trailer || id === dangPhat) {
        return;
    }

    // Lỗi 153: YouTube cần biết trang web gọi nó. Mở file bằng file:// thì không có.
    if (location.protocol === "file:") {
        alert("Lỗi 153: trang đang mở bằng file://. Hãy chạy qua http://localhost (Live Server hoặc python -m http.server).");
        return;
    }

    var url = new URL(phim.trailer);
    url.searchParams.set("autoplay", "1");
    url.searchParams.set("rel", "0");
    url.searchParams.set("origin", location.origin);

    var iframe = document.createElement("iframe");
    iframe.className = "banner-img";
    iframe.src = url.toString();
    iframe.title = phim.ten;
    iframe.style.border = "none";
    iframe.setAttribute("allow", "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share");
    iframe.setAttribute("referrerpolicy", "strict-origin-when-cross-origin");
    iframe.setAttribute("allowfullscreen", "");

    // Thay ảnh (hoặc video trước) ở banner lớn bằng trailer mới
    banner.innerHTML = "";
    banner.appendChild(iframe);
    dangPhat = id;
}

// Bấm banner hoặc poster có data-phim thì trailer chiếu ở banner lớn
document.addEventListener("click", function (e) {
    var muc = e.target.closest("[data-phim]");
    if (!muc) {
        return;
    }
    xemTrailer(Number(muc.dataset.phim));
    document.getElementById("banner").scrollIntoView({ behavior: "smooth" });
});
