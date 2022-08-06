<section id="headOverNav">
    <div class="container-surround">
        <div class="row">
            <div class="header__space col-md-1"></div>
            <div class="header_contact col-md-6 row">
                <div class="header__number col-md-4"><a href="tel:08801648959654"><i class="fa-solid fa-phone"></i> +8801648959654</a></div>
                <div class="header__email col-md-4"><a href="mailto:fitx@mail.com"><i class="fa-solid fa-envelope"></i> fitx@gmail.com</a></div>
            </div>
            <div class="header__space col-md-1"></div>
            <div class="member_login col-md-4"><a data-bs-toggle="modal" data-bs-target="#loginModal" href=""><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a></div>
        </div>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content" action="" method="get">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">MEMBER LOGIN <i class="fa-solid fa-arrow-right-to-arc"></i></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="loginEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="loginEmail" aria-describedby="emailHelp">
                <div class="mb-3">
                    <label for="loginPass" class="form-label">Password</label>
                    <input type="password" class="form-control" id="loginPass">
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-outline-fancyYellow" data-bs-dismiss="modal">Login</button>
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
            </div>
        </form>
    </div>
</div>