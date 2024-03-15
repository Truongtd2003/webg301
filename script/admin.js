// Hàm để kiểm tra URL hiện tại và xác định menu item tương ứng để active
function setActiveMenuItem() {
    var currentUrl = window.location.href;

    // Lấy danh sách tất cả các menu items
    var menuItems = document.querySelectorAll('.nav-menu li');

    // Lặp qua từng menu item để kiểm tra URL và áp dụng lớp active
    menuItems.forEach(function(item) {
        var link = item.querySelector('a').getAttribute('href');
        // Kiểm tra nếu URL hiện tại khớp với đường dẫn của menu item
        if (currentUrl.includes(link)) {
            // Loại bỏ lớp active từ tất cả các menu items
            menuItems.forEach(function(item) {
                item.classList.remove('active');
            });
            // Áp dụng lớp active cho menu item tương ứng
            item.classList.add('active');
        }
    });
}

// Gọi hàm setActiveMenuItem khi tài liệu HTML được tải
document.addEventListener('DOMContentLoaded', function() {
    setActiveMenuItem();
});


document.addEventListener("DOMContentLoaded", function() {
    // Find the table container
    var tableContainer = document.querySelector('.table-container');

    // Add event listener to prevent body scrolling when scrolling in the table container
    tableContainer.addEventListener('wheel', function(e) {
        if (e.deltaY !== 0) {
            e.preventDefault();
            tableContainer.scrollTop += e.deltaY;
        }
    });
});