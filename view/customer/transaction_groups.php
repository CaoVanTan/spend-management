<div class="category">
    <div class="seclect-category">
        <div class="header-category" style="padding: 25px;">
            <a href="#" class="jsIcon">
                <svg data-v-0698e127="" data-v-6db8f2f0="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24" aria-labelledby="ic_arrow_back" version="1.1">
                    <defs data-v-0698e127=""></defs>
                    <g data-v-0698e127="" id="Icons/account/ic_account" stroke="none" stroke-width="1" fill="rgba(0,0,0,.54)" fill-rule="evenodd">
                        <rect data-v-0698e127="" id="blue-background" fill-opacity="0" fill="#FFFFFF" x="0" y="0" width="24" height="24"></rect>
                        <polygon data-v-6db8f2f0="" id="Shape" points="19 6.415 17.585 5 12 10.585 6.415 5 5 6.415 10.585 12 5 17.585 6.415 19 12 13.415 17.585 19 19 17.585 13.415 12" data-v-0698e127=""></polygon>
                    </g>
                </svg>
            </a>
            <span style="margin-left: 30px;font-weight: 600;font-size: 20px;">Chọn nhóm</span>
        </div>

        <div class="search-category">
            <div class="search">
                <svg style="opacity: 0.6;" data-v-0698e127="" data-v-6db8f2f0="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="24" viewBox="0 0 24 24" aria-labelledby="ic_search" version="1.1" class="icon-search">
                    <defs data-v-0698e127=""></defs>
                    <g data-v-0698e127="" id="Icons/account/ic_account" stroke="none" stroke-width="1" fill="black" fill-rule="evenodd">
                        <rect data-v-0698e127="" id="blue-background" fill-opacity="0" fill="#FFFFFF" x="0" y="0" width="24" height="24"></rect>
                        <path data-v-6db8f2f0="" d="M16.8472,15.1496 L16.564,15.4328 L15.5056,14.3744 C16.5632,13.068 17.2,11.408 17.2,9.6 C17.2,5.4096 13.7904,2 9.6,2 C5.4096,2 2,5.4096 2,9.6 C2,13.7904 5.4096,17.2 9.6,17.2 C11.408,17.2 13.068,16.5632 14.3744,15.5056 L15.4328,16.564 L15.1496,16.8472 L19.9512,21.6488 L21.648,19.952 L16.8472,15.1496 L16.8472,15.1496 Z M9.6008,14.8 C6.7336,14.8 4.4008,12.4672 4.4008,9.6 C4.4008,6.7328 6.7336,4.4 9.6008,4.4 C12.468,4.4 14.8008,6.7328 14.8008,9.6 C14.8008,12.4672 12.4672,14.8 9.6008,14.8 L9.6008,14.8 Z" id="icon-search" data-v-0698e127=""></path>
                    </g>
                </svg>
                <input type="text" placeholder="Tìm kiếm" style="border: none;outline: none;background-color: #e9ecef;margin-left: 6px;">
            </div>
        </div>

        <div class="slider-category">
            <div class="slider">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a name="Expense" class="jsExpense nav-link nav-link1" href="#">Khoản chi tiêu</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr data-v-e5c19db8="" class="border-tabs" style="margin: 0">
        <!-- list expense -->
        <div class="list-expense">
            <?php
                $sql = "SELECT * FROM groups";
                $result = mysqli_query($con, $sql);
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo '<div id="'.$row['group_id'].'" class="list-item-expense">
                                <span style="padding-left: 15px;">'.$row['group_name'].'</span>
                            </div>';
                    }
                }
            ?>
        </div>
    </div>
</div>