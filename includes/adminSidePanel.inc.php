<?php
echo '<div class=\'container-fluid sb-admin\'>
    <div class=\'row flex-nowrap sb-admin\'>
        <div class=\'col-auto col-md-3 col-xl-2 px-sm-2 px-0 \' style=\'background-color: #303030;\'>
            <div class="d-flex flex-column align-items-center justify-content-center px-3 pt-2 text-white ">
                <a href=\'#\' class=\'d-flex align-items-center menu_admin pb-3 mb-md-0 me-md-auto text-white text-decoration-none\'>
                    <span class=\'d-none d-sm-inline mt-4\' style=\'font-weight: bold;font-size: 1.8em;\'>Menu</span>
                </a>
                <ul class=\'nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start\' id=\'menu\'>
                    <li class=\'nav-item w-100\'>
                        <a href=\'manageOrders.php\' class=\'nav-link_2 align-middle px-0\'>
                            <i class=\'fs-5 bi-card-checklist\'></i> <span class=\'ms-1 d-none d-sm-inline\'>My Orders</span>
                        </a>
                    </li>
                    <li class=\'w-100\'>
                        <a href=\'#submenu1\' data-bs-toggle=\'collapse\' class=\'nav-link_2 px-0 align-middle\'>
                            <i class=\'fs-4 bi-shop\'></i> <span class=\'ms-1 d-none d-sm-inline\'>My Website</span> </a>
                            <div class=\'collapse\' id=\'submenu1\' data-bs-parent=\'#menu\'>
                                <ul class=\'nav flex-column ms-1\'>
                                    <li class=\'w-100\'>
                                        <a href=\'../index.php\' class=\'nav-link_mini px-0\'> <span class=\'d-none d-sm-inline\'>Home</span></a>
                                    </li>
                                    <li class=\'w-100\'>
                                        <a href=\'../public/menu.php\' class=\'nav-link_mini px-0\'> <span class=\'d-none d-sm-inline\'>Menu</span></a>
                                    </li>
                                    <li class=\'w-100\'>
                                        <a href=\'../public/others/aboutUs.php\' class=\'nav-link_mini px-0\'> <span class=\'d-none d-sm-inline\'>About us</span></a>
                                    </li>
                                    <li class=\'w-100\'>
                                        <a href=\'../public/others/contactUs.php\' class=\'nav-link_mini px-0\'> <span class=\'d-none d-sm-inline\'>Contact us</span></a>
                                    </li>
                                </ul>
                            </div>
                    </li>
                    <li class=\'w-100\'>
                        <a href=\'../admin/eventCalendar.php\' class=\'nav-link_2 px-0 align-middle\'>
                            <i class=\'fs-4 bi-calendar-event\'></i> <span class=\'ms-1 d-none d-sm-inline\'>Events Calendar</span> </a>
                    </li>
                    <li class=\'w-100\'>
                        <a href=\'../admin/addProduct.php\' class=\'nav-link_2 px-0 align-middle\'>
                            <i class=\'fs-4 bi-plus-circle\'></i> <span class=\'ms-1 d-none d-sm-inline\'>Add New Item</span> </a>
                    </li>
                    <li class=\'w-100\'>
                        <a href=\'../admin/manageProducts.php\' class=\'nav-link_2 px-0 align-middle\'>
                            <i class=\'fs-4 bi-pencil-square\'></i> <span class=\'ms-1 d-none d-sm-inline\'>Manage Products</span> </a>
                    </li>
                    <li class=\'w-100\'>
                        <a href=\'../admin/inquiries.php\' class=\'nav-link_2 px-0 align-middle\'>
                            <i class=\'fs-4 bi-envelope\'></i> <span class=\'ms-1 d-none d-sm-inline\'>Inquiries</span> </a>
                    </li>
                    <li class=\'w-100\'>
                        <a href=\'../admin/inventory.php\' class=\'nav-link_2 px-0 align-middle\'>
                            <i class=\'fs-4 bi-minecart\'></i> <span class=\'ms-1 d-none d-sm-inline\'>Inventory</span> </a>
                    </li>
                </ul>
            </div>
        </div>';
