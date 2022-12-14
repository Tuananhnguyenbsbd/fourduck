<!-- BEGIN: Content -->
<div class="content">
            <!-- BEGIN: Top Bar -->
            <div class="top-bar">
                <!-- BEGIN: Breadcrumb -->
                <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Hóa đơn</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Trang chủ</li>
                    </ol>
                </nav>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Account Menu -->
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in"
                        role="button" aria-expanded="false" data-tw-toggle="dropdown">
                        <img alt="Midone - HTML Admin Template" src="dist/images/profile-5.jpg">
                    </div>
                    <div class="dropdown-menu w-56">
                        <ul class="dropdown-content bg-primary text-white">
                            <li class="p-2">
                                <div class="font-medium">Huỳnh Ngọc Tài</div>
                                <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">Chủ Shop FourDuck</div>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="user"
                                        class="w-4 h-4 mr-2"></i> Tài khoản </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="edit"
                                        class="w-4 h-4 mr-2"></i> Thêm sản phẩm mới </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock"
                                        class="w-4 h-4 mr-2"></i> Đổi mật khẩu </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="help-circle"
                                        class="w-4 h-4 mr-2"></i> Trợ giúp </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="index.php?url=backhome" class="dropdown-item hover:bg-white/5"> <i data-lucide="arrow-right"
                                        class="w-4 h-4 mr-2"></i> Home </a>
                            </li>
                            <li>
                                <a href="index.php?url=logout" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right"
                                        class="w-4 h-4 mr-2"></i> Đăng xuất </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END: Account Menu -->
            </div>
            <!-- END: Top Bar -->
            <h2 class="intro-y text-lg font-medium mt-10">
                Danh sách hóa đơn
            </h2>
            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">
                    <div class="flex w-full sm:w-auto">

                    </div>
                    <div class="hidden xl:block mx-auto text-slate-500">Hiển thị 1 đến 10 trong số 150 mục nhập</div>
                    <div class="w-full xl:w-auto flex items-center mt-3 xl:mt-0">
                        <div class="dropdown">
                            <button class="dropdown-toggle btn px-2 box" aria-expanded="false"
                                data-tw-toggle="dropdown">
                                <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4"
                                        data-lucide="plus"></i> </span>
                            </button>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="" class="dropdown-item"> <i data-lucide="arrow-left-right"
                                                class="w-4 h-4 mr-2"></i> Change Status </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item"> <i data-lucide="bookmark"
                                                class="w-4 h-4 mr-2"></i> Bookmark </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BEGIN: Data List -->
                <div class="intro-y col-span-12 overflow-auto 2xl:overflow-visible">
                    <table class="table table-report -mt-2">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">
                                    <input class="form-check-input" type="checkbox">
                                </th>
                                <th class="whitespace-nowrap">ID Hóa đơn</th>
                                <th class="whitespace-nowrap">Tên người mua</th>
                                <th class="text-center whitespace-nowrap">Trạng thái</th>
                                <th class="whitespace-nowrap">Tên sản phẩm</th>
                                <th class="text-right whitespace-nowrap">
                                    <div class="pr-16">Tổng Đơn</div>
                                </th>
                                <th class="text-center whitespace-nowrap">Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="intro-x">
                                <td class="w-10">
                                    <input class="form-check-input" type="checkbox">
                                </td>
                                <td class="w-40 !py-4"> <a href=""
                                        class="underline decoration-dotted whitespace-nowrap">#fourduck-001</a> </td>
                                <td class="w-40">
                                    <a href="" class="font-medium whitespace-nowrap">Huỳnh Ngọc Tài</a>
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">TP HCM</div>
                                </td>
                                <td class="text-center">
                                    <div class="flex items-center justify-center whitespace-nowrap text-success"> <i
                                            data-lucide="check-square" class="w-4 h-4 mr-2"></i> Đã thanh toán </div>
                                </td>
                                <td>
                                    <div class="whitespace-nowrap">Bộ PC 1 Tỷ</div>
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">13 Tháng 11, 12:55
                                    </div>
                                </td>
                                <td class="w-40 text-right">
                                    <div class="pr-16">1.000.000.000đ</div>
                                </td>
                                <td class="table-report__action">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center text-primary whitespace-nowrap mr-5"
                                            href="javascript:;"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i>
                                            Xem chi tiết </a>
                                        <a class="flex items-center text-primary whitespace-nowrap" href="javascript:;"
                                            data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i
                                                data-lucide="arrow-left-right" class="w-4 h-4 mr-1"></i> Xóa hóa đơn
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr class="intro-x">
                                <td class="w-10">
                                    <input class="form-check-input" type="checkbox">
                                </td>
                                <td class="w-40 !py-4"> <a href=""
                                        class="underline decoration-dotted whitespace-nowrap">#fourduck-002</a> </td>
                                <td class="w-40">
                                    <a href="" class="font-medium whitespace-nowrap">Nguyễn Tuấn Anh</a>
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">TP HCM</div>
                                </td>
                                <td class="text-center">
                                    <div class="flex items-center justify-center whitespace-nowrap text-pending"> <i
                                            data-lucide="check-square" class="w-4 h-4 mr-2"></i> Chờ thanh toán </div>
                                </td>
                                <td>
                                    <div class="whitespace-nowrap">Quần sịp</div>
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">10 Tháng 11, 00:20
                                    </div>
                                </td>
                                <td class="w-40 text-right">
                                    <div class="pr-16">500.000đ</div>
                                </td>
                                <td class="table-report__action">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center text-primary whitespace-nowrap mr-5"
                                            href="javascript:;"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i>
                                            Xem chi tiết </a>
                                        <a class="flex items-center text-primary whitespace-nowrap" href="javascript:;"
                                            data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i
                                                data-lucide="arrow-left-right" class="w-4 h-4 mr-1"></i> Xóa hóa đơn
                                        </a>
                                    </div>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
                <!-- END: Data List -->
                <!-- BEGIN: Pagination -->
                <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
                    <nav class="w-full sm:w-auto sm:mr-auto">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-left"></i> </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-left"></i> </a>
                            </li>
                            <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                            <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                            <li class="page-item">
                                <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-right"></i> </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-right"></i> </a>
                            </li>
                        </ul>
                    </nav>
                    <select class="w-20 form-select box mt-3 sm:mt-0">
                        <option>10</option>
                        <option>25</option>
                        <option>35</option>
                        <option>50</option>
                    </select>
                </div>
                <!-- END: Pagination -->
            </div>
            <!-- BEGIN: Delete Confirmation Modal -->
            <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="p-5 text-center">
                                <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                <div class="text-3xl mt-5">Are you sure?</div>
                                <div class="text-slate-500 mt-2">
                                    Do you really want to delete these records?
                                    <br>
                                    This process cannot be undone.
                                </div>
                            </div>
                            <div class="px-5 pb-8 text-center">
                                <button type="button" data-tw-dismiss="modal"
                                    class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                <button type="button" class="btn btn-danger w-24">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Delete Confirmation Modal -->
        </div>
        <!-- END: Content -->