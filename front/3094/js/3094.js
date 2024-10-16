// Hàm mở modal
function openModal(imageSrc) {
    document.getElementById('modalImage').src = 'img/' + imageSrc; // Cập nhật src với đường dẫn chính xác
    document.getElementById('myModal').style.display = 'flex'; // Hiện modal
}


// Hàm đóng modal
function closeModal() {
    document.getElementById('myModal').style.display = 'none'; // Ẩn modal
}

// Đóng modal khi nhấn ra ngoài hình ảnh
window.onclick = function(event) {
    const modal = document.getElementById('myModal');
    if (event.target === modal) {
        closeModal();
    }
}

