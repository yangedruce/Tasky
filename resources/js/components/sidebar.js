let isSidebarActive = false;

function toggleSidebar() {
    if(isSidebarActive) {
        $('#sidebar').removeClass('active');
        $('#sidebarItem').addClass('d-none');
        isSidebarActive = false;  
    } else {
        $('#sidebar').addClass('active');
        $('#sidebarItem').delay(150).removeClass('d-none');
        isSidebarActive = true;  
    }
}