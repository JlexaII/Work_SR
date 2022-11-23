@section('login')
    
<!-- Modal Sistemaga kirish-->
<div class="modal fade" id="ModalK" tabindex="-1" aria-labelledby="KModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="KModalLabel">Administrator qismi</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button"
              role="tab" aria-controls="home-tab-pane" aria-selected="true">Kirish</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button"
              role="tab" aria-controls="profile-tab-pane" aria-selected="false">Ro'yxatdan o'tish</button>
          </li>          
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            <form action="#" method="post">
              <div class="mb-3">
                <i class="fa-solid fa-envelope"></i>
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">E-pochtangizni hech kim bilan baham ko'rmaymiz.</div>
              </div>
              <div class="mb-3">
                <i class="fa-solid fa-lock"></i>
                <label for="exampleInputPassword1" class="form-label">Parol</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" autocomplete="on" required>
                <a href="#" class="password-control"></a>
              </div>              
              <button type="submit" class="btn btn-primary">Bajarish</button>
            </form>
          </div>
          <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <form action="#" method="post">
              <div class="mb-3">
                <i class="fa-solid fa-envelope"></i>
                <label for="exampleInputEmail2" class="form-label">Email address</label>                
                <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">E-pochtangizni hech kim bilan baham ko'rmaymiz.</div>
              </div>              
              <div class="mb-3">
                <i class="fa-solid fa-lock"></i>
                <label for="exampleInputPassword2" class="form-label">Parol</label>                
                <input type="password" class="form-control" id="exampleInputPassword2" autocomplete="on">
                <a href="#" class="password-control"></a>
              </div>
              <!-- <div class="mb-3">
                <i class="fa-solid fa-phone"></i>
                <label for="tel" class="form-label">Telefon raqam</label>
                <input type="text" class="form-control" minlength="12" maxlength="12" id="tel">
              </div> -->
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                <label class="form-check-label" for="exampleCheck2"><a href="#">Ushbu</a> shartlarni qabul qilaman</label>
              </div>
              <button type="submit" class="btn btn-primary">Bajarish</button>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <ul class="nav col-md-4 tab-content list-unstyled d-flex">
          <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                <use xlink:href="#telegram"></use>
              </svg></a></li>
          <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                <use xlink:href="#instagram"></use>
              </svg></a></li>
          <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                <use xlink:href="#facebook"></use>
              </svg></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>