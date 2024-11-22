<div class="flex flex-col w-full p-0 mt-0">
    <div class="card task-box border-2 border-orange-500 border-opacity-50 rounded-lg transition-shadow duration-300 hover:shadow-lg hover:shadow-orange-500">
        <div class="bg-orange-200 bg-opacity-25 rounded-t-lg p-4">
            <div class="flex justify-between items-center">
                <h6 class="text-primary font-semibold"><i class="fa fa-tag text-secondary"></i>
                    <strong>ประเภท : </strong> ${addressType}
                </h6>

                <label class="popup">
                    <input type="checkbox">
                    <div class="burger" tabindex="0">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <nav class="popup-window">
                        <legend>Actions</legend>
                        <ul>
                        <li>
                            <button data-id="${address.id}" onclick="openModal_Show_address_customer(this)">
                            <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8S1 12 1 12z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                            <span>แสดง</span>
                            </button>
                        </li>
                        <li>
                            <button data-id="${address.id}" onclick="openModal_Edit_address_customer(this)">
                            <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                <polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon>
                            </svg>
                            <span>แก้ไข</span>
                            </button>
                        </li>
                        <hr>
                        <li>
                            <button class="delete-btn" data-id="${address.id}">
                                <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                    <line y2="18" x2="6" y1="6" x1="18"></line>
                                    <line y2="18" x2="18" y1="6" x1="6"></line>
                                </svg>
                                <span>ลบ</span>
                            </button>
                        </li>
                        </ul>
                    </nav>
                </label>

            </div>
        </div>
        <div class="p-4">
            <div class="flex">
                <div class="flex-1">
                    <p class="mb-1"><strong><i class="fas fa-home"></i> ที่อยู่ : </strong>${houseNumber}</p>
                    <p class="mb-1"><strong><i class="fas fa-map-marker-alt"></i> จังหวัด : </strong>${province}</p>
                    <p class="mb-1"><strong><i class="fas fa-map"></i> อำเภอ : </strong>${district}</p>
                    <p class="mb-1"><strong><i class="fas fa-map-signs"></i> ตำบล : </strong>${tambon}</p>
                    <!--<p class="mb-1"><strong><i class="fas fa-envelope"></i> รหัสไปรษณีย์ : </strong>${postalCode}</p>
                    <p class="mb-1"><strong><i class="fa fa-map text-primary"></i> โซนบ้าน : </strong>${houseZone}</p>-->
                </div>

                <div class="flex-shrink-0">
                    <img src="{{ URL::asset('assets/image/img/home2.jpg') }}" alt="ที่อยู่ปัจจุบัน" class="w-36 h-20">
                </div>
            </div>
        </div>
        <div class="p-4 border-t">
            <small class="text-muted">
                <i class="fas fa-clock"></i> สร้างข้อมูลเมื่อ ${new Date(address.created_at).toLocaleDateString('th-TH', { year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit' })} น.
            </small>

        </div>
    </div>
</div>
